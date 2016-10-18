<?php

/**
 * User: iman
 * Date: 10/10/16
 * Time: 3:48 PM
 */
namespace App;

use Docker\API\Model\ContainerConfig;
use Docker\Docker;
use Webpatser\Uuid\Uuid;

class DockerHelper
{
    private $docker;

    function __construct()
    {
        $this->docker = new Docker();
    }

    function getManager()
    {
        return $this->docker->getContainerManager();
    }

    function createNewMiddleware()
    {
        $containerConfig = new ContainerConfig();
        $containerConfig->setImage(config('middleware.image'));

        $apiKey = Uuid::generate();

        $env = [];
        if (config('middleware.name') == 'I1820') {
            array_push($env, 'I1820_INFLUXDB_HOST=' . config('middleware.db_host'));
            array_push($env, 'I1820_MQTT_HOST=' . config('middleware.mqtt_host'));
            array_push($env, 'I1820_MQTT_PORT=' . config('middleware.mqtt_port'));
            array_push($env, 'I1820_ENDPOINTS=' . $apiKey);
        }

	$containerConfig->setEnv($env);

        $containerCreateResult = $this->getManager()->create($containerConfig);
        $this->getManager()->start($containerCreateResult->getId());

        // Create and run container

        return [$containerCreateResult->getId(), $apiKey];
    }

    function findContainerIp($containerId)
    {
        return $this->getManager()->find($containerId)->getNetworkSettings()->getIPAddress();
    }

}
