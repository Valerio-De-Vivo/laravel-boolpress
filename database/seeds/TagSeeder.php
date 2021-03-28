<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTag = new Tag();

            $newTag->name = $faker->words(3, true);

            // USER 
            // $userCount = Count(User::all()->toArray());
            // $newpost->user_id = rand(1, $userCount);

            // SLUG 
            $slug = Str::slug($newTag->name, '-');
            $sluginiziale = $slug;

            $TagPresente = Tag::where('slug',$slug)->first();
            $contatore = 1;

            while ($TagPresente) {
                $slug = $sluginiziale .'-' .$contatore;
                $contatore++;
                $TagPresente = Tag::where('slug',$slug)->first();

            }

            $newTag->slug = $slug;
            
            $newTag->save();
        }
    }
}
