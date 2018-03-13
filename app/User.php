<?php

namespace App;

use App\Model\Question;
use App\Model\Reply;
use App\Model\Category;
use App\Model\Like;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question($value='')
    {
      $this->hasMany(Question::class);
    }

    public function replies($value='')
    {
      $this->hasMany(Reply::class);
    }
}
