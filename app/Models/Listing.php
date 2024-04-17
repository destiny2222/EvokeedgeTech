<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Listing extends Model
{
    use HasFactory;

    public  $fillable = [
        'title',
        'content',
        'image',
        'link',
        'slug',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function getSlugAttribute(){
        return Str::slug($this->title);
    }
}
