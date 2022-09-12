<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserEvaluation;
use App\Models\User;
use App\Models\Evaluation;

class SendNewUserEvaluation
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
    public function handle($event)
    {
        $admin = User::where('roles', 'admin')->get();
        Notification::send($admin, new NewUserEvaluation($event->evaluation));
    }
}
