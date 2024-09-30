<?php

namespace App\Models;

use App\DB;

class Model
{
    public static $table;
    
    public static function all()
    {
        $db = new DB();
        return $db->all(static::$table, static::class);
    }

    public static function single($id)
    {   
        $db = new DB();
        return $db->singleById(static::$table, static::class, $id);
    }

    public function save()
    {
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id']);
        $db->insert(static::$table, $fields);
    }
}
