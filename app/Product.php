<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug',  'description', 'meta_title', 'meta_description',  'published', 'created_by', 'volume', 'price', 'delivery', 'region', 'soil', 'humidity', 'protein', 'jack', 'modified_by','deal'];

    // Mutators
    public function setSlugAttribute($value) {
      $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-");
    }
    
    // Polymorphic relation 
    public function catalogs()
    {
      return $this->morphToMany('App\Catalog', 'catalogable');
    }

    public function scopeLastProducts($query, $count)
    {
      return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
