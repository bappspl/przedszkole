<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreateFile extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_file', array())
             ->addColumn('name', 'string')
             ->addColumn('slug', 'string')
             ->addColumn('category', 'string')
             ->addColumn('filename', 'string', array('null' => true))
             ->addColumn('website_id', 'integer')
             ->save();
    }

    public function down()
    {
        $this->dropTable('cms_file');
    }
}