<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Order;

class ShoppingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $order_detail = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order, $order_detail)
    {
        $this->order = $order;
        $this->order_detail = $order_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.shopping');
    }
}