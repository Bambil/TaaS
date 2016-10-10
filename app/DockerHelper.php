<?php

/**
 * Created by PhpStorm.
 * User: iman
 * Date: 10/10/16
 * Time: 3:48 PM
 */

use Docker\Docker;

class DockerHelper
{
    private $docker;
    function create() {
        $this->docker = new Docker();
    }

    function createImage($imageName) {
        $this->docker->getImageManager()->create(null, [
            'fromImage' => "$imageName:latest"
        ]);
    }
}