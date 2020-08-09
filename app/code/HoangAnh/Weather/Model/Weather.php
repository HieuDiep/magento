<?php

namespace Hoanganh\Weather\Model;


use Magento\Framework\App\Request\Http;

class Weather
{
    const REQUEST_TIMEOUT = 2000;

    const END_POINT_URL = 'dataservice.accuweather.com/forecasts/v1/daily/5day/';

    const API_KEY = 'R6sHPGrFUdrHtdZGX9shzErbvb715l7M';

    const LOCATION_USER = '353412';

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

    public function getWeatherResponse()
    {
        if(!$this->response){
            $this->response = (object) $this->getResponseFromEndPoint();
        }
        return $this->response;
    }

    private function getResponseFromEndPoint()
    {
        return $this->jsonHelper->jsonDecode($this->getResponse());
    }

    private function getResponse()
    {
        /** @var \Magento\Framework\HTTP\Client\Curl $client */
        $client = $this->curlFactory->create();
        $client->setTimeout(self::REQUEST_TIMEOUT);
        $client->get(
            self::END_POINT_URL . self::LOCATION_USER . '?apikey=' . self::API_KEY . '&language=vi'
        );
        return $client->getBody();
    }
}