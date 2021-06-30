<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Records::all();
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
            'recordtitle' => 'required',
            'recordname' => 'required',
            'recordcurrency' => 'required',
            'recordamount' => 'required',
        ]);
        Records::create([
            'userid' => request('userid'),
            'recordtitle' => request('recordtitle'),        
            'recordname' => request('recordname'),
            'recordcurrency'=> request('recordcurrency'),
            'recordamount' => request('recordamount'),
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
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function show(int $ids)
    {
        $records = DB::table('records')->where('userid',$ids)->get();
        return $records;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function edit(Records $records)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Records $records)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Records  $records
     * @return \Illuminate\Http\Response
     */
    public function destroy(Records $records)
    {
        //
    }
}
