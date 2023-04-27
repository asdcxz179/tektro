<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportCategory;
use App\Models\Seo;
use App\Models\ProductBrand;

class SupportController extends Controller
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
    public function show($lang,$id)
    {

        $data['brands'] = ProductBrand::where('status',1)->get();
        $word = request('word');
        $query = SupportCategory::where('status',1)->orderby('sort','asc');
        if($id != 'all') {
            $query = $query->whereHas('brands',function($query) use ($id){
                $query->where('product_brands.id',$id);
            });
        }
        $word = trim($word);
        if($word) {
            $query->whereHas('supports',function($query) use($lang,$word) {
                $query->where("name->{$lang}",'like',"%{$word}%")->orWhereHas('support_files',function($query) use ($lang,$word) {
                    $query->where("name->{$lang}",'like',"%{$word}%")->orwhere("keyword->{$lang}",'like',"%{$word}%");
                });
            });
        }
        $data['categories'] =   $query->get();
        $data['index'] = 'technical';
        $data['seo'] = Seo::where(['name' => 'support'])->first();
        return view('front.support',$data);
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
