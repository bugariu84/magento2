<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 12/16/2016
 * Time: 5:28 PM
 */

namespace Mageplaza\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Display extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo 'Hello World';
        exit;
    }
}