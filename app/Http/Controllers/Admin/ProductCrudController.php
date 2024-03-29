<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Operations\InlineCreateOperation;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

//    use InlineCreateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings("Sản phẩm", 'Những sản phẩm');
        $this->crud->denyAccess(["show", "delete"]);
        $this->crud->addButtonFromModelFunction("line", "hide", "hideProduct", "line");
        $this->crud->addButtonFromModelFunction("line", "showing", "showProduct", "line");
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation(): void
    {
        $this->crud->addClause("where", "active", "=", true);
        CRUD::column('code')->label("Mã sản phẩm");
        CRUD::column('name')->label("Tên sản phẩm");
        CRUD::column('slug')->label("URL");
        CRUD::addColumn([
            'label' => 'Danh mục',
            'name' => 'category_id',
            'type' => 'select',
            'models' => 'App\Models\Category',
            'entity' => 'Category',
            'attribute' => 'name',


        ]);
        CRUD::column('size')->label("Kích thước");
//        CRUD::column('price')->label("Khoảng giá");
        CRUD::column('first_thumbnail')->label("Ảnh sản phẩm")->type("image");
//        CRUD::column('rating')->label("Chất lượng (1->5)");

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        CRUD::field('code')->label("Mã sản phẩm")->attributes(["required" => true]);
        CRUD::field('name')->label("Tên sản phẩm")->attributes(["required" => true]);
        CRUD::field('slug')->label("URL")->type("hidden");
        CRUD::addField([
            'name' => 'category_id',
            'label' => 'Danh mục',
            'type' => 'select2',
            'models' => 'App\Models\Category',
            'entity' => 'Category',
            'attribute' => 'name',
            'attributes' => ["required" => true],
            'options' => (function ($query) {
                $depth = [];
                $categories = Category::all();
                foreach ($categories as $category) {
                    if (!$category->hasSub()) {
                        $depth[] = $category->id;
                    }
                }
                $query->where("id", $depth[0]);
                foreach ($depth as $item) {
                    $query->orWhere("id", $item);
                }
                return $query->orderBy('name', 'ASC')->where('active', true)->get();
            })
        ]);
        CRUD::field('size')->label("Kích thước")->attributes(["required" => true]);
        CRUD::field('price')->label("Khoảng giá")->value(0)->type("hidden");
        CRUD::field('first_thumbnail')->label("Ảnh sản phẩm (1)")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('second_thumbnail')->label("Ảnh sản phẩm (2)")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('third_thumbnail')->label("Ảnh sản phẩm (3)(có thể để trống)")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('four_thumbnail')->label("Ảnh sản phẩm (4)(có thể để trống)")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('five_thumbnail')->label("Ảnh sản phẩm (5)(có thể để trống)")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('rating')->value(5)->type("hidden");
        CRUD::field('description')->label("Giới thiệu")->type("textarea")->attributes(["required" => true]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
