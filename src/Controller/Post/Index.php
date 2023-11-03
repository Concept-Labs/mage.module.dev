<?php
namespace Mtr\Dev\Controller\Post;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

//use 

/**
 * Inedx class
 * 
 * @category Magento2
 * @package  Dev
 * @author   "concept.galitsky@gmail.com"
 * @license  GNU
 * @link     None
 */
class Index extends \Magento\Framework\App\Action\Action  // deprecated ?
//implements \Magento\Framework\App\ActionInterface
{
    protected $_pageFactory;
    protected $_postProxy;

    /**
     * Costructor
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \Mtr\Dev\Model\Post\Proxy $postProxy
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postProxy = $postProxy;
        parent::__construct($context);
    }

    public function execute()
    {

        /** 
         * @var $post Mtr\Dev\Model\Post 
         * */
        //$post = $this->_postFactory->create();
        $postCollection = $this->_postProxy->getCollection();      
        $resultPage = $this->_pageFactory->create();
        $postBlock = $resultPage->getLayout()->getBlock('mtr_post_index');
        $postBlock->setData('postCollection', $postCollection);
        return $resultPage;
    }
}