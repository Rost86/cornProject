<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Catalog extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by', 'meta_title', 'meta_description'];
    // Mutators
    public function setSlugAttribute($value) {
      $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-");
    }
    // Get children 
    public function children() {
      return $this->hasMany(self::class, 'parent_id');
    }
    // Polymorphic relation 
    public function products()
    {
      return $this->morphedByMany('App\Product', 'catalogable');
    }
    public function scopeLastCatalogs($query, $count)
    {
      return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

}
