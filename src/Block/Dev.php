<?php
declare(strict_types=1);

namespace Mtr\Dev\Block;

class Dev extends \Magento\Framework\View\Element\Template
{

    protected $a;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->a = "from constructor";
        $this->a = $this->doSomethingForPlugin($this->a);
        echo $this->a;
    }

    public function doSomethingForPlugin(string $arg)
    {
        return  "Inside Block: {$arg}";
    }

    

}