<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\View\View;

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
    public function setSlugAttribute(): void
    {

        $this->attributes['slug'] = Str::slug($this->name, "-") . ".aspx";
    }

    public function hideCategory(): View
    {
        return view("components.delete", ['route' => "hide-category", "id" => $this->id]);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function Products(): HasMany
    {
        return $this->hasMany(Product::class, "category_id", "id");
    }

    public function SubCategories(): HasMany
    {
        return $this->hasMany(Category::class, "category_id", "id");
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, "category_id", "id");
    }

    public function OwnCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function parent(): BelongsTo
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
