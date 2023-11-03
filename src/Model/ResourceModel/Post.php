<?php
namespace Mtr\Dev\Model\ResourceModel;

use Mtr\Dev\Model\Post as PostModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    protected function _construct()
    {
        $this->_init('mtr_dev_post', PostModel::ID_COLUMN);
    }
}