<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreateDictionary extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_dictionary', array())
             ->addColumn('name', 'string')
             ->addColumn('category', 'string')
             ->addColumn('website_id', 'integer')
             ->save();
    }

    public function down()
    {
        $this->dropTable('cms_dictionary');
    }
}