<?php

use think\migration\db\Column;
use think\migration\Migrator;

class EditBrandAgentTable extends Migrator
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
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $users  = $this->table('brand_agent');
        $column = $users->hasColumn('agent_id');
        if ($column) {
            $users->changeColumn('agent_id', 'integer', ['signed' => false, 'limit' => 11, 'comment' => '品牌认证id', 'identity' => true])->save();
        }
    }
}
