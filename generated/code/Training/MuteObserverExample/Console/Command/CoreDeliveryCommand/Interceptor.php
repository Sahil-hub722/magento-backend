<?php
namespace Training\MuteObserverExample\Console\Command\CoreDeliveryCommand;

/**
 * Interceptor class for @see \Training\MuteObserverExample\Console\Command\CoreDeliveryCommand
 */
class Interceptor extends \Training\MuteObserverExample\Console\Command\CoreDeliveryCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Training\MuteObserverExample\Model\DeliveryTypes $deliveryTypes)
    {
        $this->___init();
        parent::__construct($deliveryTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
