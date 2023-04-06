<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = "categories";

    protected $fillable = ["name"];

    public function posts()
    {
        return $this->hasMany(PostsModel::class,'category_id');
    }

}
