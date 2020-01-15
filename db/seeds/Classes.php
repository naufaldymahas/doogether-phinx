<?php


use Phinx\Seed\AbstractSeed;

class Classes extends AbstractSeed
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
            'class_name' => 'Zumba',
            'venue' => 'Soulbox',
            'longitude' => -6.226530,
            'latitude' => 106.807096
        ];
        $this->table('classes')->insert($data)->saveData();
    }
}
