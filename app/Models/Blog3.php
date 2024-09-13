<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog3 extends Model
{
    use HasFactory;
    protected $primaryKey = 'productid';
    protected $fillable = [
        'productname',
        'productdescription',
        'status',
        'Duration',
        'Category'
    ];
}
