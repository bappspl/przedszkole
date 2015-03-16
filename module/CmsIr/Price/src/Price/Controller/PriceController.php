<?php
namespace CmsIr\Price\Controller;

use CmsIr\Price\Form\PriceForm;
use CmsIr\Price\Form\PriceFormFilter;
use CmsIr\Price\Model\Price;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;
use Zend\Json\Json;

class PriceController extends AbstractActionController
{
    public function listAction()
    {
        $category = $this->params()->fromRoute('category');
        $currentWebsiteId = $_COOKIE['website_id'];


        $request = $this->getRequest();
        if ($request->isPost()) {

            $data = $this->getRequest()->getPost();
            $columns = array('name');

            $listData = $this->getPriceTable()->getPriceDatatables($columns, $data, $category, $currentWebsiteId);

            $output = array(
                "sEcho" => $this->getRequest()->getPost('sEcho'),
                "iTotalRecords" => $listData['iTotalRecords'],
                "iTotalDisplayRecords" => $listData['iTotalDisplayRecords'],
                "aaData" => $listData['aaData']
            );

            $jsonObject = Json::encode($output, true);
            echo $jsonObject;
            return $this->response;
        }

        $viewParams = array();
        $viewParams['category'] = $category;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function createAction()
    {
        $category = $this->params()->fromRoute('category');
        $currentWebsiteId = $_COOKIE['website_id'];
        $form = new PriceForm();

        $request = $this->getRequest();

        if ($request->isPost()) {

            $form->setInputFilter(new PriceFormFilter($this->getServiceLocator()));
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $price = new Price();

                $price->exchangeArray($form->getData());
                $price->setWebsiteId($currentWebsiteId);
                $price->setCategory($category);
                $this->getPriceTable()->save($price);

                $this->flashMessenger()->addMessage('Usługa została dodana poprawnie.');

                return $this->redirect()->toRoute('price', array('category' => $category));
            }
        }

        $viewParams = array();
        $viewParams['form'] = $form;
        $viewParams['category'] = $category;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function editAction()
    {
        $id = $this->params()->fromRoute('price_id');
        $category = $this->params()->fromRoute('category');
        $currentWebsiteId = $_COOKIE['website_id'];

        $price = $this->getPriceTable()->getOneBy(array('id' => $id));

        if(!$price) {
            return $this->redirect()->toRoute('price', array('category' => $category));
        }

        $form = new PriceForm();
        $form->bind($price);

        $request = $this->getRequest();

        if ($request->isPost()) {

            $form->setInputFilter(new PriceFormFilter($this->getServiceLocator()));
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $price->setWebsiteId($currentWebsiteId);
                $this->getPriceTable()->save($price);

                $this->flashMessenger()->addMessage('Usługa została edytowana poprawnie.');

                return $this->redirect()->toRoute('price', array('category' => $category));
            }
        }

        $viewParams = array();
        $viewParams['form'] = $form;
        $viewParams['category'] = $category;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    public function deleteAction()
    {
        $request = $this->getRequest();
        $id = (int) $this->params()->fromRoute('price_id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('price');
        }

        if ($request->isPost()) {
            $del = $request->getPost('del', 'Anuluj');

            if ($del == 'Tak') {
                $id = (int) $request->getPost('id');

                $this->getPriceTable()->deletePrice($id);
                $this->flashMessenger()->addMessage('Usługa została usunięta poprawnie.');

                $modal = $request->getPost('modal', false);
                if($modal == true) {
                    $jsonObject = Json::encode($params['status'] = $id, true);
                    echo $jsonObject;
                    return $this->response;
                }
            }

            return $this->redirect()->toRoute('price');
        }

        return array(
            'id'    => $id,
            'page'  => $this->getPriceTable()->getOneBy(array('id' => $id))
        );
    }

    /**
     * @return \CmsIr\Price\Model\PriceTable
     */
    public function getPriceTable()
    {
        return $this->getServiceLocator()->get('CmsIr\Price\Model\PriceTable');
    }
}