<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

protected $fillable =[

    'name',
    'description',
    'percentage',
    'start_date',
    'end_date',
    
];
    public function products()
    {

        return $this->hasMany(Ptoduct::class, 'discount_id');
    }

}
