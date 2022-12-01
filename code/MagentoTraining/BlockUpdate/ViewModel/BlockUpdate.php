<?php declare(strict_types=1);

namespace MagentoTraining\BlockUpdate\ViewModel;

use MagentoTraining\BlockUpdate\Config\Config;


class BlockUpdate
{
    private Config $config;

    public function __construct(
        Config $config
    )
    {
        $this->config = $Config;
    }

    public function getConfig()
    {
        return $this->config;
    }
}

?>