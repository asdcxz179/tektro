<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductBrand;
use App\Models\Seo;

class FaqController extends Controller
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
        $brands = ProductBrand::where('status',1)->orderby('sort');
        if($word) {
            $brands->whereHas('faqs',function($query) use($lang,$word) {
                $query->where("name->{$lang}",'like',"%{$word}%")->orwhere("content->{$lang}",'like',"%{$word}%");
            });
        }
        $data['brands'] = $brands->get();
        $data['all'] = collect([]);
        foreach($data['brands'] as $brand) {
            foreach($brand->faqs as $faq) {
                $data['all'] = $data['all']->push($faq);
            }
        } 
        $data['all'] = $data['all']->unique('id')->sortBy('sort');
        $data['seo'] = Seo::where(['name' => 'faq'])->first();
        return view('front.faq',$data);
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
