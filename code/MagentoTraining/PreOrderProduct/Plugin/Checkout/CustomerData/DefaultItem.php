<?php

namespace MagentoTraining\PreOrderProduct\Plugin\Checkout\CustomerData;

class DefaultItem
{
    public function aroundGetItemData(
        \Magento\Checkout\CustomerData\AbstractItem $subject,
        \Closure $proceed,
        \Magento\Quote\Model\Quote\Item $item
    ) {
        $data = $proceed($item);
        $result['is_pre_order'] = $item->getProduct()->getIsPreOrder();
        return \array_merge(
            $result,
            $data
        );
    }
}
