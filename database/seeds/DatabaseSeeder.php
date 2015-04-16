<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('ProductTableSeeder');
	}
}

class CategoryTableSeeder extends Seeder {

    public function run() {
//        Category::truncate();

        $all = [
            'Clothes' => ['Swimwear', 'Dresses', 'Tops', 'Bottoms', 'Skirts', 'Jumpsuits + Rompers', 'Sweaters + Cardigans', 'Jackets + Coats', 'Activewear'],
            'Shoes' => ['Sandals', 'Heels', 'Platforms', 'Wedges', 'Flats', 'Sneakers', 'Boots', 'Booties', 'Gladiators'],
            'Accessories' => ['Earrings', 'Necklaces', 'Bracelets', 'Rings', 'Body Jewelry', 'Watches', 'Handbags + Wallets', 'Hats + Headwear', 'Sunglasses', 'Belts', 'Scarves', 'Legwear', 'Gift Items', 'Gift Cards']
        ];

        foreach ($all as $key => $value) {
            $category = Category::create([
                'name' => $key,
                'parent_id' => null
            ]);
            foreach ($value as $sub) {
                Category::create([
                    'name' => $sub,
                    'parent_id' => $category->id
                ]);
            }
        }
    }
}

class ProductTableSeeder extends Seeder {
    public function run() {

    }
}

class UserTableSeeder extends Seeder {

    public function run() {
        User::truncate();

        User::create([
            'email' => 'a_zaky003@yahoo.com',
            'password' => bcrypt('password')
        ]);
    }
}
