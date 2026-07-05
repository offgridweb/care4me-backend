<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TemplateEmail extends Mailable
{
    public $html;
    public $data;

    public function __construct($html, array $data)
    {
        $this->html = $html;
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->subject($this->data['subject'])
            ->view('emails.template')
            ->with($this->data)
            ->with(['html' => $this->html]);
    }
}