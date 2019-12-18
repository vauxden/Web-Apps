<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Tag::class, 5)->create();
        $k = new Tag;
        $k->tag = "Video Games";
        $k->save();
        $k->posts()->attach(1);
        $k->posts()->attach(3);

        //
    }
}
