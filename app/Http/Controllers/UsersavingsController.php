<?php

namespace App\Http\Controllers;

use App\Models\SavelyUser;
use App\Models\Usersavings;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsersavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usersavings::all();
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
            'goalimagesrc' => 'required',
            'goalname' => 'required',
            'goalamount' => 'required',
            'amountsaved' => 'required',
            'amountleft' => 'required'
        ]);
        Usersavings::create([
            'userid' => request('userid'),        
            'goalimagesrc' => request('goalimagesrc'),
            'goalname'=> request('goalname'),
            'goalamount' => request('goalamount'),
            'amountsaved' => request('amountsaved'),
            'amountleft' => request('amountleft'),
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
     * @param  \App\Models\Usersavings  $usersavings
     * @return \Illuminate\Http\Response
     */
    public function show(int $ids)
    {
        $usersavings = DB::table('usersavings')->where('userid',$ids)->get();
        return $usersavings;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usersavings  $usersavings
     * @return \Illuminate\Http\Response
     */
    public function edit(Usersavings $user)
    {
        //
    }

    public function editSavings(int $ids)
    {
        request()->validate([
            'goalimagesrc' => 'required',
            'goalname' => 'required',
            'goalamount' => 'required'
        ]);
        DB::table('usersavings')->where('id', '=', $ids)->update([
            'goalimagesrc' => request('goalimagesrc'),
            'goalname'=> request('goalname'),
            'goalamount' => request('goalamount'),
        ]);
    }

    public function editSaveLeft(int $ids)
    {
        request()->validate([
            'amountsaved' => 'required',
            'amountleft' => 'required'
        ]);
        DB::table('usersavings')->where('id', '=', $ids)->update([
            'amountsaved' => request('amountsaved'),
            'amountleft' => request('amountleft')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usersavings  $usersavings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usersavings $usersavings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersavings  $usersavings
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $ids, int $userid)
    {
        $usersavings = DB::table('usersavings')->where('id', '=', $ids, 'AND', 'userid', '=', $userid)->delete();
    }
}
