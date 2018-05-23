<?php

namespace App\Http\Controllers;

use App\Repositories\BooksRepository;
use App\Repositories\ReptileRepository;
use App\Tools\HttpPostOrGet;

class ReptileController extends Controller
{
    const WEBSITE = 'https://www.zwdu.com/book/';   //采集网址
    const WEBSITE_SINGLE_AMOUNT = 150;   //单次采集数量


    public function star()
    {
        $reptile = new ReptileRepository();

        $reptileTotal = ( $reptile->firstWebIdOrderDesc()  ?? 10554 ) + 1;

        $data = [];

        for ($i = $reptileTotal; $i < ( $reptileTotal + self::WEBSITE_SINGLE_AMOUNT ); $i++)
        {
            $url = self::WEBSITE . $i . '/';
            $result = $this->pregMatchAll( iconv('gbk','utf-8',$this->httpRquest( $url ) ) );

            if ( $result !== false )
            {
                $result['link'] = $url;
                $data[] = $result;
            }
            $tmpData[] = [
                'web_id' => $i,
                'website' => $url
            ];
        }

        (new BooksRepository())->addAll($data);
        $reptile->addAll($tmpData);

    }

    /**
     * 获取目标数据
     * @param string $url 目标链接
     * @return mixed
     */
    private function httpRquest(string $url) :string
    {
        return HttpPostOrGet::postOrGet($url);
    }

    /**
     * 获取抓取信息
     * @param string $content
     * @return array|bool
     */
    private function pregMatchAll(string $content)
    {
        $preg = self::preg();
        $title = $this->pregMatch($content,$preg['title']);

        if ($title === false || $title == '' ) {
            return false;
        }

        return [
            'title' => $title,
            'summary' => (string) $this->pregMatch($content,$preg['summary']),
            'thumb' => $this->pregMatch($content,$preg['thumb']),
            'sort' => $this->pregMatch($content,$preg['sort']),
        ];
    }

    /**
     * 采集规则匹配
     * @param string $content 匹配内容
     * @param string $preg  匹配规则
     * @return string|bool
     */
    private function pregMatch(string $content,string $preg)
    {
        preg_match($preg,$content,$ret);

        return isset($ret[1]) ? $ret[1] : false;
    }

    /**
     * 匹配规则
     * @return array
     */
    private static function preg()
    {
        return [
            'title' => '/<meta property="og:title" content="(.*)"/',
            'summary' => '/<meta property="og:description" content="(.*)"/',
            'thumb' => '/<meta property="og:image" content="(.*)"/',
            'sort' => '/<meta property="og:novel:category" content="(.*)"/'
        ];
    }


}
