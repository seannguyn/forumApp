<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\Reply;


$factory->define(App\Model\Like::class, function (Faker $faker) {

    return [
        'user_id' => function() {
          return User::all()->random();
        },
        'reply_id' => function() {
          return Reply::all()->random();
        },


        // question id will be provided when seeding the reply

    ];
});
