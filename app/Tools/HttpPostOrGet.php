<?php

namespace App\Tools;


class HttpPostOrGet
{
    /**
     * CURL POST OR GET 发送
     * @param string $url 接口地址
     * @param null $data  数据
     * @param null $header header 信息
     * @return mixed
     */
    public static function postOrGet(string $url,$data = null,$header = null)
    {
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,FALSE);
        if($header != null){
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
        }
        if (!empty($data)) {
            curl_setopt($curl,CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
        }
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
}