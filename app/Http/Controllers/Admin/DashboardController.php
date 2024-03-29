<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Event;
use App\Sector;
use App\User;
use App\UserAttendedEvent;
use App\UserCoordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->page['index'] = 0;
        $this->page['sub_index'] = 0;
        $this->page['title'] = 'Kullanıcılar';
        $this->page['sub_title'] = '';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userOngoingsEvents = UserAttendedEvent::where('end_date', null)->with(['event', 'user'])->get(); // Devam eden katılımlar
        $completedOngoingsEvents = UserAttendedEvent::where('end_date', '!=', null)->with(['event', 'user'])->get(); //Tamamlanan katılımlar
        $comments = Comment::all(); // Kullanıcının yaptığı yorumlar
        $events = Event::all();
        $users = User::all();
        $sectors = Sector::all();
        $onlineUsers = UserCoordinate::all();
        return view('admin.dashboard', ['page' => $this->page, 'users' => $users, 'sectors' => $sectors, 'onlineUsers' => $onlineUsers, 'userOngoingsEvents' => $userOngoingsEvents, 'completedOngoingsEvents' => $completedOngoingsEvents, 'comments' => $comments, 'events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
