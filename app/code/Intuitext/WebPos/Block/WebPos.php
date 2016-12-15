<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 12/15/2016
 * Time: 4:41 PM
 */

namespace Intuitext\WebPos\Block;

use Magento\Framework\View\Element\Template;

class WebPos extends Template
{
    public function getHelloWorldText()
    {
        return 'Hello World';
    }
}