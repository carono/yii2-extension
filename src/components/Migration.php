<?php


namespace carono\yii2plugin\components;


class Migration extends \carono\yii2migrate\Migration
{
    public $configurableProperties = [];
    public $tableOptions;
    public $driver = 'mysql';

    public function tableOptions()
    {
        return [
            $this->driver => $this->tableOptions
        ];
    }
}