define([
  "uiComponent",
  "uiRegistry",
  "Magento_Checkout/js/view/minicart",
], function (Component, registry) {
  "use strict";

  var minicart = registry.get("minicart_content");
  console.log(minicart);

  return Component.extend({
    //shoppingCartUrl: minicart.shoppingCartUrl,
    shoppingCartUrl: "testtest",
  });
});
