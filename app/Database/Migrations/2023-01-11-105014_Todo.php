<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $this->forge->createDatabase('startpage', true);
        $this->forge->addField([
            'id'=>['type'=>'int', 'constraint'=>9, 'unsigned'=>true, 'auto_increment'=>true,],
            'todo'=>['type'=>'text',],
            'expires'=>['type'=>'datetime',],
            'done'=>['type'=>'boolean', 'default'=>0,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('todo', true);
    }

    public function down()
    {
        $this->forge->dropTable('todo');
    }
}
