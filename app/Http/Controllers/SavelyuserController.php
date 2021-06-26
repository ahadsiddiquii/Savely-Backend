<?php

namespace App\Http\Controllers;

use App\Models\Savelyuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SavelyuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Savelyuser::all(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate([
            'userid' => 'required',
            'usercurrency' => 'required',
            'userimagesrc' => 'required'
        ]);
        Savelyuser::create([
            'userid' => request('userid'),
            'usercurrency' => request('usercurrency'),
            'userimagesrc' => request('userimagesrc'),
        ]);
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
     * @param  \App\Models\Savelyuser  $savelyuser
     * @return \Illuminate\Http\Response
     */
    public function show(String $ids)
    {
        $savelyuser = DB::table('savelyusers')->where('userid',$ids)->get();
        return $savelyuser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Savelyuser  $savelyuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Savelyuser $user)
    {
        //
    }

    public function editImage(Savelyuser $user)
    {
        request()->validate([
            'userimagesrc' => 'required',
        ]);
        $user ->update([
            'userimagesrc' => request('userimagesrc'),
        ]);
    }

    public function editCurrency(Savelyuser $user)
    {
        request()->validate([
            'usercurrency' => 'required',
        ]);
        $user ->update([
            'usercurrency' => request('usercurrency'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Savelyuser  $savelyuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Savelyuser $savelyuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Savelyuser  $savelyuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $ids)
    {
        $savelyuser = DB::table('savelyusers')->where('id', '=', $ids)->delete();
    }
}
