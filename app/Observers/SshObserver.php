<?php

namespace App\Observers;

use App\Events\SshsTableUpdated;
use App\Models\Ssh;

class SshObserver
{
    /**
     * Handle the Ssh "created" event.
     */
    public function created(Ssh $ssh): void
    {
        SshsTableUpdated::dispatch($ssh);
    }

    /**
     * Handle the Ssh "updated" event.
     */
    public function updated(Ssh $ssh): void
    {
        SshsTableUpdated::dispatch($ssh);
    }

    /**
     * Handle the Ssh "deleted" event.
     */
    public function deleted(Ssh $ssh): void
    {
        SshsTableUpdated::dispatch($ssh);
    }

    /**
     * Handle the Ssh "restored" event.
     */
    public function restored(Ssh $ssh): void
    {
        SshsTableUpdated::dispatch($ssh);
    }

    /**
     * Handle the Ssh "force deleted" event.
     */
    public function forceDeleted(Ssh $ssh): void
    {
        SshsTableUpdated::dispatch($ssh);
    }
}
