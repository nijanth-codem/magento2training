<?php
namespace Training\FreeShippingBar\Block\Cart;

class Sidebar extends \Magento\Framework\View\Element\Template
{

    /**
     * @var \Training\FreeShippingBar\Helper\Data
     */
    protected $helperData;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Training\FreeShippingBar\Helper\Data $helperData
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Training\FreeShippingBar\Helper\Data $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getFreeShippingAmount() {
        return $this->helperData->getGeneralConfig('eligible_amount');
    }
}
