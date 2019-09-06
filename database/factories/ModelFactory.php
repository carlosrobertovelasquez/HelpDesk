<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\status::class,function(Faker\Generator $faker){
return[
    'status'=>$faker->name,
    'color'=>'#ccc'
];
});
