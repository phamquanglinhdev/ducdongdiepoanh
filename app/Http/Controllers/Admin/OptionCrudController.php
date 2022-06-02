<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OptionRequest;
use App\Models\Option;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OptionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OptionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Option::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/option');
        CRUD::setEntityNameStrings('Tùy chỉnh', 'Các tùy chỉnh');
        $this->crud->denyAccess(["show","create","delete"]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label("Tên thuộc tinh");
        CRUD::column('alias')->label("Alias");
        CRUD::column('type')->label("Loại");
        CRUD::column('isActive')->type("select_from_array")->options(["Ngưng hoạt động","Hoạt động"])->label("Trạng thái");

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
        CRUD::setValidation(OptionRequest::class);

        CRUD::field('name')->type("text")->attributes(["disabled"=>true]);
        $id = str_replace("/admin/option/","",$_SERVER["REQUEST_URI"]);
        $id = str_replace("/edit","",$id);
        $option =  Option::find($id);
        $data = Option::getCustomField($option->type);
        $this->crud->addField($data);

        CRUD::field('isActive')->type("boolean")->label("Hoạt động");
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
