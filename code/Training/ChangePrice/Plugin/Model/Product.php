<?php
namespace Training\ChangePrice\Plugin\Model;
 
class Product
{
     /**
     * @param Product $subject
     * @return string
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result += 10;
        return $result;
    }
}