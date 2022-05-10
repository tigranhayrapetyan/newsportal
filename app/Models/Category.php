<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'category_name',
    ];

        // For table joint with logic 1 to 1 By Eloquent ORM
        public function user()
        {
            return $this->hasOne(User::Class, 'id', 'user_id'); 
        }
}
