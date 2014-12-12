<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CouponsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Coupons::create(array(
				'title' => $faker->word,
				'description' => $faker->word,
				'category' => $faker->word,
				'expiration_date' => $faker->dateTime,
				'price' => $faker->randomDigit,
				'discount_percentage' => $faker->randomDigit,
				'availability' => $faker->randomDigit
			));
		}
	}

}