<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable=['id','title','slugg','parent_id','published','created_by','modified_by'];

    public function setSlugAttribute($value){
        $this->atributes['slug']=Str::slug(mb_substr($this->title,0,40).
            "-".\Carbon\Carbon::now()->format('dmyHi'),'-');
    }
    public function children(){
        return $this->hasMany(self::class,'parent_id');
    }
}
