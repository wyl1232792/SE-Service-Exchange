<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Goods;

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
    public function create(GoodsRequest $request)
    {
        //读取内容
        $photo = $request->file('photo');
        $extension = strtolower($photo->getClientOriginalExtension());
        $input = $request->all();
        
        //save image
        //get imageurl
        //save model

        if ($request->file('photo')->isValid()){
                $file = Request::file('photo');
                $name = md5(microtime().$input['id']).'.'.$extension;
                Request::file('photo')->move('public/img', $name);
                $path = 'public/img/';
                $image_url = $path . '/' . $name;
                $good = Goods::create([
                    'name' => $input['name'],
                    'description' => $input['description'],
                    'id' => $input['id'],
                    'user_id' =>  $input['user_id'],
                    'type' => $input['type'],
                    'price' => $input['price'],
                    'status' => $input['status'],
                    'tag' => $input['tag'], 
                    'image_url' => $input['image_url'],  
            ]);
        }
       
        return redirect('/goods/' . $good->id . '/detail')->with('message', 'Information successfully recorded');


        
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
        $goodsDetail = Goods::findOrFail($id);
        return view('goodsDetail')->with('goods', $goodsDetail);
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
