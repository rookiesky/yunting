<?php

namespace App\Repositories;


use App\Book;
use Illuminate\Support\Facades\DB;

class BooksRepository
{
    /**
     * 批量插入数据
     * @param array $data
     * @return mixed
     */
    public function addAll(array $data)
    {
        $model = new Book();
        return DB::table( $model->getTable() )->insert($data);
    }
}