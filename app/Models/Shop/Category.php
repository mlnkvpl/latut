<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_category_id');
    }

    public function setParent(Category $parent)
    {
        $this->parent_category_id=$parent->id;
    }

    public function addChild(Category $child)
    {
        $child->parent_category_id = $this->id;
    }




}
