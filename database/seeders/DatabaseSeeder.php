<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ProductFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        product_number
        desc 
        name 
        branch
        price
*/  /*
        $product1= new Product();
        $product1->product_number = 12345;
        $product1->desc = "Esto es una descripcion 1";
        $product1->name = "Coronita";
        $product1->branch = "Modelo";
        $product1->price = "18.50";
        $product1->save();

        $product2= new Product();
        $product2->product_number = 12345;
        $product2->desc = "Esto es una descripcion 2";
        $product2->name = "Coronita";
        $product2->branch = "Modelo";
        $product2->price = "38.50";
        $product2->save();
        // User::factory(10)->create();
*/
        Product::factory(50)->create(); //linea para crear productos, en este caso 50
        //User::factory()->create([
          //  'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }
}
