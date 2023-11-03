<?php
namespace Mtr\Dev\Model\Config\Source;
use \Magento\Framework\Data\OptionSourceInterface;
class CustomSelect 
implements \Magento\Framework\Option\ArrayInterface //deprecated ?
//implements OptionSourceInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => __('Value 1')], ['value' => 0, 'label' => __('Value 0')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [0 => __('Value 0'), 1 => __('Value 1')];
    }
}