<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
        'city',
        'brgy',
        'street',
        'house_number',
        'family_name',
        'gender_head_family',
        'bod_head_family',
        'head_family',
        'spouse',
        'gender_spouse',
        'bod_spouse',
        'first_child',
        'gender_first_child',
        'bod_first_child',
    ];
}
