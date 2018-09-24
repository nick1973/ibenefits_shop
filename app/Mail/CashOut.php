<?php

namespace App\Mail;

use App\Models\Auth\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CashOut extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $cashout;

    /**
     * Create a new message instance.
     *
     * @param User $user
     */
    public function __construct(User $user, $cashout)
    {
        $this->user = $user;
        $this->cashout = $cashout;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('frontend.mail.cash_out');
    }
}
