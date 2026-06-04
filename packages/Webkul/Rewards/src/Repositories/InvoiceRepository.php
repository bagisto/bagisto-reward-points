<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container;
use Webkul\Rewards\Helpers\CartHelper as RewardCartHelper;
use Webkul\Sales\Models\Invoice;
use Webkul\Sales\Repositories\DownloadableLinkPurchasedRepository;
use Webkul\Sales\Repositories\InvoiceItemRepository;
use Webkul\Sales\Repositories\InvoiceRepository as BaseInvoiceRepository;
use Webkul\Sales\Repositories\OrderItemRepository;
use Webkul\Sales\Repositories\OrderRepository;

class InvoiceRepository extends BaseInvoiceRepository
{
    /**
     * Create a new repository instance.
     */
    public function __construct(
        protected DownloadableLinkPurchasedRepository $downloadableLinkPurchasedRepository,
        protected InvoiceItemRepository $invoiceItemRepository,
        protected OrderItemRepository $orderItemRepository,
        protected OrderRepository $orderRepository,
        protected RewardCartHelper $rewardCartHelper,
        Container $container,
    ) {
        parent::__construct(
            $orderRepository,
            $orderItemRepository,
            $invoiceItemRepository,
            $downloadableLinkPurchasedRepository,
            $container,
        );
    }

    /**
     * Collect totals.
     *
     * @param  Invoice  $invoice
     * @return Invoice
     */
    public function collectTotals($invoice)
    {
        $invoice->sub_total = $invoice->base_sub_total = 0;

        $invoice->tax_amount = $invoice->base_tax_amount = 0;

        $invoice->discount_amount = $invoice->base_discount_amount = 0;

        foreach ($invoice->items as $invoiceItem) {
            $invoice->sub_total += $invoiceItem->total;

            $invoice->base_sub_total += $invoiceItem->base_total;

            $invoice->tax_amount += $invoiceItem->tax_amount;

            $invoice->base_tax_amount += $invoiceItem->base_tax_amount;

            $invoice->discount_amount += $invoiceItem->discount_amount;

            $invoice->base_discount_amount += $invoiceItem->base_discount_amount;
        }

        $invoice->shipping_amount = $invoice->order->shipping_amount;

        $invoice->base_shipping_amount = $invoice->order->base_shipping_amount;

        $invoice->discount_amount += $invoice->order->shipping_discount_amount;

        $invoice->base_discount_amount += $invoice->order->base_shipping_discount_amount;

        if ($invoice->order->shipping_amount) {
            foreach ($invoice->order->invoices as $prevInvoice) {
                if ((float) $prevInvoice->shipping_amount) {
                    $invoice->shipping_amount = $invoice->base_shipping_amount = 0;
                }

                if ($prevInvoice->id != $invoice->id) {
                    $invoice->discount_amount -= $invoice->order->shipping_discount_amount;

                    $invoice->base_discount_amount -= $invoice->order->base_shipping_discount_amount;
                }
            }
        }

        $redemptions = 0;

        if ($invoice->order->points) {
            $redemptions = $this->rewardCartHelper->redemption($invoice->order->points);
        }

        $invoice->grand_total = $invoice->sub_total + $invoice->tax_amount + $invoice->shipping_amount - $invoice->discount_amount;

        $invoice->base_grand_total = $invoice->base_sub_total + $invoice->base_tax_amount + $invoice->base_shipping_amount - $invoice->base_discount_amount;

        if (
            $redemptions
            && $invoice->order->points
        ) {
            $invoice->grand_total -= (float) $redemptions;
            $invoice->base_grand_total -= (float) $redemptions;
        }

        $invoice->save();

        return $invoice;
    }
}
