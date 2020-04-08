<?php

namespace fw_micro\db\mysql;

use Medoo\Medoo;

/**
 * Class Config
 * @package fw_micro\db\mysql
 */
class Config implements \fw_micro\db\Config
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * Config constructor.
     * @param string $host
     * @param string $name
     * @param string $user
     * @param string $password
     */
    public function __construct(string $host, string $name, string $user, string $password)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
    }

    public function create(): Medoo
    {
        return new Medoo([
            'database_type' => 'mysql',
            'database_name' => $this->name,
            'server' => $this->host,
            'username' => $this->user,
            'password' => $this->password
        ]);
    }
}
