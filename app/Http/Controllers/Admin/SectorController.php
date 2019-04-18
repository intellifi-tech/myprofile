<?php

namespace App\Http\Controllers\Admin;

use App\Sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectorController extends Controller
{
    public function __construct()
    {
        $this->page['index'] = 3;
        $this->page['sub_index'] = 0;
        $this->page['title'] = 'Sektörler';
        $this->page['sub_title'] = '';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::orderBy('name', 'ASC')->paginate(15);
        return view('admin.sector.index', ['page' => $this->page, 'sectors' => $sectors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page['sub_title'] = 'Sektör Ekle';
        return view('admin.sector.create', ['page' => $this->page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector = new Sector();
        $sector->name = $request->name;
        if ($sector->save())
            session_success($sector->name.' kaydedildi.');
        return redirect()->action('Admin\SectorController@index');
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
        $sector = Sector::find($id);
        $this->page['sub_title'] = $sector->name .' düzenle';
        return view('admin.sector.edit', ['page' => $this->page, 'sector' => $sector]);
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
        $sector = Sector::find($id);
        $sector->name = $request->name;
        if ($sector->save())
            session_success($sector->name.' güncellendi.');
        return redirect()->action('Admin\SectorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector = Sector::find($id);
        if ($sector->delete())
            session_success($sector->name.' silindi.');
        return redirect()->action('Admin\SectorController@index');

    }
}
