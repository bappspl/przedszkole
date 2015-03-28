<?php

namespace Page;

use CmsIr\File\Service\FileService;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $sm = $e->getApplication()->getServiceManager();

        $controller = $sm->get('request')->getUri()->getPath();

        $controller = $arr = explode('/', $controller);
        $controller = $controller[1];

        if($controller == 'pro-communications')
        {
            $menu = $this->getMenuService($sm)->getMenuByMachineName('main-menu', 2);

            $slider = $this->getSliderService($sm)->findOneBySlug('slider-glowny', 2);

            $files = $this->getFileService($sm)->findLastPictures(12, 2);

            $viewModel = $e->getViewModel();
            $viewModel->menu = $menu;
            $viewModel->slider = $slider;
            $viewModel->files = $files;
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
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * @return \CmsIr\Menu\Service\MenuService
     */
    public function getMenuService($sm)
    {
        return$sm->get('CmsIr\Menu\Service\MenuService');
    }

    /**
     * @return \CmsIr\Slider\Service\SliderService
     */
    public function getSliderService($sm)
    {
        return$sm->get('CmsIr\Slider\Service\SliderService');
    }

    /**
     * @return FileService
     */
    public function getFileService($sm)
    {
        return$sm->get('CmsIr\File\Service\FileService');
    }
}
