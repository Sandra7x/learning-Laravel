<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        PostSeeder::class,
      ]);

      $customer = Customer::create([
        'name' => 'Sandra',
        'lastname' => 'Rumpāne',
        'city' => '',
      ]);

      
      $customer->save();
    }
}
