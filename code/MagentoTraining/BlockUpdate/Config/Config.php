<?php declare(strict_types=1);

namespace MagentoTraining\Blockupdate\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;


class Config
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function enabled(): bool
    {
        return (bool) $this->scopeConfig->getValue('blockupdate/settings/enabled');
    }
}

?>