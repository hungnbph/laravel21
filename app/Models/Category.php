<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
    'parent_id',
    'name',
    'status',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
