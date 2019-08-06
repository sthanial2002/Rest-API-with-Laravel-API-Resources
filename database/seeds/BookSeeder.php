<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Book::class, 50)->create()->each(function ($b) {
            $b->ratings()->save(factory(App\Models\Rating::class)->make());
        });
    }
}
