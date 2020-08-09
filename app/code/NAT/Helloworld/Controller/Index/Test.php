<?php
namespace NAT\Helloworld\Controller\Index;


use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
const URL = "api.openweathermap.org/data/2.5/weather?q=London&appid=2b1cd523d2b5fb68008cf75880aef743";
class Test extends \Magento\Framework\App\Action\Action {
    protected $_productFactory;
    protected $_pageFactory;
    protected $_curl;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        ProductFactory $productFactory,
        \Magento\Framework\HTTP\Client\Curl $curl
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_productFactory = $productFactory;
        $this->_curl = $curl;
        return parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.


        $this->_curl->get(URL);
        $result = $this->_curl->getBody();
        echo $result;
        echo ("<br>");

        exit;
    }
}
