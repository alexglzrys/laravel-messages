<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->sentence(5),
        'url' => Str::slug($title),
        'description' => $faker->text(450),
        'created_at' => Carbon::now()->subDays(rand(1, 600))
    ];
});
