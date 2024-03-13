<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;  // เพิ่ม property นี้

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username) // แก้ constructor เพิ่ม $username
    {
        $this->username = $username; // กำหนดค่าให้กับ property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('login.emails')
                    ->subject('Yuudee : Thank you for register')
                    ->with(['username' => $this->username]);
    }
}

