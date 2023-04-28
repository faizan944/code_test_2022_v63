<?php

namespace App\Jobs;

use App\Models\Podcast;
use App\Services\AudioProcessor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    protected $data;


    /**
     * SendEmailJob constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function handle()
    {
        $mailer = new AppMailer();
        $mailer->send($this->data['email'], $this->data['name'], $this->data['subject'], 'emails.session-ended', $this->data);
    }
}