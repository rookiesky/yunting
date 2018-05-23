<?php

namespace App\Http\Controllers;

use App\Tools\HttpPostOrGet;
use Illuminate\Http\Request;

class VoiceController extends Controller
{
    /**
     * 首页视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexView()
    {
        return view('voice.index');
    }

    public function test()
    {
        $url = 'https://www.zwdu.com/book/30241/';
        $result = HttpPostOrGet::postOrGet($url);
        $result = iconv('gbk','utf-8',$result);

        $title_peg = '/<meta property="og:title" content="(.*)"/';

        preg_match($title_peg,$result,$ret);


        $dis_peg = '/<meta property="og:description" content="(.*)"/';

        preg_match($dis_peg,$result,$dis);

        $img_peg = '/<meta property="og:image" content="(.*)"/';

        preg_match($img_peg,$result,$img);

        $data = [
            'title' => $ret[1],
            'summary' => $dis[1],
            'img' => $img[1]
        ];

        dd($img);
    }

    public function bookListView()
    {
        return view('voice.list_book');
    }

    /**
     * 列表视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageView()
    {
        return view('voice.list');
    }

}
