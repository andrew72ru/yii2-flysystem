<?php
/**
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace andrew72ru\flysystem;

use andrew72ru\flysystem\GridFS\GridFSAdapter;
use MongoDB\Driver\Manager;
use MongoDB\GridFS\Bucket;
use yii\base\InvalidConfigException;

/**
 * GridFSFilesystem
 *
 * @author Andrew Zhdanovskih <andrew72ru@gmail.com>
 */
class GridFSFilesystem extends Filesystem
{
    /**
     * @var string
     */
    public $server;
    /**
     * @var string
     */
    public $database;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->server === null) {
            throw new InvalidConfigException('The "server" property must be set.');
        }

        if ($this->database === null) {
            throw new InvalidConfigException('The "database" property must be set.');
        }

        parent::init();
    }

    /**
     * @return GridFSAdapter
     */
    protected function prepareAdapter()
    {
        return new GridFSAdapter(new Bucket(new Manager($this->server), $this->database));
    }
}
