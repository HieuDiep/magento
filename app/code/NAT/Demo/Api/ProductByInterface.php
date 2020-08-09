<?php


namespace NAT\Demo\Api;

interface ProductByInterface
{
    /**
     * GET product by its ID
     *
     * @param string $id
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @api
     */
    public function getProductById($id);
}
