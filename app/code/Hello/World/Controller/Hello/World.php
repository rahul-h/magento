<?php
namespace Hello\World\Controller\Hello;
class World extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo 'Hello world!';
    }
}