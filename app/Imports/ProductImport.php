<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $index => $row){
            if($row[0]){
                $first_thumbnail = $row[8];
                $second_thumbnail = $row[9]??$row[8];
                $third_thumbnail = $row[10]??$row[8];
                if($index > 0){
                    $product =  Product::where("name","like","%".$row[1]."%")->get();
                    if($product->count()!=0){
                        $row[1] = $row[1]."(".$product->count().")";
                    }
                    $category = Category::where("name","=",$row[2])->first();
                    if(isset($category->id)){
                        $category_id =$category->id;
                    }else{
                        $name = $row[2];
                        $new  =  Category::create([
                            'name'=>$name,
                            'slug'=>"null",
                        ]);
                        $category_id = $new->id;
                    }
                    $data = [
                        'name'=>$row[1],
                        'slug'=>Str::title($row[1]."aspx"),
                        'category_id'=>$category_id,
                        'size'=>$row[3],
                        'description'=>$row[4]??"Chưa có giới thiệu",
                        'price'=>0,
                        'rating'=>$row[6],
                        'code'=>$row[7],
                        'first_thumbnail'=>env("app_url")."/uploads/".$first_thumbnail,
                        'second_thumbnail'=>env("app_url")."/uploads/".$second_thumbnail ,
                        'third_thumbnail'=>env("app_url")."/uploads/".$third_thumbnail,
                        'material'=>$row[13],
                    ];
//                    if($row[6]!=null){
//                        Product::create($data);
//                    }
                    var_dump($row[2]);
                }
            }
        }

    }
}
