<?php
namespace Training\CustomerCollection\Block;

class CustomerCollection extends \Magento\Framework\View\Element\Template
{
    protected $_customer;
    protected $_customerFactory;

    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Customer\Model\CustomerFactory $customerFactory,
    \Magento\Customer\Model\Customer $customers
    )
    {
        parent::__construct($context);
        $this->_customerFactory = $customerFactory;
        $this->_customer = $customers;
    }

    public function getCustomerCollection() {
        return $this->_customer->getCollection()
               ->addAttributeToSelect("*")
               ->load();
    }

}