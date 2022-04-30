<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // モデルがこの属性以外持たない
    protected $fillable = [
        'title',
        'content',
        'person_in_charge',
    ];
}
