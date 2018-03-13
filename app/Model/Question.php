<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Model\Reply;
use App\Model\Category;
use App\Model\Like;


class Question extends Model
{
    //
    protected $table = 'questions';
    // protected $fillable = ['title','body','slug'];
    public function user()
    {
      $this->belongsTo(User::class);
    }

    public function replies()
    {
      $this->hasMany(Reply::class);
    }

    public function category()
    {
      $this->belongsTo(Category::class);
    }
}
