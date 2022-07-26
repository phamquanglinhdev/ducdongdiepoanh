<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'categories';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setSlugAttribute()
    {

        $this->attributes['slug'] = Str::slug($this->name, "-") . ".aspx";
    }

    public function hideCategory()
    {
        return view("components.delete", ['route' => "hide-category", "id" => $this->id]);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function Products()
    {
        return $this->hasMany(Product::class, "category_id", "id");
    }

    public function SubCategories()
    {
        return $this->hasMany(Category::class, "category_id", "id");
    }

    public function OwnCategory()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function hasSub(): bool
    {
        return $this->hasMany(Category::class, "category_id", "id")->count() > 0;
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
