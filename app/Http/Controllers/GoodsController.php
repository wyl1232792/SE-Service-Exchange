<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Goods;
use Auth;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //读取内容
        $photo = $request->file('photo');
        $extension = strtolower($photo->getClientOriginalExtension());
        $input = $request->all();
        
        //save image
        //get imageurl
        //save model

        if ($request->file('photo')->isValid()){
            $name = md5(microtime() . $input['name']) . '.' . $extension;
            $path = 'img/goods';
            $request->file('photo')->move($path, $name);
            $image_url = $path . '/' . $name;
            $goods = new Goods;
            $goods->name = $input['name'];
            $goods->description = $input['description'];
            $goods->user_id = Auth::User()->id;
            $goods->type = $input['type'];
            $goods->price = $input['price'];
            $goods->status = 0;
            $goods->image_url = $image_url;
            $goods->save();
            return redirect('/goods/' . $goods->id . '/detail')->with('message', 'Information successfully recorded');
        }
       


        
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
        $goodsDetail = Goods::find($id);
        if ($goodsDetail == NULL) {
            return view('goods.goodsDetail')->with('errors', 'the goods not found');
        }
        return view('goods.goodsDetail')->with('goods', $goodsDetail);
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
    public function delete($id)
    {
        //
    }

    public function quote($id)
    {

    }

    public function trade($id)
    {

    }

    public function mark($id)
    {
        
    }
}
