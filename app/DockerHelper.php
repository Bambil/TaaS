<?php

/**
 * User: iman
 * Date: 10/10/16
 * Time: 3:48 PM
 */

use Docker\API\Model\ContainerConfig;
use Docker\API\Model\HostConfig;
use Docker\Docker;
use Webpatser\Uuid\Uuid;

class DockerHelper
{
    private $docker;

    function __construct()
    {
        $this->docker = new Docker();
    }

    function getManager() {
        return $this->docker->getContainerManager();
    }

    function createNewMiddleware() {
        $containerConfig = new ContainerConfig();
        $containerConfig->setImage(config('middleware.image'));

        if(config('middleware.name') == 'I1820') {
            $containerConfig->setEnv('I1820_INFLUXDB_HOST', config('middleware.db_host'));
        }

        // Create and run container
        $containerCreateResult = $this->getManager()->create($containerConfig);
        $this->getManager()->start($containerCreateResult->getId());

        return $containerCreateResult->getId();
    }

    function findContainerIp() {

    }

}
