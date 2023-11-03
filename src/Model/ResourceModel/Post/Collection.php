<?php
namespace Mtr\Dev\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
//implements \Magento\Framework\Api\SearchCriteriaInterface
{

    protected $_idFieldName = \Mtr\Dev\Model\Post::ID_COLUMN;

    protected $_eventPrefix = 'mtr_dev_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init(\Mtr\Dev\Model\Post::class, \Mtr\Dev\Model\ResourceModel\Post::class);
    }

}