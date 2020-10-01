<?php

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase {

    /**
     * @runInSeparateProcess
     */
    public function testHello(){
        $_GET['name']="Alfred";
        ob_start();
        include 'hello.php';
        $content=ob_get_clean();
        $this->assertEquals('Hello Alfred !', $content);
    }
}