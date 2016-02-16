<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Goods;
use DB;
use Session;
use Response;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->calc('t3', '3' ,'t19');
    }

    public function calc($tf, $m, $tx)
    {
        for ($i = 1; $i < 10; $i++)
        {
            echo $i . ' : ' . DB::table('t')->where('t1', '=', '1')->where($tf, ($m === '0') ? '>': '=', $m)->where($tx, '=', $i)->count() . '</br>';
        }
    }

    public function bb($id)
    {
        for ($i = 1; $i < 10; $i++)
        {
            echo $i . ' : ' . DB::table('t')->where('t'.$id, '=', $i)->count() . '</br>';
        }
    }


    public function bb2($id)
    {
        for ($i = 1; $i < 10; $i++)
        {
            echo $i . ' : ' . DB::table('tz')->where('t'.$id, '=', $i)->count() . '</br>';
        }
    }

    public function showProfile()
    {
        return view('profile.dashboard');
    }

    public function listGoods()
    {
        return view('goods.goodsCreate');
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


    public function signup()
    {
        # code...
    }
}
