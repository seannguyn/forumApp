<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Model\Question;
use App\Model\Category;
use App\Model\Like;

class Reply extends Model
{
    //
    protected $table = 'replies';
    // protected $fillable = ['title','body','slug'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function question()
    {
      return $this->belongsTo(Question::class);
    }

    public function like()
    {
      return $this->hasMany(Like::class);
    }
}
