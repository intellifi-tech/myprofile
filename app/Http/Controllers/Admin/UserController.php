<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Follow;
use App\User;
use App\UserAttendedEvent;
use App\UserCoordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->page['index'] = 1;
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
        $users = User::all();
        return view('admin.user.index', ['page' => $this->page, 'users' => $users]);
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
//        $user = User::where('id', $id)->whereHas('userAttendedEvents', function ($query){
//            $query->where('end_date', null);
//        })->first();

        $userOngoingsEvents = UserAttendedEvent::where('user_id', $id)->where('end_date', null)->with(['event', 'user'])->get(); // Devam eden katılımlar
        $completedOngoingsEvents = UserAttendedEvent::where('user_id', $id)->where('end_date', '!=', null)->with(['event', 'user'])->get(); //Tamamlanan katılımlar
        $eventsAttended = UserAttendedEvent::where('user_id', $id)->get(); // Katıldığı etkinlikler
        $comments = Comment::where('user_id', $id)->with(['event'])->get(); // Kullanıcının yaptığı yorumlar
        $follow = Follow::where('from_user_id', $id)->with(['followings'])->first(); // Kullanıcının takipçileri
        $user = User::find($id);
        $this->page['sub_title'] = $user->name.' düzenle';
        return view('admin.user.show', ['page' => $this->page, 'user' => $user, 'userOngoingsEvents' => $userOngoingsEvents, 'completedOngoingsEvents' => $completedOngoingsEvents, 'comments' => $comments, 'follow' => $follow, 'eventsAttended' => $eventsAttended]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comments = Comment::where('user_id', $id)->with(['event'])->get(); // Kullanıcının yaptığı yorumlar
        $follow = Follow::where('from_user_id', $id)->with(['followings'])->first(); // Kullanıcının takipçileri
        $user = User::find($id);
        $this->page['sub_title'] = $user->name.' '.$user->surname.' düzenle';
        return view('admin.user.edit', ['page' => $this->page, 'user' => $user, 'comments' => $comments, 'follow' => $follow,]);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        if ($request->status == "on"){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        if ($user->save()){
            session_success($user->name.' '. $user->surname .' güncellendi.');
            return redirect()->back();
        }
    }

    public function getOnlineUserCoordinates()
    {
        $userCoordinates = UserCoordinate::with(['user'])->get();
        return response()->json($userCoordinates, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
