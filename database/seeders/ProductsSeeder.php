<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

require_once 'vendor/autoload.php';

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        //
        DB::table('products')->insert([
            'name' => $faker->productName(),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'image' => 'https://img.freepik.com/free-psd/cardboard-box-mockup_125540-1263.jpg?t=st=1657719145~exp=1657719745~hmac=13008cd72e59197fab9dd2f1556614be28ceb336ce76ff41e500a7504e504b9f&w=1380',
            'brand' => $faker->company(),
            'price' => $faker->randomNumber(4, true),
            'price_sale' => $faker->randomNumber(3, true),
            'category' => $faker->department(),
            'stock' => $faker->randomNumber(2, true),
            'created_at' => $faker->dateTimeBetween('-1 week', '+1 week'),    
            'updated_at' => $faker->dateTimeBetween('-1 week', '+1 week')
        ]);
    }
}
