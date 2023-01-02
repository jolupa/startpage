<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'int', 'constraint'=>9, 'unsigned'=>true, 'auto_increment'=>true,],
            'todo'=>['type'=>'text',],
            'expired'=>['type'=>'datetime',],
            'done'=>['type'=>'boolean', 'default'=>0,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('todo', true);
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
            $this->forge->dropTable('todo');
        $this->db->enableForeignKeyChecks();
    }
}
