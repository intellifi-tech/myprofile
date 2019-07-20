<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\UserAttendedEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function __construct()
    {
        $this->page['index'] = 7;
        $this->page['sub_index'] = 0;
        $this->page['title'] = 'Etkinlikler';
        $this->page['sub_title'] = '';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::withCount(['userAttendedEvents'])->paginate(15);
        return view('admin.event.index', ['page' => $this->page, 'events' => $events]);
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
        $event = Event::find($id);
        $this->page['sub_title'] = $event->name . ' düzenle';
        return view('admin.event.edit', ['page' => $this->page, 'event' => $event]);
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
        $event = Event::find($id);
        $event->name = $request->name;
        $event->activity_date = $request->activity_date;
        if ($event->save()){
            session_success($event->name.' güncellendi.');
            return redirect()->action('Admin\EventController@index');
        }
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

    public function participants($id)
    {
        $this->page['title'] = 'Katılımcılar';
        $attendedUsers = UserAttendedEvent::where('event_id', $id)->with(['user'])->paginate(15);
        return view('admin.event.attended-users', ['attendedUsers' => $attendedUsers, 'page' => $this->page]);
    }
}
