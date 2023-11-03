<?php
declare(strict_types=1);

namespace Mtr\Dev\Model\Event\Listener;

use Magento\Framework\Event\ObserverInterface;

//use \Zend\Debug\Debug as Debug;

class LayoutGenerateBlocksAfter implements ObserverInterface
{

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //echo "after generate block";
        //var_dump( $observer->getEvent()->getLayout()->getXmlString());
        return $this;  
    }

}