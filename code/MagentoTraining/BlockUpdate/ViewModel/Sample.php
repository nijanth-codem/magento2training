<?php declare(strict_types=1);

namespace Yireo\Example\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Sample implements ArgumentInterface 
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getPhoneNumber(): string
    {
        return $this->scopeConfig->getValue('general/store_information/phone');
    }



    public function getHelloWorld(): string
    {
        return "Hello World!";
    }

}