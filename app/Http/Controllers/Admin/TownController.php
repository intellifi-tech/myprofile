<?php

namespace App\Http\Controllers\Admin;

use App\Town;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TownController extends Controller
{
    public function __construct()
    {
        $this->page['index'] = 5;
        $this->page['sub_index'] = 0;
        $this->page['title'] = 'İlçeler';
        $this->page['sub_title'] = '';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = Town::orderBy('name', 'ASC')->paginate(15);
        return view('admin.town.index', ['page' => $this->page, 'towns' => $towns]);
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
        $town = Town::find($id);
        $this->page['sub_title'] = $town->name. ' düzenle';
        return view('admin.town.edit', ['page' => $this->page, 'town' => $town]);
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
        $town = Town::find($id);
        $town->name = $request->name;
        if ($town->save()){
            session_success($town->name.' ilçesi güncellendi.');
            return redirect()->action('Admin\TownController@index');
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
}
