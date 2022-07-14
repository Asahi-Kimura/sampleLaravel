<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog; 
class BlogFactory extends Factory
{
   protected $model = Blog::class;

    public function definition()
    {
        return [
            'title' => $this -> faker->word,
            'content' =>$this -> faker->realText
        ];
    }
}
