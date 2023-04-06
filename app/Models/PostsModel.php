<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Services\ImagePath;

class PostsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = "posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','category_id','slug','summary','content','featured_image','featured_post','active','user_id'];

    public function category()
    {
        return $this->belongsTo(CategoriesModel::class,'category_id');
    }



    public function getFeaturedImageAttribute($value)
    {
        return new ImagePath($value);
    }


    public function user()
    {
        return $this->belongsTo(Admin::class);
    }

    public function scopeActive($query)
    {
        $query->where('active', 1);
    }
}
