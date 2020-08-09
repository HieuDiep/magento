<?php
namespace Hoanganh\Chat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Index extends Template
{
    // public function __construct(
    //     Template\Context $context,
    //     \HoangAnh\News\Model\NewsFactory  $newsFactory,
    //     array $data = []
    // )
    // {
    //     parent::__construct($context, $data);
    //     $this->newsFactory = $newsFactory;
    // }

    
    // public function getNewsInformation()
    // {
    //     return $this->newsFactory->create()->getNewsResponse();
    // }

    public function sayHelloWorld()
    {
        return 'Hello Chat!';
    }

}