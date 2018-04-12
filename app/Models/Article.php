<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Comment;

class Article extends Model
{
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function likes()
    {
      return $this->belongsToMany(User::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function isLikedByCurrentUser()
    {
      $currentUser = request()->user();

      return $this->likes->contains($currentUser);
    }
}
