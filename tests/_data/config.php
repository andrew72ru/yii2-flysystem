<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 30.01.17
 * Time: 18:39
 */

return [
    'id' => 'app-test',
    'basePath' => dirname(__DIR__),
    'components' => [
        'gridFs' => [
            'class' => 'andrew72ru\flysystem\GridFSFilesystem',
            'server' => 'mongodb://localhost:27017',
            'database' => 'gridfs-test',
        ]
    ]
];