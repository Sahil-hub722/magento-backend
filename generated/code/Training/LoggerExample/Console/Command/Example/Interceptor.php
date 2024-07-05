<?php
namespace Training\LoggerExample\Console\Command\Example;

/**
 * Interceptor class for @see \Training\LoggerExample\Console\Command\Example
 */
class Interceptor extends \Training\LoggerExample\Console\Command\Example implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Monolog\Logger $logger)
    {
        $this->___init();
        parent::__construct($logger);
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
