<?php

namespace CmsIr\Price\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PriceService implements ServiceLocatorAwareInterface
{
    protected $serviceLocator;

    public function findAllByWebsiteId($websiteId)
    {
        $prices = $this->getPriceTable()->getBy(array('website_id' => $websiteId));

        return $prices;
    }

    /**
     * @return \CmsIr\Price\Model\PriceTable
     */
    public function getPriceTable()
    {
        return $this->getServiceLocator()->get('CmsIr\Price\Model\PriceTable');
    }

    /**
     * @return mixed
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }
}
