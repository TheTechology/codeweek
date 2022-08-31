<?php

namespace App\Console\Commands;

use App\Helpers\ReminderHelper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class BirthdayMailing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Birthday Mailing';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$recipients = ReminderHelper::getActiveCreators();
        $recipients = ['alainvd@gmail.com'];

        $this->info(sizeof($recipients));

        foreach ($recipients as $email) {
            Mail::to($email)->queue(new \App\Mail\MailingInactive());
        }
    }
}
