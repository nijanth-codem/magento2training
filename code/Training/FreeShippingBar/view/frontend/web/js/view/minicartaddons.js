define([
    'ko',
    'uiComponent',
    'Magento_Customer/js/customer-data',
], function (ko, Component, customerData) {
    'use strict';
    var subtotalAmount;
    var eligibleAmount = freeShippingEligibleAmount;
    return Component.extend({
        displaySubtotal: ko.observable(true),
        eligibleAmount: '$' + eligibleAmount.toFixed(2),
        /**
         * @override
         */
        initialize: function () {
            this._super();
            this.cart = customerData.get('cart');
        },
        getTotalCartItems: function () {
            return customerData.get('cart')().summary_count;
        },
        getMessage: function () {
            subtotalAmount = Number(customerData.get('cart')().subtotalAmount);
            let message;
            if(subtotalAmount == 0 || subtotalAmount == undefined) {
                message = "Free Shipping for order over $"+eligibleAmount;
            }
            else if (subtotalAmount < eligibleAmount && subtotalAmount > 0) {
                let remainAmount = eligibleAmount - subtotalAmount;
                message = "Only $"+ remainAmount +" away for get free shipping option";
            }else if (subtotalAmount >= eligibleAmount) {
                message = "Congrats! You have got free shipping option";
            }
            return message;
        }
    });
});
