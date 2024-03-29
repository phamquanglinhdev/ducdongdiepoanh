<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Operations\InlineCreateOperation;
use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use InlineCreateOperation;
//    use ReorderOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {

        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('Danh mục', 'Các danh mục');
        $this->crud->denyAccess(["show","delete"]);
        $this->crud->addButtonFromModelFunction("line","hide","hideCategory","line");
//        $this->crud->set('reorder.label', 'name'); // which model attribute to use for labels
//        $this->crud->set('reorder.max_level', 0);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation(): void
    {
        $this->crud->isReorderEnabled();
        $this->crud->addClause("where","active","=",true);
        CRUD::column('name')->label("Tên danh mục");
        CRUD::column('slug')->label("URL");
        CRUD::column('thumbnail')->type("image")->label("Ảnh");
        CRUD::addColumn([
            'name' => 'category_id',
            'label' => 'Danh mục cha',
            'entity'=>'OwnCategory',
            'attribute'=>'name',
            'model'=>'App\Models\Category',
        ]);
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
        CRUD::setValidation(CategoryRequest::class);

        CRUD::field('name')->label("Tên danh mục")->attributes(["required"=>true]);
        CRUD::field('slug')->type("hidden");
        CRUD::field('thumbnail')->type("image")->label("Ảnh")->crop(true)->aspect_ratio(1);
        CRUD::addField([
            'name' => 'category_id',
            'label' => 'Danh mục cha',
            'entity'=>'OwnCategory',
            'attribute'=>'name',
            'model'=>'App\Models\Category',
            'type'=>'select2',
        ]);
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
