<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EventRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class EventCrudController extends CrudController
{

    public function setUp()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
         */
        $this->crud->setModel("App\Models\Event");
        $this->crud->setRoute("admin/events");
        $this->crud->setEntityNameStrings('event', 'events');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
         */

        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date']);

        $this->crud->addColumn([
            'name' => 'club_id',
            'label' => 'Club',
            'type' => 'select',
            'entity' => 'club',
            'attribute' => 'name',
            'model' => 'App\Models\Club']);

        $this->crud->addColumn([
            'name' => 'starts_at',
            'label' => 'Start at',
            'type' => 'time']);

        $this->crud->addColumn([
            'name' => 'ends_at',
            'label' => 'Ends at',
            'type' => 'time']);

        $this->crud->addColumn([
            'name' => 'targets',
            'label' => '# of Targets',
            'type' => 'number']);

        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
        ]);

        $this->crud->addField([
            'name' => 'club_id',
            'label' => 'Club',
            'type' => 'select2',
            'entity' => 'club',
            'attribute' => 'name',
            'model' => 'App\Models\Club']);

        $this->crud->addField([
            'name' => 'starts_at',
            'label' => 'Start Time',
            'type' => 'time']);

        $this->crud->addField([
            'name' => 'ends_at',
            'label' => 'End Time',
            'type' => 'time']);

        $this->crud->addField([
            'name' => 'targets',
            'label' => 'Number of targets',
            'type' => 'number']);
        $this->crud->addField([ // Select2Multiple = n-n relationship (with pivot table)
            'label' => "ruleset",
            'type' => 'select2_multiple',
            'name' => 'rulesets', // the method that defines the relationship in your Model
            'entity' => 'rulesets', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Ruleset", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);

        $this->crud->addField([
            'name' => 'adult_price',
            'label' => 'Adult Price',
            'type' => 'number',
            'prefix' => '$']);

        $this->crud->addField([
            'name' => 'child_price',
            'label' => 'Child Price',
            'type' => 'number',
            'prefix' => '$']);

        $this->crud->addField([
            'name' => 'member_price',
            'label' => 'Member Price',
            'type' => 'number',
            'prefix' => '$']);

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
