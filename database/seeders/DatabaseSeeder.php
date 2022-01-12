<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
// use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'asd',
            'email' => 'asd@asd.com',
            'usertype' => '0',
            'phone' => '123',
            'address' => 'Rumah Jepri',
            'password' => bcrypt('asdasd123')
        ]);

        Product::create([
            'title' => 'UNO CARD',
            'price' => '20000',
            'description' => 'Kartu UNO ini.',
            'quantity' => '20',
            'image' => 'product_01.jpg'
        ]);

        Product::create([
            'title' => 'Santai Aja Lagi',
            'price' => '70000',
            'description' => 'Santai dulu aja.',
            'quantity' => '15',
            'image' => 'product_02.jpg'
        ]);

        Product::create([
            'title' => 'POPTIMUS PRIME',
            'price' => '120000',
            'description' => 'Versi KW Optimus Prime.',
            'quantity' => '15',
            'image' => 'product_03.jpg'
        ]);

        Product::create([
            'title' => 'LEGO Castle',
            'price' => '400000',
            'description' => 'Benteng bentengan orang makar.',
            'quantity' => '5',
            'image' => 'product_04.jpg'
        ]);

        Product::create([
            'title' => 'LEGO Spaceship',
            'price' => '250000',
            'description' => 'Ini Pesawat yang ada di Star Wars.',
            'quantity' => '8',
            'image' => 'product_05.jpg'
        ]);

        Product::create([
            'title' => 'WTC New York',
            'price' => '10000000',
            'description' => 'Mengenang Tragedi.',
            'quantity' => '1',
            'image' => 'product_06.jpg'
        ]);
    }
}
