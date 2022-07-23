<?php

namespace Repat\LaravelMySqlEnumValues\Macros;

use Illuminate\Database\Query\Builder;
use PDO;

class EnumValues
{
    protected PDO $pdo;

    private string $sql;

    public function __construct(private Builder $builder, private string $column)
    {
        $this->pdo = $this->builder->getConnection()->getPdo();
        $this->assembleStatement();
    }

    private function assembleStatement()
    {
        $this->sql = "SELECT REPLACE(REPLACE(REPLACE(COLUMN_TYPE, 'enum(', ''), ')', ''), '\'', '') AS valid_values FROM information_schema.`COLUMNS` WHERE TABLE_NAME = '".$this->builder->from."' AND COLUMN_NAME = '".$this->column."'";
    }

    public function execute()
    {
        return explode(',', $this->builder->getConnection()->selectOne($this->sql)->valid_values);
    }
}
