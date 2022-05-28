<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    public function Product()
    {
        return $this->belongsTo(Product::class, "product_id", "id");
    }

    public function Customer()
    {
        return $this->belongsTo(Product::class, "user_id", "id");
    }

    public static function Total($packs)
    {
        $total = 0;
        foreach ($packs as $pack) {
            $total += $pack->Product()->first()->price * $pack->quantity;
        }
        return $total;
    }
}
