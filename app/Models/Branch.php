<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'branchs';
        protected $fillable = [
        'product_name',
        'quantity'
    ];
}
