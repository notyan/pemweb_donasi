<?php

namespace App\Mail;

use App\Models\Relawan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class KirimTokenRelawan extends Mailable
{
    use Queueable, SerializesModels;

    protected $relawan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Relawan $relawan)
    {
        $this->relawan = $relawan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kibatisa@kel2.com')
                    ->subject('Token Aktivasi Relawan')
                    ->view('relawan.email-token')
                    ->with([
                        'username' => Auth::user()->name,
                        'token' => $this->relawan->token
                    ]);
    }
}
