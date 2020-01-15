<?php


use Phinx\Seed\AbstractSeed;

class BookingClasses extends AbstractSeed
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
        $data = [
            ['open_class_id' => 1, 'users_id' => 1],
            ['open_class_id' => 1, 'users_id' => 2],
            ['open_class_id' => 1, 'users_id' => 3],
            ['open_class_id' => 1, 'users_id' => 4],
            ['open_class_id' => 1, 'users_id' => 5],
            ['open_class_id' => 1, 'users_id' => 7],
            ['open_class_id' => 1, 'users_id' => 9],
        ];
        $this->table('booking_classes')->insert($data)->saveData();
    }
}
