<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Product;

use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {

    return [
    	"product_id" => App\Product::count() ? App\Product::pluck('id')->random() : factory(App\Product::class)->create(),
    	
        "customer" => $faker->name,
        "review" => $faker->paragraph,
        "star" => $faker->numberBetween(0,5)
    ];

});

//'user_id' => User::count() ? User::pluck('id')->random() : factory(User::class)->create(),
