<?php
namespace Mtr\Dev\Ui\Component\Post\Listing\Column;

class Status implements 
\Magento\Framework\Option\ArrayInterface
{
    protected $options = [];
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'new' => __('New'), 
            'enabled' => __('Enabled'),
            'disabled' => __('Disabled'),
        ];
    }
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (!count($this->options)) {
            foreach ($this->toArray() as $value => $label) {
                $this->options[] = ['value' => $value, 'label' => $label];
            }
        }
        return $this->options;
    }
}