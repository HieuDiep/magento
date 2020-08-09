<?php
namespace NAT\ProductAPI\Api;
use Magento\Framework\Exception\NoSuchEntityException;

// get product by Id

interface ProductRepositoryInterface{

    public function getProductById($id);

}

