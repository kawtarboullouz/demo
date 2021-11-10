<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $filelable =['name','description','price','image','id_category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

