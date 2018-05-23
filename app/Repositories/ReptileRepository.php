<?php
/**
 * Created by PhpStorm.
 * User: rookie
 * Url : PTP6.Com
 * Date: 2018/5/23
 * Time: 17:35
 */

namespace App\Repositories;

use App\Reptile;
use Illuminate\Support\Facades\DB;

class ReptileRepository
{
    /**
     * 以倒序查询最后一条的webId
     * @return int
     */
    public function firstWebIdOrderDesc()
    {
        return Reptile::orderBy('id','desc')->first()['web_id'];
    }

    /**
     * 批量插入数据
     * @param array $data
     * @return mixed
     */
    public function addAll(array $data)
    {
        $model = new Reptile();
        return DB::table($model->getTable())->insert($data);
    }

}