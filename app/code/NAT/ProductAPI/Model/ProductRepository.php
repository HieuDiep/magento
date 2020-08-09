<?php
namespace NAT\ProductAPI\Model;

//use NAT\ProductAPI\API\ConfigurableProductRepositoryInterface;
use NAT\ProductAPI\Api\ProductRepositoryInterface;
use Magento\Catalog\Api\Data\ProductInterfaceFactory;
use NAT\ProductAPI\Helper\ProductHelper;
use Magento\Framework\Exception\NoSuchEntityException;

class ProductRepository implements ProductRepositoryInterface{

    private $productInterfaceFactory;
    private $productHelper;
    private $productRepository;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        ProductInterfaceFactory $productInterfaceFactory,
        ProductHelper $productHelper
    )
    {
        $this->productInterfaceFactory = $productInterfaceFactory;
        $this->productHelper = $productHelper;
        $this->productRepository = $productRepository;
    }

    public function getProductById($id)
    {
        // TODO: Implement getProductById() method.
        $productInterface = $this->productInterfaceFactory->create();
        try {
            $product = $this->productRepository->getById($id);
            return $product;
        } catch (NoSuchEntityException $e){
            throw NoSuchEntityException::singleField("id",$id);
        }

    }
}
