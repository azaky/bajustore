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
        $men = Category::create([
            'name' => 'pria',
            'parent_id' => null
        ]);
        $women = Category::create([
            'name' => 'wanita',
            'parent_id' => null
        ]);
        Category::create([
            'name' => 'Jas Pria',
            'parent_id' => $men->id
        ]);
        Category::create([
            'name' => 'Dress Wanita',
            'parent_id' => $women->id
        ]);
    }
}

class ProductTableSeeder extends Seeder {
    public function run() {

    }
}

class UserTableSeeder extends Seeder {
    public function run() {
        User::create([
            'email' => 'a_zaky003@yahoo.com',
            'password' => bcrypt('password')
        ]);
    }
}
