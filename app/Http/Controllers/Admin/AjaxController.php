<?php

namespace App\Http\Controllers\Admin;

use App\Sector;
use App\User;
use App\UserCoordinate;
use Carbon\Carbon;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function hourlyOnlineUserCount(Request $request)
    {
        $nowHour = Carbon::now();

        $nowOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $nowOnlineUsers->count();

        $oneHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $oneHourBeforeOnlineUsers->count();

        $twoHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $twoHourBeforeOnlineUsers->count();

        $threeHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $threeHourBeforeOnlineUsers->count();

        $fourHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $fourHourBeforeOnlineUsers->count();

        $fiveHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $fiveHourBeforeOnlineUsers->count();

        $sixHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $sixHourBeforeOnlineUsers->count();

        $sevenHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $sevenHourBeforeOnlineUsers->count();

        $eightHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
        $counts[$nowHour->format('H')] = $eightHourBeforeOnlineUsers->count();

        $nineHourBeforeOnlineUsers = UserCoordinate::where('created_at', 'LIKE', $nowHour->subHour()->format('Y-m-d H').'%')->get();
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
        $sectorUserCounts = [];

        $nowMonthSectorUserCountsTmp = [];
        $sectors = Sector::all();
        foreach ($sectors as $sector){
            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $nowMonth->format('m'))->get()->count();
            $nowMonthSectorUserCountsTmp[$sector->name] = $users;
        }
        arsort($nowMonthSectorUserCountsTmp);
        return key($nowMonthSectorUserCountsTmp);

//        $sectorUserCounts[$nowMonth->format('m')] = array_key_first($nowMonthSectorUserCountsTmp) .' : '.$nowMonthSectorUserCountsTmp[array_key_first($nowMonthSectorUserCountsTmp)];
//
//        // Buraya kadar sorun yok.
//
//        $oneMonthSectorUserCountsTmp = [];
//        $sectors = Sector::all();
//        foreach ($sectors as $sector){
//            $users = User::where("type", 1)->where('sector_id', $sector->id)->whereMonth('created_at', $nowMonth->subMonth()->format('m'))->get()->count();
//            $oneMonthSectorUserCountsTmp[$sector->name] = $users;
//        }
//        arsort($oneMonthSectorUserCountsTmp);
//
//        $sectorUserCounts[$nowMonth->format('m')] = array_key_first($oneMonthSectorUserCountsTmp) .' : '.$oneMonthSectorUserCountsTmp[array_key_first($oneMonthSectorUserCountsTmp)];
//
//        return $sectorUserCounts;
    }

    public function eventStatistics(Request $request)
    {

    }
}
