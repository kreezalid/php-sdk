<?php

namespace Kreezalid;

class ApiConnect
{
    public $api_url;
    public $api_key;
    public $api_secret;
    public $api_version;

    /**
     * ApiConnect constructor.
     */
    public function __construct()
    {
        // TODO: refactor how config params are handled
        $config = include dirname(__DIR__) .  '/config.php';

        $this->api_key      = $config['api_key'];
        $this->api_secret   = $config['api_secret'];
        $this->api_url      = $config['api_url'];
        $this->api_version  = $config['api_version'];

    }

    /**
     * Copied from https://weichie.com/blog/curl-api-calls-with-php/
     *
     * @param string $method
     * @param string $url
     * @param array|bool $data
     * @return array
     */
    public function execute($method, $url, $data = false)
    {
        $curl = curl_init();
        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "PUT":
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "DELETE":
                // TODO: add DELETE
                die('DELETE request is not implemented yet');
                break;
            default:
                if ($data) {
                    $url = sprintf("%s?%s", $url, http_build_query($data));
                }
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $this->_getEndpointUrl($url));
        curl_setopt($curl, CURLOPT_USERPWD, $this->api_key . ":" . $this->api_secret);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, [
//            'Content-Type: application/json',
//        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result_json = curl_exec($curl);

        // Check for errors
        if ($curl_errno = curl_errno($curl))
        {
            return array('curl_error' => array('errno' => $curl_errno, 'message' => curl_strerror($curl_errno)));
        }

//        if(!$result) {
//            die("Connection Failure");
//        }
        curl_close($curl);

        $result_array = json_decode($result_json, $assoc = true);
        return $result_array;
    }

    protected function _getEndpointUrl($url)
    {
        $endpointUrl = $this->api_url . '/api/' . $this->api_version . $url;
//dd($endpointUrl);
        return $endpointUrl;
    }
}