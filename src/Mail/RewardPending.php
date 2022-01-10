<?php

namespace Webkul\Rewards\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RewardPending extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $verificationData;

    /**
     * Create a new mailable instance.
     *
     * @param  array  $verificationData
     * @return void
     */
    public function __construct($verificationData)
    {
        $this->verificationData = $verificationData;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\View\View
     */
    public function build()
    {
        return $this->from(core()->getSenderEmailDetails()['email'], core()->getSenderEmailDetails()['name'])
            ->to($this->verificationData['email'])
            ->subject(trans('rewards::app.mail.pending.subject'))
            ->view('rewards::emails.rewards.pending')
            ->with('data', [
                'email' => $this->verificationData['email'],
                'name' => $this->verificationData['name'],
                'points' => $this->verificationData['points'],
                'order_id' => $this->verificationData['order_id'],
                'note' => $this->verificationData['note'],
                'date' => $this->verificationData['date'],
                'used_reward_points' => $this->verificationData['used_reward_points'],
                'total_reward_points' => $this->verificationData['total_reward_points']
                ]
            );
    }
}