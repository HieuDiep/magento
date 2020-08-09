<?php
namespace NAT\ProductAPI\Model\Data;

use NAT\ProductAPI\Api\Data\ProductInterface;
use Magento\Framework\DataObject;

class Product extends DataObject implements ProductInterface{

    public function getId()
    {
        return $this->getData('id');
    }

    public function setId($id)
    {
        return $this->setData('id',$id);
    }

    public function getSku()
    {
        return $this->getData('sku');
    }

    public function setSku($sku)
    {
        return $this->setData('sku',$sku);
    }

    public function getName()
    {
        return $this->getData('name');
    }

    public function setName($name)
    {
        return $this->setData('name',$name);
    }

    public function getDescription()
    {
        return $this->getData('description');
    }

    public function setDescription($description)
    {
        return $this->setData('description',$description);
    }

    public function getPrice()
    {
        return $this->getData('price');
    }

    public function setPrice($price)
    {
        return $this->setData('price',$price);
    }

    public function getImages()
    {
        return $this->getData('images');
    }

    public function setImages($productImagesArray)
    {
        return $this->setData('images',$productImagesArray);
    }
}

