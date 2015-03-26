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
             ->addColumn('filename', 'text', array('null' => true))
             ->addColumn('website_id', 'integer')
             ->save();

        $this->insertYamlValues('cms_file');
    }

    public function insertYamlValues($tableName)
    {
        $filename = './data/fixtures/'.$tableName.'.yml';
        $array = \Symfony\Component\Yaml\Yaml::parse(file_get_contents($filename));

        foreach ($array as $sArray){
            $value = '';

            foreach ($sArray as $kCol => $vCol) {
                $vCol === null ? $value = $value . $kCol .' = NULL , ' : $value = $value . $kCol .' = "' . $vCol . '", ';
            }

            $realValue = substr($value, 0, -2);

            $this->execute("SET NAMES UTF8");
            $this->adapter->execute('insert into '.$tableName.' set '.$realValue);
        }
    }

    public function down()
    {
        $this->dropTable('cms_file');
    }
}