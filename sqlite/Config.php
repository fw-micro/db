<?php

namespace fw_micro\db\sqlite;

use Medoo\Medoo;

/**
 * Class Config
 * @package fw_micro\db\sqlite
 */
class Config implements \fw_micro\db\Config
{
    /**
     * @var string
     */
    private $file;

    /**
     * Config constructor.
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * @return Medoo
     */
    public function create(): Medoo
    {
        return new Medoo([
            'database_type' => 'sqlite',
            'database_file' => $this->file,
        ]);
    }
}
