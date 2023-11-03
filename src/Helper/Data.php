<?php
namespace Mtr\Dev\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_SYSTEM_CONFIG = 'mtr_system_config/';
    public $somedata;

    protected $postFactory;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        string $somedata='initial',
        \Mtr\Dev\Model\PostFactory $postFactory = null
    )
    {
        $this->postFactory = $postFactory;
        $this->somedata = $somedata;
        echo "<br/>{$somedata} ___";
        parent::__construct($context);
    }

    public function getConfig($config, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_SYSTEM_CONFIG.$config,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

}