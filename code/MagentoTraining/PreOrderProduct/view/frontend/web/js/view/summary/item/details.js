/*jshint browser:true jquery:true*/
/*global alert*/
define(
    [
        'uiComponent'
    ],
    function (Component) {
        "use strict";
        var quoteItemData = window.checkoutConfig.quoteItemData;
        return Component.extend({
            defaults: {
                template: 'MagentoTraining_PreOrderProduct/summary/item/details'
            },
            quoteItemData: quoteItemData,
            getValue: function(quoteItem) {
                return quoteItem.name;
            },
            getIsPreOrder: function(quoteItem) {
                var item = this.getItem(quoteItem.item_id);
                return item.is_pre_order;
            },
            getItem: function(item_id) {
                var itemElement = null;
                _.each(this.quoteItemData, function(element, index) {
                    if (element.item_id == item_id) {
                        itemElement = element;
                    }
                });
                return itemElement;
            }
        });
    }
);
