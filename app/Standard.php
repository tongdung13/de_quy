<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    protected $table = 'standards';

    protected $fillable = [
        'name',
        'category_name',
        'category_id',
        'category_cid',
        'standard',
    ];
}
