<?php

namespace App\Http\Controllers\Admin;

use App\UserCoordinate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function hourlyOnlineUserCount(Request $request)
    {
        $nowHour = Carbon::now();
        $nowOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->format('Y-m-d H').'%')->get();
        $oneHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $twoHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $threeHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $fourHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $fiveHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $sixHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $sevenHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $eightHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $nineHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();

        $counts[$nowHour->format('H')] = $nowOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $oneHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $twoHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $threeHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $fourHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $fiveHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $sixHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $sevenHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $eightHourBeforeOnlineUsers->count();
        $counts[$nowHour->subHour()->format('H')] = $nineHourBeforeOnlineUsers->count();

        return $counts;
    }
}
