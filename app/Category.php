<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $filelable =['name','parent_category'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
