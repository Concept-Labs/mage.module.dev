<?php
namespace Mtr\Dev\Controller\Dev;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

use Magento\Framework\App\FrontController;

/**
 * Dev class
 * 
 * @category Magento2
 * @package  Dev
 * @author   "concept.galitsky@gmail.com"
 * @license  GNU
 * @link     None
 */


class Index 

extends \Magento\Framework\App\Action\Action  // deprecated ?
//implements \Magento\Framework\App\ActionInterface
{
    protected $_pageFactory;

    /**
     * Costructor
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \Mtr\Dev\Helper\Data $helper = null,
        \Mtr\Dev\Helper\Data $orighelper = null
    )
    {
        //di test
        // echo $helper->somedata;
        // echo $orighelper->somedata;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}