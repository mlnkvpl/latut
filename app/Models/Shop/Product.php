<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'preis'

    ];


    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id');
    }


    public function discount()
    {

        return $this->belongsTo(Discount::class, 'discount_id');
    }

    public function setDiscount(Discount $discount){


$this->discount_id= 

    }


    
}
