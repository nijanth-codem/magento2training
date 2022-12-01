<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagentoTraining\SessionalImage\Plugin\ViewModel\Category;
use \Magento\Catalog\Model\Category;

class Image
{
    public const CUSTOM_ATTRIBUTE_NAME = 'sessionalImage';
    const ATTRIBUTE_NAME = "image";
    /**
     * Resolve category image URL
     *
     * @param Image $subject
     * @param \Closure $proceed
     * @param Category $category
     * @param string $attributeCode
     * @return string
     */

    public function aroundGetUrl(\Magento\Catalog\ViewModel\Category\Image $subject,
    \Closure $proceed,
    Category $category,
    string $attributeCode = self::ATTRIBUTE_NAME): string
    {
        $result = $proceed($category, self::CUSTOM_ATTRIBUTE_NAME);
        if(empty($result))
        {
            $result = $proceed($category, $attributeCode);
        }
        return $result;
    }
}
