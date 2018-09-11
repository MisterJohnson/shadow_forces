<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public const DIMENSIONS = [
      'square' => '375x375',
      'horizontal_rectangle' => '750x375',
      'vertical_rectangle' => '375x750',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'title', 'label', 'link', 'description','background_image', 'dimension'
    ];
}
