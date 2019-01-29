<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mymail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
//    public function build(Request $request, $orderId)
    public function build()
    {
//        $order = Order::findOrFail($orderId);


//        Mail::to($request->user())
//            ->cc($moreUsers)
//            ->bcc($evenMoreUsers)
//            ->send(new OrderShipped($order));

        return $this->view('view.name');
    }
}
