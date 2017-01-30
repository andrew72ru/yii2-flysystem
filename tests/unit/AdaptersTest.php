<?php


class AdaptersTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testGridFs()
    {
        $this->assertInstanceOf('yii\base\Component', Yii::$app->gridFs);
    }
}