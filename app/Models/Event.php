<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
     */

    //protected $table = 'events';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['club', 'club_id', 'date', 'starts_at', 'ends_at', 'confirmed', 'targets', 'ruleset', 'info',
        'adult_price', 'child_price', 'member_price'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
     */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
     */
    public function club()
    {
        return $this->belongsTo('App\Models\Club', 'club_id');
    }

    public function rulesets()
    {
        return $this->belongsToMany('App\Models\Ruleset', 'event_ruleset');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
     */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
     */

    /*
|--------------------------------------------------------------------------
| MUTATORS
|--------------------------------------------------------------------------
 */
}
