<?php
namespace Hoanganh\Weather\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Index extends Template
{

    // public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	// {
	// 	parent::__construct($context);
    // }
    public function __construct(
        Template\Context $context,
        \HoangAnh\Weather\Model\WeatherFactory  $weatherFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->weatherFactory = $weatherFactory;
    }

    
    public function getWeatherInformation()
    {
        return $this->weatherFactory->create()->getWeatherResponse();
    }

    // public function getDataWeather()
    // { 
    //      $apiKey = 'T1W5TH5vT0E4WKLLWLFc9kS0KhGX2GZY';
    //      $location = '353412';
    //      $url='http://dataservice.accuweather.com/forecasts/v1/daily/5day/' . $location .'?apikey=' .$apiKey. '&language=vi'; // tạo biến url cần lấy
 
        // $lines_array=file_get_contents($url); // dùng hàm file() lấy dữ liệu theo url

        // // $string_array = implode('',$lines_array); 
 
        // $obj = json_decode($lines_array);
 
        // return $obj;

    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //         CURLOPT_RETURNTRANSFER => 0,
    //         CURLOPT_URL => $url,
    //         CURLOPT_SSL_VERIFYPEER => false
    //     ));

    //    $resp = curl_exec($curl)->create();

    // //    $data_encode = json_encode($resp);

    //    $weather_data = json_decode($resp,true);

    //    curl_close($curl);

    //    return  $weather_data->getCollection;
    // } 
}