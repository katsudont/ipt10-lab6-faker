<?php
require 'vendor/autoload.php';

use Faker\Factory as FakerFactory;

class Random
{
    private $faker;

    public function __construct()
    {
        $this->faker = FakerFactory::create('en_PH');
    }

    public function getProfile()
    {
        return [
            $this->faker->uuid,
            $this->faker->title,
            $this->faker->firstName,
            $this->faker->lastName,
            $this->faker->streetAddress,
            $this->faker->barangay,
            $this->faker->municipality,
            $this->faker->province,
            'Philippines',
            $this->faker->phoneNumber,
            $this->faker->mobileNumber,
            $this->faker->company,
            $this->faker->url,
            $this->faker->jobTitle,
            $this->faker->safeColorName,
            $this->faker->date('Y-m-d'),
            $this->faker->email,
            $this->faker->password
        ];
    }
}