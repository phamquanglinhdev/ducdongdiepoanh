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
           if($index > 0){
               $category = Category::where("name","=",$row[2])->first();
               if(isset($category->id)){
                   $category_id =$category->id;
               }else{
                   $category_id = 1;
               }
               $data = [
                   'name'=>$row[1],
                   'slug'=>Str::title($row[1]."aspx"),
                   'category_id'=>$category_id,
                   'size'=>$row[3],
                   'description'=>$row[4],
                   'price'=>$row[5],
                   'rating'=>$row[6],
                   'code'=>$row[7],
                   'first_thumbnail'=>$row[8],
                   'second_thumbnail'=>$row[9],
                   'third_thumbnail'=>$row[10],
                   'four_thumbnail'=>$row[11],
                   'five_thumbnail'=>$row[12],
                   'material'=>$row[13],
               ];
               Product::create($data);
           }
        }

    }
}
