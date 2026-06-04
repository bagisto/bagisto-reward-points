<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container;
use Webkul\Product\Repositories\ProductCustomizableOptionRepository;
use Webkul\Rewards\Helpers\CartHelper as RewardCartHelper;
use Webkul\Sales\Contracts\Order;
use Webkul\Sales\Repositories\DownloadableLinkPurchasedRepository;
use Webkul\Sales\Repositories\OrderItemRepository;
use Webkul\Sales\Repositories\OrderRepository as BaseOrderRepository;

class OrderRepository extends BaseOrderRepository
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected OrderItemRepository $orderItemRepository,
        protected ProductCustomizableOptionRepository $productCustomizableOptionRepository,
        protected DownloadableLinkPurchasedRepository $downloadableLinkPurchasedRepository,
        protected RewardCartHelper $rewardCartHelper,
        protected RewardPointRepository $rewardPointRepository,
        Container $container,
    ) {
        parent::__construct(
            $orderItemRepository,
            $productCustomizableOptionRepository,
            $downloadableLinkPurchasedRepository,
            $container,
        );
    }

    /**
     * Update order status.
     *
     * @param  Order  $order
     * @param  string  $orderState
     * @return void
     */
    public function updateOrderStatus($order, $orderState = null)
    {
        if (! empty($orderState)) {
            $status = $orderState;
        } else {
            $status = 'processing';

            if ($this->isInCompletedState($order)) {
                $status = 'completed';
            }

            if ($this->isInCanceledState($order)) {
                $status = 'canceled';
            } elseif ($this->isInClosedState($order)) {
                $status = 'closed';
            }
        }

        $order->status = $status;
        $order->save();

        $this->rewardPointRepository->updateStatus($order, $status);
    }

    /**
     * Collect totals.
     *
     * @param  Order  $order
     * @return mixed
     */
    public function collectTotals($order)
    {
        // order invoice total
        $order->sub_total_invoiced = $order->base_sub_total_invoiced = 0;
        $order->shipping_invoiced = $order->base_shipping_invoiced = 0;
        $order->tax_amount_invoiced = $order->base_tax_amount_invoiced = 0;
        $order->discount_invoiced = $order->base_discount_invoiced = 0;

        foreach ($order->invoices as $invoice) {
            $order->sub_total_invoiced += $invoice->sub_total;
            $order->base_sub_total_invoiced += $invoice->base_sub_total;

            $order->shipping_invoiced += $invoice->shipping_amount;
            $order->base_shipping_invoiced += $invoice->base_shipping_amount;

            $order->tax_amount_invoiced += $invoice->tax_amount;
            $order->base_tax_amount_invoiced += $invoice->base_tax_amount;

            $order->discount_invoiced += $invoice->discount_amount;
            $order->base_discount_invoiced += $invoice->base_discount_amount;
        }

        $redemptions = 0;

        if ($order->points) {
            $redemptions = $this->rewardCartHelper->redemption($order->points);
        }

        $order->grand_total_invoiced = $order->sub_total_invoiced + $order->shipping_invoiced + $order->tax_amount_invoiced - $order->discount_invoiced;
        $order->base_grand_total_invoiced = $order->base_sub_total_invoiced + $order->base_shipping_invoiced + $order->base_tax_amount_invoiced - $order->base_discount_invoiced;

        if (
            $redemptions
            && $order->grand_total_invoiced
        ) {
            $order->grand_total_invoiced -= (float) $redemptions;
            $order->base_grand_total_invoiced -= (float) $redemptions;
        }

        // order refund total
        $order->sub_total_refunded = $order->base_sub_total_refunded = 0;
        $order->shipping_refunded = $order->base_shipping_refunded = 0;
        $order->tax_amount_refunded = $order->base_tax_amount_refunded = 0;
        $order->discount_refunded = $order->base_discount_refunded = 0;
        $order->grand_total_refunded = $order->base_grand_total_refunded = 0;

        foreach ($order->refunds as $refund) {
            $order->sub_total_refunded += $refund->sub_total;
            $order->base_sub_total_refunded += $refund->base_sub_total;

            $order->shipping_refunded += $refund->shipping_amount;
            $order->base_shipping_refunded += $refund->base_shipping_amount;

            $order->tax_amount_refunded += $refund->tax_amount;
            $order->base_tax_amount_refunded += $refund->base_tax_amount;

            $order->discount_refunded += $refund->discount_amount;
            $order->base_discount_refunded += $refund->base_discount_amount;

            $order->grand_total_refunded += $refund->adjustment_refund - $refund->adjustment_fee;
            $order->base_grand_total_refunded += $refund->base_adjustment_refund - $refund->base_adjustment_fee;
        }

        $order->grand_total_refunded += $order->sub_total_refunded + $order->shipping_refunded + $order->tax_amount_refunded - $order->discount_refunded;
        $order->base_grand_total_refunded += $order->base_sub_total_refunded + $order->base_shipping_refunded + $order->base_tax_amount_refunded - $order->base_discount_refunded;

        $order->save();

        return $order;
    }
}
