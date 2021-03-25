<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newpost = new Post();

            $newpost->name = $faker->sentence(3);
            $newpost->text = $faker->text();
            $slug = Str::slug($newpost->name, '-');
            $sluginiziale = $slug;

            $postPresente = Post::where('slug',$slug)->first();
            $contatore = 1;

            while ($postPresente) {
                $slug = $sluginiziale .'-' .$contatore;
                $postPresente = Post::where('slug',$slug)->first();
                $contatore++;

            }

            $newpost->slug = $slug;
            
            $newpost->save();
        }
    }
}
