<?php
namespace App\Libraries;

class QueryBuilder {
    public static $instance = NULL;
    protected static $wheres = array();
    protected static $table = '';
    protected static $limit = '';
    protected static $offset = '';

    public static function select($table)
    {
        self::$instance = new QueryBuilder();
        self::$table = $table;
        return self::$instance;
    }

    public static function where($condition)
    {
        self::$where[0] = ' WHERE ' . $condition;
        return self::$instance;
    }

    public static function andWhere($condition)
    {
        self::$where[] = ' AND ' . $condition;
        return self::$instance;
    }

    public static function orWhere($condition)
    {
        self::$where[] = ' OR ' . $condition;
        return self::$instance;
    }

    public static function limit($limit)
    {
        self::$limit = ' LIMIT ' . $limit;
        return self::$instance;
    }

    public static function offset($offset)
    {
        self::$offset = ' OFFSET ' . $offset;
        return self::$instance;
    }

    public static function get()
    {
        return "";
    }

}