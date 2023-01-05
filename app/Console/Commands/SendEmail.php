<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Messages;
use Mail;
use App\Mail\Subscription;
use App;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $message = Messages::where('status',0)->first();
        $message->update(['status'=>1]);
        App::setLocale($message->lang);
        $emails = explode(",",$message->emails);
        foreach ($emails as $email) {
            Mail::to($email)->send(new Subscription($message->title,$message->content));
        }
        return Command::SUCCESS;
    }
}
