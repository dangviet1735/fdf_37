<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Rating::class, 20)->create();
    }
}
