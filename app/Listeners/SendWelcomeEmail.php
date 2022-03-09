<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {

        $user = $event->user;
        $details = [
            'title'     => "Welcome to Our application",
            'body'      => "Thanks for signing up for Our application.We'll be sending an occational email with everything
                            new and good that you'll probably want to know about new services,promos,invoices etc.",
            'name'      => $user->name
        ];
        Mail::to($user->email)->send(new WelcomeMail($details));
    }
}
