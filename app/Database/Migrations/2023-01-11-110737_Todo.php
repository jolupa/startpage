<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $fields=[
            'created_at'=>['type'=>'datetime', 'null'=>true,],
            'updated_at'=>['type'=>'datetime', 'null'=>true,],
            'deleted_at'=>['type'=>'datetime', 'null'=>true,],
        ];
        $this->forge->addColumn('todo', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('todo', ['created_at', 'updated_at', 'deleted_at']);
    }
}
