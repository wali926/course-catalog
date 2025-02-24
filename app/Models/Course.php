<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = ['title', 'description', 'category_id', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
