<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;  

    protected $fillable = [
        'title',
        'description',
        'status',
        'is_premium',
        'created_at',
    ];

    protected $dates = ['deleted_at']; 

    protected $hidden = [
        'created_at', 'deleted_at'
    ];


}
