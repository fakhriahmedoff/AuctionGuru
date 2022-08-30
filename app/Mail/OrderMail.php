<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private Order $order)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        $email = $this->view('mail.order')
            ->from($address = 'japaneseauctionguru@gmail.com', $name = 'Auction Guru')
            ->subject("Auction Guru order no - " . $this->order->id)
            ->with('model', $this->order);

        foreach (json_decode($this->order->uploaded_files) as $image) {
            $email->attach($image);
        }

        return $email;
    }
}
