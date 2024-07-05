<?php
use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;

require __DIR__ . '/app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('adminhtml');

$configWriter = $objectManager->get(WriterInterface::class);

$configWriter->save(    
    'design/search_engine_robots/default_robots',
    'NOINDEX,NOFOLLOW',         
    ScopeConfigInterface::SCOPE_TYPE_DEFAULT, 
    0                      
);

echo "The default_robots value has been updated to NOINDEX,NOFOLLOW.\n";
