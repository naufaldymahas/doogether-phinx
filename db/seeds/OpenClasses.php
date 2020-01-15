<?php


use Phinx\Seed\AbstractSeed;

class OpenClasses extends AbstractSeed
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
            'class_id' => 1,
            'datetime' => '2020-01-16 06:00:00',
            'price' => 150000,
            'datetime_open' => '2020-01-16 12:00:00',
            'duration' => 1,
            'datetime_done' => '2020-01-16 13:00:00',
            'active' => 1
        ];
        $this->table('open_classes')->insert($data)->saveData();
    }
}
