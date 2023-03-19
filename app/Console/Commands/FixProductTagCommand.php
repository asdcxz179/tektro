<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FixProductTagCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix_product_tag';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tags = [
            1   =>  20,
            2   =>  21,
            3   =>  22,
            6   =>  23,
            7   =>  24,
            14  =>  25,
        ];
        foreach (\App\Models\Product::get() as $product) {
            $haveBrand = [];
            $category = $product->category;
            foreach ($category as $item) {
                $brand = $item->brands->first();
                if($brand && !in_array($brand->name,$haveBrand)) {
                    $haveBrand[] = $brand->name;
                }
            }
            // if($category) {
                dump($product->id.'count:'.count($haveBrand));
                if(count($haveBrand) > 1) {
                    $already = $product->product_tags->pluck('id')->toArray();
                    foreach ($already as $key => $value) {
                        if(isset($tags[$value])) {
                            if(!in_array($tags[$value],$already)) {
                                dump($product->id.'增加:'.$tags[$value]);
                                $product->product_tags()->attach($tags[$value]);
                            }
                        }
                    }
                }else{
                    // $brand = $category->brands->first();
                    // if($brand) {
                        if(in_array("TRP",$haveBrand)) {
                            $already = $product->product_tags->pluck('id')->toArray();
                            foreach ($already as $key => $value) {
                                if(isset($tags[$value])) {
                                    if(!in_array($tags[$value],$already)) {
                                        dump($product->id.'增加:'.$tags[$value]);
                                        $product->product_tags()->attach($tags[$value]);
                                    }
                                    if(in_array($value,$already)) {
                                        dump($product->id.'刪除:'.$value);
                                        $product->product_tags()->detach($value);
                                    }
                                }
                            }
                        }
                    // }
                }
            // }
        }
        return Command::SUCCESS;
    }
}
