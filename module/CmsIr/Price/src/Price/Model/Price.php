<?php
namespace CmsIr\Price\Model;

use CmsIr\System\Model\Model;

class Price extends Model
{
    protected $id;
    protected $name;
    protected $category;
    protected $first;
    protected $second;
    protected $websiteId;

    public function exchangeArray($data)
    {
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->name = (!empty($data['name'])) ? $data['name'] : null;
        $this->category = (!empty($data['category'])) ? $data['category'] : null;
        $this->websiteId = (!empty($data['website_id'])) ? $data['website_id'] : null;
        $this->first = (!empty($data['first'])) ? $data['first'] : null;
        $this->second = (!empty($data['second'])) ? $data['second'] : null;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getWebsiteId()
    {
        return $this->websiteId;
    }

    /**
     * @param mixed $websiteId
     */
    public function setWebsiteId($websiteId)
    {
        $this->websiteId = $websiteId;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @return mixed
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @param mixed $second
     */
    public function setSecond($second)
    {
        $this->second = $second;
    }

}