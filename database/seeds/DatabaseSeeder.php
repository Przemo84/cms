<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Article::class, 15)
            ->create()
            ->each(function ($article) {
                $article->comments()
                    ->save(factory(App\Commentary::class)
                        ->make());
            });
    }
}
