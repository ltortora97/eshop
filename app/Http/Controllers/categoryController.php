<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\Image;
use App\Http\Model\Category;
use App\Http\Model\Item;

class categoryController extends Controller
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

        //show all productrs belongs to category
//        $id;
//        $items = Item::all();
//        $categories = category::all();

       // $itemDetails = Item::select('item_name','price')->where('category_id',$id)->get();

        $itemDetails = Item::select('item_name','price','image_path','items.id')
            ->join('images', 'items.id', '=', 'images.item_id')
            ->where('category_id',$id)->get();

        //echo '<pre>'.print_r($itemDetails,true).'<pre>';
       // die();


        $categoryname = category::select('category_name')
                        ->where('id',$id)->get();



        //echo '<pre>'.print_r($categories,true).'<pre>';
    //die();





        return view('eshop.categoryProducts')->with(['details'=>$itemDetails,'categoryname'=>$categoryname]);
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
}
