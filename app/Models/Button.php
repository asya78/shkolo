<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Button extends Model {

    protected $table = 'button';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'link', 'color'
    ];

    /**
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'color' => 'required'
    ];

    public static function getColors() {
        return [null => '--- SELECT COLOR ---',
            'white' => 'White',
            'red' => 'Red',
            'blue' => 'Blue',
            'black' => 'Black',
            'orange' => 'Orange',
            'green' => 'Green'
        ];
    }

    public static function getButtons() {
        return self::limit(9)
                        ->get();
    }

}
