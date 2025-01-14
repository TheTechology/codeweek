<?php

namespace App\Observers;

use App\Event;
use App\ExperienceType;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @param Event $event
     * @return void
     */
    public function created(Event $event)
    {
        //
    }

    /**
     * Handle the Event "updated" event.
     *
     * @param Event $event
     * @return void
     */
    public function updated(Event $event)
    {

        if (!is_null($event->reported_at) && is_null($event->getOriginal('reported_at'))) {
            $date = new Carbon($event->created_at);
            $event->owner->awardExperience(2, $date->year);
        }

        if (($event->status == "APPROVED") && ($event->getOriginal('status') == "PENDING")) {
            //Get LT based on Tag
            $LT = User::firstWhere("tag", $event->codeweek_for_all_participation_code);

            if ($LT) {
                $date = new Carbon($event->created_at);
                $LT->awardExperience(2, $date->year);
            }


        }


    }

    /**
     * Handle the Event "deleted" event.
     *
     * @param Event $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the Event "restored" event.
     *
     * @param Event $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     *
     * @param Event $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
