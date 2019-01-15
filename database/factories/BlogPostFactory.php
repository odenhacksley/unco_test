<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\BlogPost::class, function (Faker $faker) {
        $title = $faker->sentence(rand(3,8), true);
        $text = $faker->realText(rand(1000,4000));
        $is_published= rand(1,5) > 1;
        $CreatedAt = $faker->dateTimeBetween('-3 months', '-2 months');
        $data = [
         'category_id' => rand(1, 11),
         'user_id' => (rand(1,5)==1) ? 1 : 2,
         'title' => $title,
         'slug' => str_slug($title),
         'excerpt' => $faker->text(rand(40,100)),
         'content_raw' => $text,
         'content_html'=> $text,
         'is_published'=> (rand(1,3)==3) ? false :true,
         'published_at'=> $is_published ? $faker->dateTimeBetween('-2 months', '-2 days') : null,
         'created_at'=> $CreatedAt,
         'updated_at'=> $CreatedAt,
        ];
    return $data;
});
