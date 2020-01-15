<?php

use Faker\Factory;
use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'username' => $faker->userName,
                'password' => sha1($faker->password),
                'email' => $faker->email,
                'fullname' => $faker->firstName,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        $this->table('users')->insert($data)->saveData();
    }
}
