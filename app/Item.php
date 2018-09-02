<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'device_rating', 'description', 'availability', 'cost', 'capacity', 'rating_max', 'source', 'category', 'is_cost_dynamic', 'is_avail_dynamic'
    ];
}
