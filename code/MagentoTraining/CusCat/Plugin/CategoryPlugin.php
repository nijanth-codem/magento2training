<?php declare(strict_types = 1);
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoTraining\CusCat\Plugin;

use Magento\Catelog\Model\Category;

class CategoryPlugin
{
    const BANNER = 'seasonal_ban_img';

    /**
     * @param Category $subject
     * @param $result
     * @return mixed
     */

    public function afterGetImageUrl(Category $subject, $result)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/templog.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(__FILE__.' '.__FUNCTION__);
        $logger->info(__LINE__);
        $sessionalBannerImage = $subject->getData(self::BANNER);

        if(!empty($sessionalBannerImage)) {
            $result = $sessionalBannerImage;
        }

        return $result;
    }
}
