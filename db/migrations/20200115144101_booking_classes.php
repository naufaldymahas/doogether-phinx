<?php

use Phinx\Migration\AbstractMigration;

class BookingClasses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $bookingClasses = $this->table('booking_classes');
        $bookingClasses->addColumn('open_class_id', 'integer', ['null' => false])
                        ->addColumn('users_id', 'integer', ['null' => false])
                        ->addForeignKey('open_class_id', 'open_classes', 'id')
                        ->addForeignKey('users_id', 'users', 'id')
                        ->create();
    }
}
