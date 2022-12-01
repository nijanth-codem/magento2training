<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagentoTraining\SessionalBannerImage\Plugin\Model;

/**
 * Category Image Service
 */
class Image
{
    private const ATTRIBUTE_NAME = 'sessionalImage';
 
    /**
     * Resolve category image URL
     *
     * @param Image $subject
     * @param $result
     * @return string
     */
    public function afterGetUrl(\Magento\Catalog\Model\Category\Image $subject, $result): string
    {   
        $seasonalImage = $subject->getData(self::ATTRIBUTE_NAME);
        if(!empty($seasonalImage)) {
            $result = $seasonalImage;
        }
        return $result;
    }
}
