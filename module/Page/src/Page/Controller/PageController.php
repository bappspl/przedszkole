<?php

namespace Page\Controller;

use CmsIr\Price\Model\Price;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Result;
use Zend\Authentication\Storage\Session as SessionStorage;
use Zend\Db\Adapter\Adapter as DbAdapter;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;

class PageController extends AbstractActionController
{
    public function homeAction()
    {
        $this->layout('layout/home');

        $viewParams = array();
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function viewPageAction()
    {
        $this->layout('layout/home');

        $slug = $this->params('slug');

        $page = $this->getPageService()->findOneBySlug($slug);

        if(empty($page)){
            $this->getResponse()->setStatusCode(404);
        }

        $viewParams = array();
        $viewParams['page'] = $page;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function priceAction()
    {
        $this->layout('layout/home');

        $prices = $this->getPriceService()->findAllByWebsiteId(2);

        $konsultacje = array();
        $tomatis = array();
        $warnke = array();

        /* @var $price Price */
        foreach($prices as $price)
        {
            if($price->getCategory() == 'konsultacje-i-terapie')
            {
                array_push($konsultacje, $price);
            } elseif($price->getCategory() == 'cennik-treningow-sluchowych-metoda-tomatisa')
            {
                array_push($tomatis, $price);
            } else
            {
                array_push($warnke, $price);
            }
        }

        $viewParams = array();
        $viewParams['konsultacje'] = $konsultacje;
        $viewParams['tomatis'] = $tomatis;
        $viewParams['warnke'] = $warnke;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function galleryAction()
    {
        $this->layout('layout/home');

        $galleries = $this->getFileService()->findAllByCategoryAndWebsiteId('gallery', 2);

        $viewParams['galleries'] = $galleries;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    /**
     * @return \CmsIr\Menu\Service\MenuService
     */
    public function getMenuService()
    {
        return $this->getServiceLocator()->get('CmsIr\Menu\Service\MenuService');
    }

    /**
     * @return \CmsIr\Slider\Service\SliderService
     */
    public function getSliderService()
    {
        return $this->getServiceLocator()->get('CmsIr\Slider\Service\SliderService');
    }

    /**
     * @return \CmsIr\Page\Service\PageService
     */
    public function getPageService()
    {
        return $this->getServiceLocator()->get('CmsIr\Page\Service\PageService');
    }

    /**
     * @return \CmsIr\System\Model\StatusTable
     */
    public function getStatusTable()
    {
        return $this->getServiceLocator()->get('CmsIr\System\Model\StatusTable');
    }

    /**
     * @return \CmsIr\Price\Service\PriceService
     */
    public function getPriceService()
    {
        return $this->getServiceLocator()->get('CmsIr\Price\Service\PriceService');
    }

    /**
     * @return \CmsIr\File\Service\FileService
     */
    public function getFileService()
    {
        return $this->getServiceLocator()->get('CmsIr\File\Service\FileService');
    }
}
