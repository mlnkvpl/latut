<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'preis'

    ];


    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }

   


}
