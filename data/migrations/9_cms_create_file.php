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
             ->addColumn('file_name', 'string')
             ->addColumn('website_id', 'integer')
             ->save();
    }

    public function down()
    {
        $this->dropTable('cms_file');
    }
}