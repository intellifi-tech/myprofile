<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Sector;
use App\User;
use App\UserCoordinate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function hourlyOnlineUserCount(Request $request)
    {
        $nowHour = Carbon::now();

        $nowOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $nowOnlineUsers->count();

        $oneHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $oneHourBeforeOnlineUsers->count();

        $twoHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $twoHourBeforeOnlineUsers->count();

        $threeHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $threeHourBeforeOnlineUsers->count();

        $fourHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $fourHourBeforeOnlineUsers->count();

        $fiveHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $fiveHourBeforeOnlineUsers->count();

        $sixHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $sixHourBeforeOnlineUsers->count();

        $sevenHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $sevenHourBeforeOnlineUsers->count();

        $eightHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $eightHourBeforeOnlineUsers->count();

        $nineHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H') . '%')->get();
        $counts[$nowHour->format('H')] = $nineHourBeforeOnlineUsers->count();

        return $counts;
    }

    public function monthlyUserAcquisition(Request $request)
    {
        $nowMonth = Carbon::now();

        $nowMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $nowMonthRegisterUsers->count();

        $oneMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $oneMonthRegisterUsers->count();

        $twoMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $twoMonthRegisterUsers->count();

        $threeMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $threeMonthRegisterUsers->count();

        $fourMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $fourMonthRegisterUsers->count();

        $fiveMonthRegisterUsers = User::where("type", 1)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get();
        $monthUserCounts[$nowMonth->format('m')] = $fiveMonthRegisterUsers->count();

        return $monthUserCounts;
    }

    public function sectorStatistics(Request $request)
    {

        $nowMonth = Carbon::now();

        $thisMonth = $nowMonth->format('m');
        $lastMonth = $nowMonth->subMonth()->format('m');
        $twoMonthAgo = $nowMonth->subMonth(1)->format('m');
        $threeMonthAgo = $nowMonth->subMonth(1)->format('m');
        $fourMonthAgo = $nowMonth->subMonth(1)->format('m');
        $fiveMonthAgo = $nowMonth->subMonth(1)->format('m');

        $sectorUserCounts = [];

        /* Bu ay */
        $thisMonthSectorUserCountsTmp = [];
        $sectors = Sector::all();
        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $thisMonth)->get()->count();

            $thisMonthSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($thisMonthSectorUserCountsTmp);
        reset($thisMonthSectorUserCountsTmp);
        $ak = key($thisMonthSectorUserCountsTmp);
        $sectorUserCounts[$thisMonth . '-' . $ak] = $thisMonthSectorUserCountsTmp[$ak];
        /* ##Bu ay */


        /* Geçen ay */
        $lastMonthSectorUserCountsTmp = [];
        $sectors = Sector::all();

        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $lastMonth)->get()->count();
            $lastMonthSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($lastMonthSectorUserCountsTmp);
        reset($lastMonthSectorUserCountsTmp);
        $ak1 = key($lastMonthSectorUserCountsTmp);
        $sectorUserCounts[$lastMonth . '-' . $ak1] = $lastMonthSectorUserCountsTmp[$ak1];
        /* ##Geçen ay */


        /* 2 ay önce */
        $twoMonthAgoSectorUserCountsTmp = [];
        $sectors = Sector::all();

        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $twoMonthAgo)->get()->count();
            $twoMonthAgoSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($twoMonthAgoSectorUserCountsTmp);
        reset($twoMonthAgoSectorUserCountsTmp);
        $ak2 = key($twoMonthAgoSectorUserCountsTmp);
        $sectorUserCounts[$twoMonthAgo . '-' . $ak2] = $twoMonthAgoSectorUserCountsTmp[$ak2];
        /* ##2 ay önce */


        /* 3 ay önce */
        $threeMonthAgoSectorUserCountsTmp = [];
        $sectors = Sector::all();

        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $threeMonthAgo)->get()->count();
            $threeMonthAgoSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($threeMonthAgoSectorUserCountsTmp);
        reset($threeMonthAgoSectorUserCountsTmp);
        $ak3 = key($threeMonthAgoSectorUserCountsTmp);
        $sectorUserCounts[$threeMonthAgo . '-' . $ak3] = $threeMonthAgoSectorUserCountsTmp[$ak3];
        /* ##3 ay önce */


        /* 4 ay önce */
        $fourMonthAgoSectorUserCountsTmp = [];
        $sectors = Sector::all();

        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $fourMonthAgo)->get()->count();
            $fourMonthAgoSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($fourMonthAgoSectorUserCountsTmp);
        reset($fourMonthAgoSectorUserCountsTmp);
        $ak4 = key($fourMonthAgoSectorUserCountsTmp);
        $sectorUserCounts[$fourMonthAgo . '-' . $ak4] = $fourMonthAgoSectorUserCountsTmp[$ak4];
        /* ##4 ay önce */


        /* 5 ay önce */
        $fiveMonthAgoSectorUserCountsTmp = [];
        $sectors = Sector::all();

        foreach ($sectors as $sector) {
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $fiveMonthAgo)->get()->count();
            $fiveMonthAgoSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($fiveMonthAgoSectorUserCountsTmp);
        reset($fiveMonthAgoSectorUserCountsTmp);
        $ak5 = key($fiveMonthAgoSectorUserCountsTmp);
        $sectorUserCounts[$fiveMonthAgo . '-' . $ak4] = $fiveMonthAgoSectorUserCountsTmp[$ak5];
        /* ##5 ay önce */

        return $sectorUserCounts;
    }

    public function eventStatistics(Request $request)
    {
        $nowMonth = Carbon::now();

        $thisMonth = $nowMonth->format('m');
        $lastMonth = $nowMonth->subMonth()->format('m');
        $twoMonthAgo = $nowMonth->subMonth(1)->format('m');
        $threeMonthAgo = $nowMonth->subMonth(1)->format('m');
        $fourMonthAgo = $nowMonth->subMonth(1)->format('m');
        $fiveMonthAgo = $nowMonth->subMonth(1)->format('m');

        $eventUserCounts = [];

        /* Bu ay */
        $thisMonthEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $thisMonth)->withCount(['userAttendedEvents'])->get();
        foreach ($events as $event) {
            $thisMonthEventUserCountsTmp[$thisMonth . '-' . $event->title] = $event->user_attended_events_count;
        }
        arsort($thisMonthEventUserCountsTmp);
        reset($thisMonthEventUserCountsTmp);
        $ak1 = key($thisMonthEventUserCountsTmp);
        $eventUserCounts[$ak1] = $thisMonthEventUserCountsTmp[$ak1];
        /* ##Bu ay */

        /* Geçen ay */
        $lastMonthEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $lastMonth)->withCount(['userAttendedEvents'])->get();
        if ($events->count() > 0) {
            foreach ($events as $event) {
                $lastMonthEventUserCountsTmp[$lastMonth . '-' . $event->title] = $event->user_attended_events_count;
            }
            arsort($lastMonthEventUserCountsTmp);
            reset($lastMonthEventUserCountsTmp);
            $ak2 = key($lastMonthEventUserCountsTmp);
            $eventUserCounts[$ak2] = $lastMonthEventUserCountsTmp[$ak2];
        }

        /* ##Geçen ay */

        /* 2 ay önce */
        $twoMonthAgoEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $twoMonthAgo)->withCount(['userAttendedEvents'])->get();
        if ($events->count() > 0) {
            foreach ($events as $event) {
                $twoMonthAgoEventUserCountsTmp[$twoMonthAgo . '-' . $event->title] = $event->user_attended_events_count;
            }
            arsort($twoMonthAgoEventUserCountsTmp);
            reset($twoMonthAgoEventUserCountsTmp);
            $ak3 = key($twoMonthAgoEventUserCountsTmp);
            $eventUserCounts[$ak3] = $twoMonthAgoEventUserCountsTmp[$ak3];
        }
        /* ##2 ay önce */

        /* 3 ay önce */
        $threeMonthAgoEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $threeMonthAgo)->withCount(['userAttendedEvents'])->get();
        if ($events->count() > 0) {
            foreach ($events as $event) {
                $threeMonthAgoEventUserCountsTmp[$threeMonthAgo . '-' . $event->title] = $event->user_attended_events_count;
            }
            arsort($threeMonthAgoEventUserCountsTmp);
            reset($threeMonthAgoEventUserCountsTmp);
            $ak4 = key($threeMonthAgoEventUserCountsTmp);
            $eventUserCounts[$ak4] = $threeMonthAgoEventUserCountsTmp[$ak4];
        }
        /* ##3 ay önce */

        /* 4 ay önce */
        $fourMonthAgoEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $fourMonthAgo)->withCount(['userAttendedEvents'])->get();
        if ($events->count() > 0) {
            foreach ($events as $event) {
                $fourMonthAgoEventUserCountsTmp[$fourMonthAgo . '-' . $event->title] = $event->user_attended_events_count;
            }
            arsort($fourMonthAgoEventUserCountsTmp);
            reset($fourMonthAgoEventUserCountsTmp);
            $ak5 = key($fourMonthAgoEventUserCountsTmp);
            $eventUserCounts[$ak5] = $fourMonthAgoEventUserCountsTmp[$ak5];
        }
        /* ##4 ay önce */

        /* 4 ay önce */
        $fiveMonthAgoEventUserCountsTmp = [];
        $events = Event::whereMonth('created_at', $fiveMonthAgo)->withCount(['userAttendedEvents'])->get();
        if ($events->count() > 0) {
            foreach ($events as $event) {
                $fiveMonthAgoEventUserCountsTmp[$fiveMonthAgo . '-' . $event->title] = $event->user_attended_events_count;
            }
            arsort($fiveMonthAgoEventUserCountsTmp);
            reset($fiveMonthAgoEventUserCountsTmp);
            $ak6 = key($fiveMonthAgoEventUserCountsTmp);
            $eventUserCounts[$ak6] = $fiveMonthAgoEventUserCountsTmp[$ak6];
        }
        /* ##4 ay önce */

        return $eventUserCounts;
    }
}
