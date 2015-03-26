<?php

namespace Page\Controller;

use CmsIr\Price\Model\Price;
use Zend\Json\Json;
use Zend\Mime\Message;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Mime\Message as MimeMessage;
use Zend\Mime\Part as MimePart;

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

        $posts = $this->getPostTable()->getBy(array('status_id' => 1, 'category' => $slug, 'website_id' => 2));

        foreach($posts as $post)
        {
            $eventFiles = $this->getPostFileTable()->getOneBy(array('post_id' => $post->getId()));
            $post->setFiles($eventFiles);
        }

        if(empty($posts)){
            $this->getResponse()->setStatusCode(404);
        }

        $viewParams = array();
        $viewParams['posts'] = $posts;
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

    public function contactAction()
    {
        $this->layout('layout/home');

        $viewModel = new ViewModel();
        return $viewModel;
    }

    public function contactFormAction()
    {
        $request = $this->getRequest();
        if ($request->isPost())
        {
            $name = $request->getPost('name');
            $email = $request->getPost('mail');
            $phone = $request->getPost('phone');
            $subject = $request->getPost('subject');
            $content = $request->getPost('content');

            $content = "Imię i nazwisko: <b>" . $name . "</b> <br/>" .
                "Email: <b>" . $email . "</b> <br/>" .
                "Telefon kontaktowy: <b>" . $phone . "</b> <br/>" .
                "Temat: <b>" . $subject . "</b> <br/>" .
                "Treść: <b>" . $content . "</b> <br/>";

            $html = new MimePart($content);
            $html->type = "text/html";

            $body = new MimeMessage();
            $body->setParts(array($html));

            $transport = $this->getServiceLocator()->get('mail.transport');
            $message = new \Zend\Mail\Message();
            $this->getRequest()->getServer();
            $message->addTo('biuro@web-ir.pl')
                ->addFrom('biuro@web-ir.pl')
                ->setEncoding('UTF-8')
                ->setSubject('Wiadomość z formularza kontaktowego')
                ->setBody($body);
            $transport->send($message);
        }

        $params = 'Wiadomość została wysłana poprawnie';
        $jsonObject = Json::encode($params, true);
        echo $jsonObject;
        return $this->response;
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

    /**
     * @return \CmsIr\Post\Model\PostTable
     */
    public function getPostTable()
    {
        return $this->getServiceLocator()->get('CmsIr\Post\Model\PostTable');
    }

    /**
     * @return \CmsIr\Post\Model\PostFileTable
     */
    public function getPostFileTable()
    {
        return $this->getServiceLocator()->get('CmsIr\Post\Model\PostFileTable');
    }
}
