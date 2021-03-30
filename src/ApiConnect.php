<?php

namespace Kreezalid;

class ApiConnect
{
    private $api_url;
    private $api_key;
    private $api_secret;
    private $api_version;

    public function __construct()
    {
        $this->setApiVersion('v1');
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
        if (is_object($data)){
            $data = (array) $data;
        }
        $curl = curl_init();
        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                }
                break;
            case "PUT":
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
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

        return $endpointUrl;
    }

    /**
     * @return mixed
     */
    public function getApiUrl()
    {
        return $this->api_url;
    }

    /**
     * @param mixed $api_url
     */
    public function setApiUrl($api_url)
    {
        $this->api_url = $api_url;
    }

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param mixed $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * @return mixed
     */
    public function getApiSecret()
    {
        return $this->api_secret;
    }

    /**
     * @param mixed $api_secret
     */
    public function setApiSecret($api_secret)
    {
        $this->api_secret = $api_secret;
    }

    /**
     * @return mixed
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * @param mixed $api_version
     */
    public function setApiVersion($api_version)
    {
        $this->api_version = $api_version;
    }
}