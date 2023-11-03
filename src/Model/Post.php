<?php
/**
 * 
 */
namespace Mtr\Dev\Model;

/**
 * Post class
 */
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \Magento\Framework\View\Element\Block\ArgumentInterface
{
    const CACHE_TAG = 'mtr_dev_post';

    const ID_COLUMN = 'post_id';
    /**
     * Cache tag
     *
     * @var [type]
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = "mtr_dev_post";

    /**
     * 
     */

    public function _construct()
    {
        $this->_init('Mtr\Dev\Model\ResourceModel\Post');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getIdentities()
    {
        return [static::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getDefaultValues()
    {
        return [];
    }
}