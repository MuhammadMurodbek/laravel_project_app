<?php

namespace App\Listeners;

use App\Events\CreateApplication;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEmailToManager
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
     * @param  \App\Events\CreateApplication  $event
     * @return void
     */
    public function handle(CreateApplication $event)
    {
        // $event->post;
        Log::alert($event->post);
    }
}