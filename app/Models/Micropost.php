<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    use HasFactory;
    
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このユーザがお気に入りの投稿（Mictopostモデルとの関係を定義）
     */
     public function favorite_users()
     {
         return $this->belongsToMany(User::class, 'favorites', 'user_id', 'micropost_id')->withTimestamps();
     }
}
