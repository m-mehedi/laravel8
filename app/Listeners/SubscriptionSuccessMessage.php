<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserSubscribed;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserSubscribedMessage;

class SubscriptionSuccessMessage
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
     * @param  object  $event
     * @return void
     */
    public function handle(UserSubscribed $event)
    {
        DB::table('newsletter')->insert([
            'email' => $event->email
        ]);

        Mail::to($event->email)->send(new UserSubscribedMessage());
    }
}
