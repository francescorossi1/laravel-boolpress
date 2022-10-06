<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = [
            ['label' => 'Frontend', 'color' => $faker->hexColor()],
            ['label' => 'Backend', 'color' => $faker->hexColor()],
            ['label' => 'Fullstack', 'color' => $faker->hexColor()],
            ['label' => 'Framework', 'color' => $faker->hexColor()],
        ];

        foreach($tags as $tag){
            $new_tag = new Tag();
            $new_tag->label = $tag['label'];
            $new_tag->color = $tag['color'];
            $new_tag->save();
        }
    }
}
