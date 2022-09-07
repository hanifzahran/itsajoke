<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name','slug','description','parent_id','featured','menu','image'
    ];

    protected $casts = [
        'parent_id' => 'integer',
        'featured' => 'boolean',
        'menu' => 'boolean'
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $value;
    }

    //Function buat category parent, kek untuk ROOT
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    //Function buat category children dari root berarti root->tanaman, service, item
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
