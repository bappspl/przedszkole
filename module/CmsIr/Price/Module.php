<?php
namespace CmsIr\Price;

use CmsIr\Price\Model\Price;
use CmsIr\Price\Model\PriceTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Authentication\AuthenticationService;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $viewModel = $e->getViewModel();

        $auth = new AuthenticationService();
        if ($auth->hasIdentity()) {
            $loggedUser = $auth->getIdentity();
            $viewModel->loggedUser = $loggedUser;
        }
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/Price',
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'CmsIr\Price\Model\PriceTable' =>  function($sm) {
                    $tableGateway = $sm->get('PriceTableGateway');
                    $table = new PriceTable($tableGateway);
                    return $table;
                },
                'PriceTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Price());
                    return new TableGateway('cms_price', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
}