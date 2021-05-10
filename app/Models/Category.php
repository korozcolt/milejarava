<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post(){
        return $this->hasMany(Post::class);
    }

    protected $fillable = [
        'id', 'name' , 'post_id'
    ];

}
