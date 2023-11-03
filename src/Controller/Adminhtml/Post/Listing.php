<?php
namespace Mtr\Dev\Controller\Adminhtml\Post;

/**
 * 
 */
class Listing extends \Magento\Backend\App\Action
{
    /**
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory = null;

    protected $collectionFactory;

    /**
     * Constructor
     * 
     * @param \Magento\Backend\App\Action\Context        $context     Context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory Page factory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
        //,\Mtr\Dev\Model\ResourceModel\Post\CollectionFactory $collectionFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        //$this->collectionFactory = $collectionFactory;
    }

    /**
     * Exec action
     * 
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute() : \Magento\Framework\View\Result\Page
    {
        //$collection = $this->collectionFactory->create();
        //var_dump(get_class($collection));
        //die('execute');
        $resultPage = $this->pageFactory->create();
        $resultPage->setActiveMenu('Mtr_Dev::post');
        $resultPage->addBreadcrumb(__('Listing Posts Data'), __('Listing Post some data'));
        $resultPage->getConfig()->getTitle()->prepend(__('Listing Posts Listing'));
        return $resultPage;
    }
}