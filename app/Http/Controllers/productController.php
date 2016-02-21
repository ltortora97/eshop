<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Category;
use App\Http\Model\Item;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        //
        //$items = category::all();
        //return view('eshop.productAjaxLoad');
    }

    public function showProduct($id)
    {
        $itemDetail = Item::select('item_name','price','image_path','items.id','description')
            ->join('images', 'items.id', '=', 'images.item_id')
            ->where('items.id',$id)->get();


        $categoryInfo= Category::select('category_name','categories.id')
            ->join('items', 'categories.id', '=', 'items.category_id')
            ->where('items.id',$id)->get();



        return view('eshop.productAjaxLoad')->with(["itemDetail"=>$itemDetail,'categoryInfo'=>$categoryInfo]);


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
}
