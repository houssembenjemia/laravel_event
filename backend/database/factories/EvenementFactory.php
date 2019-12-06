<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evenement;
use App\User;

use Faker\Generator as Faker;

$factory->define(Evenement::class, function (Faker $faker) {
    return [
       
        'text_desc'=>$faker->word,
        'image'=>$faker->word,
        //  => $faker->image('images',640,480, null, false),
        'date_deb'=>$faker->date,
        'date_fin'=>$faker->date,
       'users_id'=> User::all()->random()->id,
       'created_at' =>now(),
       'updated_at' =>now(),
    ];
});
