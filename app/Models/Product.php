<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'image_url',
        'description',
        'price',
        'sale_percent',
        'is_active',

    ];

     // Function comments the hien moi quan he 1 post se co nhieu comments
     public function comments() {
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }

    // Function student the hien moi quan he 1 post se thuoc ve 1 sinh vien
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // function categories the hien nhieu post, moi post co nhieu categories
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
