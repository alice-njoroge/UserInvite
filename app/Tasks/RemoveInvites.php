<?php


namespace App\Tasks;


use App\Invite;
use Carbon\Carbon;

class RemoveInvites
{
    public function __invoke()
    {
        $date = Carbon::today()->subHours(24);
        logger('Delete Invites job is running');
        Invite::whereDate('created_at', '<', $date)->delete();
        logger('Delete Invites job is done! ');

    }

}
