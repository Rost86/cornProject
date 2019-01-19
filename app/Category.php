<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by', 'meta_title', 'meta_description', 'meta_keyword'];
    // Mutators
    public function setSlugAttribute($value) {
      $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-");
    }
    // Get children category
    public function children() {
      return $this->hasMany(self::class, 'parent_id');
    }
     // Polymorphic relation 
     public function articles()
     {
       return $this->morphedByMany('App\Article', 'categoryable');
     }
     public function scopeLastCategories($query, $count)
     {
       return $query->orderBy('created_at', 'desc')->take($count)->get();
     }
}