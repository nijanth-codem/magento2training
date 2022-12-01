<?php
namespace Training\Firstextension\Block;
use \Magento\Customer\Model\Session;
class Firstextension extends \Magento\Framework\View\Element\Template
{
    protected $customer;
    
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customer
    )
    {
        parent::__construct($context);
        $this->customer = $customer;
    }

    public function getFirstExtensionTxt()
    {
        return 'This is your first extension updated!';
    }

    public function getCustomerDetails()
    {
        $customer = $this->customer;
        echo $customerData = $customer->getCustomerData();
        echo "<br>";
        echo $customerName = $customer->getName();
        echo "<br>";
        echo $customerId = $customer->getId();
        return $customerData;
    }
}