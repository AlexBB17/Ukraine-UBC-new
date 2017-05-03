<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Main extends Model
{
    protected $table;

    protected function _query() {
        return DB::table($this->table);
    }
}