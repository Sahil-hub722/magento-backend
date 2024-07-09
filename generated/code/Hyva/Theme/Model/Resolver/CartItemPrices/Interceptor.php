<?php
namespace Hyva\Theme\Model\Resolver\CartItemPrices;

/**
 * Interceptor class for @see \Hyva\Theme\Model\Resolver\CartItemPrices
 */
class Interceptor extends \Hyva\Theme\Model\Resolver\CartItemPrices implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($totalsCollector);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
