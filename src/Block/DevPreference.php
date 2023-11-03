<?php
declare(strict_types=1);

namespace Mtr\Dev\Block;


class DevPreference extends \Magento\Framework\View\Element\Template
{

    protected $a;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        $data
    )
    {
        parent::__construct($context, $data);
        $this->a = "PREFERENCE from constructor";
        $this->a = $this->doSomethingForPlugin($this->a);
        //echo $this->a;
    }

    public function doSomethingForPlugin(string $arg)
    {
        return  "Inside Block: {$arg}";
    }

    

}