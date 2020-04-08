<?php

namespace fw_micro\db;

use Medoo\Medoo;

/**
 * Interface Config
 * @package fw_micro\db
 */
interface Config
{
    public function create(): Medoo;
}
