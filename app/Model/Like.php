<?php

namespace App\Model;
use App\Model\Reply;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = 'likes';
    protected $guarded =[];

    public function replies()
    {
      return $this->belongsTo(Reply::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
