<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreatePrice extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_price', array())
             ->addColumn('name', 'string')
             ->addColumn('category', 'string')
             ->addColumn('first', 'string', array('null'=>true))
             ->addColumn('second', 'string', array('null'=>true))
             ->addColumn('website_id', 'integer')
             ->save();
    }

    public function down()
    {
        $this->dropTable('cms_price');
    }
}