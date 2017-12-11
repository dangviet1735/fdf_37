<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Order::class, 20)->create();
    }
}
