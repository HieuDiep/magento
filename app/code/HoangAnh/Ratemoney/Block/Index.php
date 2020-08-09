<?php
namespace Hoanganh\Ratemoney\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Index extends Template
{
    public function __construct(
        Template\Context $context,
        \HoangAnh\Ratemoney\Model\RatemoneyFactory  $ratemoneyFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->ratemoneyFactory = $ratemoneyFactory;
    }

    
    public function getRatemoneyInformation()
    {
        return $this->ratemoneyFactory->create()->getRatemoneyResponse();
    }

    public function sayHelloWorld()
    {
        return 'Hello Ratemoney!';
    }

}