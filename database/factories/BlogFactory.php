<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->sentence();
    $slug = (\Illuminate\Support\Str::slug($title));
    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->text(),
        'featured_image' => $faker->imageUrl()
    ];
});
