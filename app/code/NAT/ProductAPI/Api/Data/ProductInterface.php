<?php
namespace NAT\ProductAPI\Api\Data;

interface ProductInterface {
    public function getId();
    public function setId($id);

    public function getSku();
    public function setSku($sku);

    public function getName();
    public function setName($name);

    public function getDescription();
    public function setDescription($description);

    public function getPrice();
    public function setPrice($price);

    public function getImages();
    public function setImages($productImagesArray);

}
