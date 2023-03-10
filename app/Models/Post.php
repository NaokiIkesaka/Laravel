<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    //     return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
   }
   public $guarded = ['id', 'created_at'];
}
