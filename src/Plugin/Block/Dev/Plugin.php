<?php
namespace Mtr\Dev\Plugin\Block\Dev;

/**
 * class Plugin
 */
class Plugin
{
    /**
     * Undocumented function
     *
     * @param  \Mtr\Dev\Block\Dev $block block
     * @param  [type] $arg
     * @return void
     */
    public function beforedoSomethingForPlugin(\Mtr\Dev\Block\Dev $block, $arg)
    {
        echo __METHOD__.'<br/>';
        return $arg.'_plugged_before<br/>';
    }

    public function arounddoSomethingForPlugin(\Mtr\Dev\Block\Dev $block, callable $proceed, ...$args)
    {
        echo __METHOD__.'<br/>';
        echo "ARROUND start<br/>";
        $args .= $proceed(...$args);
        echo __METHOD__.'<br/>';
        echo "ARROUND END<br/>";
        return $args.'_plugged_around';

    }
    public function afterdoSomethingForPlugin(\Mtr\Dev\Block\Dev $block, $arg)
    {
        echo __METHOD__.'<br/>';
        echo $arg;
        return $arg.'_plugged_after';
    }
}
