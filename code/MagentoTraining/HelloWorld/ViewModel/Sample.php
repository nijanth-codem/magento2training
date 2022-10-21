<?php declare(strict_types=1);

namespace Yireo\Example\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Sample implements ArgumentInterface 
{
    public function getHelloWorld(): string
    {
        return "Hello World!";
    }

}