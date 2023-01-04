<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SupportCategory;
use App\Models\VideoSetting;
use App\Models\News;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lang = $request->lang;
        $word = $request->word;
        $data['products'] = Product::orwhere("name->{$lang}",'like',"%{$word}%")
                                   ->orwhere("content->{$lang}",'like',"%{$word}%")
                                   ->orwhere("description->{$lang}",'like',"%{$word}%")
                                   ->orwhere("details->{$lang}",'like',"%{$word}%")
                                   ->orwhere("technology->{$lang}",'like',"%{$word}%")
                                   ->orwhere("test_reviews->{$lang}",'like',"%{$word}%")
                                   ->orwhere("related_products->{$lang}",'like',"%{$word}%")
                                   ->get();
        $data['supports'] = SupportCategory::whereHas('supports',function($query) use ($lang,$word){
                                                    $query->whereHas('support_files',function($query) use ($lang,$word) {
                                                        $query->where("name->{$lang}",'like',"%{$word}%");
                                                    });
                                                })->get();
        $data['videos'] = VideoSetting::orwhere("name->{$lang}",'like',"%{$word}%")->get();
        $data['news'] = News::orwhere("name->{$lang}",'like',"%{$word}%")
                                   ->orwhere("content->{$lang}",'like',"%{$word}%")
                                   ->orwhere("description->{$lang}",'like',"%{$word}%")
                                   ->get();
        return view('front.search',$data);
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
        return view('front.search');
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
