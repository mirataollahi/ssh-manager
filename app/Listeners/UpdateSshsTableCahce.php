<?php

namespace App\Listeners;

use App\Events\SshsTableUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateSshsTableCahce
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SshsTableUpdated $event): void
    {
        //
    }
}
