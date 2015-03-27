<?php

namespace Page\Controller;

use CmsIr\Price\Model\Price;
use CmsIr\Users\Model\UsersTable;
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

class IntroController extends AbstractActionController
{
    public function homeAction()
    {
        $this->layout('layout/intro');

        $viewParams = array();
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

}
