<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class news extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
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
        return $this->view('home.news')
                    ->subject('Yuudee : Newsletter')
                    ->with(['username' => $this->username]);
    }
}
