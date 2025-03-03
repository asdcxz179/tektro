<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportFile;
use App\Models\ProductBrand;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\App;

class DownloadController extends Controller
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
        $support = \App\Models\SupportItemFile::where('file_name',$id)->first();
        if(!$support) {
            $brand = ProductBrand::where('file_data_name',$id)->first();
            $file = $brand->file;
        }else {
            $file = $support->path;
        }

        // $pdf = PDF::loadView('pdf', ['title' => $support->file_name]); // 假設您有一個名為 'template' 的 Blade 模板

        // return $pdf->setPaper('a4')
        //         ->setOption('title', $support->file_name) // 設置 PDF 標題
        //         ->loadFile(public_path($file))
        //         ->stream($support->file_name);
        // header('Content-type: application/pdf');
        // header("Content-Disposition: attachment; filename={$support->file_name}'");
        //$support->file_name
        // Pdf::loadFile(public_path($file));
        // $pdf = App::make(public_path($file));
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();

        return response()->file(public_path($file));
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
