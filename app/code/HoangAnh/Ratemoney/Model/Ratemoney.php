<?php

namespace Hoanganh\Ratemoney\Model;


use Magento\Framework\App\Request\Http;

class Ratemoney
{
    const REQUEST_TIMEOUT = 2000;

    const _URL = 'http://dongabank.com.vn/exchange/export';

    private $response;
    /**
     * @var \Magento\Framework\HTTP\Client\CurlFactory
     */
    private $curlFactory;
    /**
     * @var Http
     */
    private $http;
    /**
     * @var \Magento\Framework\Json\Helper\Data
     */
    private $jsonHelper;

    /**
     * Weather constructor.
     * @param \Magento\Framework\HTTP\Client\CurlFactory $curlFactory
     * @param Http $http
     * @param \Magento\Framework\Json\Helper\Data $jsonHelper
     */
    public function __construct(
        \Magento\Framework\HTTP\Client\CurlFactory $curlFactory,
        Http $http,
        \Magento\Framework\Json\Helper\Data $jsonHelper
    )
    {
        $this->curlFactory = $curlFactory;
        $this->http = $http;
        $this->jsonHelper = $jsonHelper;
    }

    public function getRatemoneyResponse()
    {
        if(!$this->response){
            $this->response = (object) $this->getResponse();
        }
        return $this->response;
    }

    // private function getResponseFromEndPoint()
    // {
    //     return $this->jsonHelper->jsonDecode($this->getResponse());
    // }

    private function getResponse()
    {
        /** @var \Magento\Framework\HTTP\Client\Curl $client */
        $client = $this->curlFactory->create();
        $client->setTimeout(self::REQUEST_TIMEOUT);
        $client->get(
            self::_URL
        );
        return $client->getBody();
    }
}