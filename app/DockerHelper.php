<?php

/**
 * User: iman
 * Date: 10/10/16
 * Time: 3:48 PM
 */
namespace App;

use Docker\API\Model\ContainerConfig;
use Docker\Docker;
use Docker\DockerClient;

class DockerHelper
{
    private $docker;

    function __construct()
    {
        $client = new DockerClient([
            'remote_socket' => 'tcp://' . config('docker.host') . ':' . config('docker.port'),
        ]);
        $this->docker = new Docker($client);
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

    function findContainerIp($containerId) {

    }

}
