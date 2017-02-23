<?php /* Template Name: Payment */ get_header(); ?>

<div id="wrapper">
    <form method="post" name="orderForm" id="orderForm">
        <input id="identifier" name="identifier" type="hidden" value="6-Week-Shred">
        <input id="proceedToCheckout" name="proceedToCheckout" type="hidden" value="false">
        <input id="purchasableProductIds" name="purchasableProductIds" type="hidden" value="">
        <input id="quantities" name="quantities" type="hidden" value="">
        <input id="removePurchasableProductId" name="removePurchasableProductId" type="hidden" value="">
        <input id="upSellId" name="upSellId" type="hidden" value="">
        <input id="submitted" name="submitted" type="hidden" value="false">
        <input id="optionsPurchasableProductId" name="optionsPurchasableProductId" type="hidden" value="0">
        <input id="productOptionId" name="productOptionId" type="hidden" value="">
        <input id="productOption" name="productOption" type="hidden" value="">
        <input id="displayTaxAsVat" name="displayTaxAsVat" type="hidden" value="false">
        <input id="timeZone" name="timeZone" type="hidden" value="Europe/Helsinki">
        <div id="header">
            <div id="CUSTOM_HTML">
                <div id="customHeader">
                    <!-- Hotjar Tracking Code for http://scottlaidler.com -->
                    <script>
                    (function(h, o, t, j, a, r) {
                        h.hj = h.hj || function() {
                            (h.hj.q = h.hj.q || []).push(arguments)
                        };
                        h._hjSettings = {
                            hjid: 188667,
                            hjsv: 5
                        };
                        a = o.getElementsByTagName('head')[0];
                        r = o.createElement('script');
                        r.async = 1;
                        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                        a.appendChild(r);
                    })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
                    </script>
                    <!-- Change text of buy now button + remove offer coupon -->
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var cardButton = document.getElementById("checkoutWithCreditCardLink");
                        if (cardButton) {
                            cardButton.textContent = "Pay by card";
                        }
                    });
                    </script>
                </div>
            </div>
            <div id="IMAGE">
                <div class="logo">
                  <a href="<?php echo home_url(); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/blue-background-male.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                    </a>
    </div><!-- /logo -->
            </div>
        </div>
        <div id="content">
            <input id="previewMode" name="previewMode" type="hidden" value="false">
            <div id="ORDER_FORM_PRODUCT_LIST">
                <table class="viewCart tabular grid">
                    <tbody>
                        <tr>
                            <th class="leftAlign">
                                Products</th>
                            <th></th>
                            <th class="rightAlign priceCell">Price</th>
                            <th class="centerAlign qtyCell">Quantity</th>
                            <th class="rightAlign priceCell">Total</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://d1yoaun8syyxxt.cloudfront.net/nh247-5fc177c8-c50f-4188-9cdd-92de467216c4-v2" class="cartThumb productImage">
                            </td>
                            <td>
                                <h1>6 Week Shred</h1>
                                <p class="productDescription"></p>
                            </td>
                            <td class="rightAlign priceCell">
                                <span class="price">£19.99</span>
                            </td>
                            <td class="centerAlign qtyCell">
                                <input type="number" class="qtyField" name="qty_1" value="1" size="1">
                                <a class="updateCart" href="javascript:Infusion.Ecomm.OrderForms.ajaxSubmitForm('orderForm', false, 0, 0, '6-Week-Shred', 'RENDER_ORDER_FORM', ['ORDER_FORM_PRODUCT_LIST', 'ORDER_FORM_SUMMARY', 'UP_SELLS', 'PAYMENT_PLANS', 'SHIPPING_OPTIONS','CHECKOUT_LINKS'])">
                                    Update</a>
                            </td>
                            <td class="rightAlign priceCell">
                                £19.99</td>
                        </tr>
                        <tr class="subtotal">
                            <td class="leftAlign"><span class="totalPrice">Subtotal</span></td>
                            <td co="" colspan="2"></td>
                            <td class="qtyCell"></td>
                            <td class="rightAlign priceCell"><span class="priceBold">£19.99</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="CUSTOM_HTML">
                <div id="productInformation">
                </div>
            </div>
            <div id="UP_SELLS">
            </div>
            <div id="ORDER_FORM_BILLING_ENTRY">
                <div id="orderFormBillingEntry" style="display:none;">
                    <table class="billingTable tabular grid">
                        <tbody>
                            <tr>
                                <th colspan="2" class="leftAlign">Billing Information</th>
                            </tr>
                            <tr>
                                <td class="rightAlignTop">
                                    <label class="checkoutLabel">* First Name</label>
                                </td>
                                <td>
                                    <input class="inline-invalid-styling checkoutTop" id="firstName" name="firstName" size="10" type="text" required="required">
                                    <input class="inf_1eef1ea19c8ce25ff0df78a4ba55be1c" id="inf_NoQC6Mohp2sfOPdP" name="inf_NoQC6Mohp2sfOPdP" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">* Last Name</label>
                                </td>
                                <td>
                                    <input class="inline-invalid-styling checkout" id="lastName" name="lastName" size="12" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">
                                        Company Name</label>
                                </td>
                                <td>
                                    <input class="checkout" id="company" name="company" size="25" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">* Address - Line 1</label>
                                </td>
                                <td>
                                    <input class="inline-invalid-styling checkout" id="addressLine1" name="addressLine1" size="25" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">Address - Line 2</label>
                                </td>
                                <td>
                                    <input class="checkout" id="addressLine2" name="addressLine2" size="25" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">* City</label>
                                </td>
                                <td>
                                    <input class="inline-invalid-styling checkout" id="city" name="city" size="15" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">
                                        <div id="stateRequired">State</div>
                                    </label>
                                </td>
                                <td>
                                    <input class="checkout" id="state" name="state" size="2" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">* Zip Code</label>
                                </td>
                                <td>
                                    <input class="inline-invalid-styling checkoutShortest" id="zipCode" name="zipCode" size="5" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">
                                    <label class="checkoutLabel">* Country</label>
                                </td>
                                <td>
                                    <select class="checkout" required="required" id="country" name="country" data-on="Component.Select">
                                        <option value="">Please select one</option>
                                        <option>Afghanistan</option>
                                        <option>Åland Islands</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option>Antarctica</option>
                                        <option>Antigua and Barbuda</option>
                                        <option>Argentina</option>
                                        <option>Armenia</option>
                                        <option>Aruba</option>
                                        <option>Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas (the)</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                        <option>Belarus</option>
                                        <option>Belgium</option>
                                        <option>Belize</option>
                                        <option>Benin</option>
                                        <option>Bermuda</option>
                                        <option>Bhutan</option>
                                        <option>Bolivia (Plurinational State of)</option>
                                        <option>Bonaire, Sint Eustatius and Saba</option>
                                        <option>Bosnia and Herzegovina</option>
                                        <option>Botswana</option>
                                        <option>Bouvet Island</option>
                                        <option>Brazil</option>
                                        <option>British Indian Ocean Territory (the)</option>
                                        <option>Brunei Darussalam</option>
                                        <option>Bulgaria</option>
                                        <option>Burkina Faso</option>
                                        <option>Burundi</option>
                                        <option>Cabo Verde</option>
                                        <option>Cambodia</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                        <option>Cayman Islands (the)</option>
                                        <option>Central African Republic (the)</option>
                                        <option>Chad</option>
                                        <option>Chile</option>
                                        <option>China</option>
                                        <option>Christmas Island</option>
                                        <option>Cocos (Keeling) Islands (the)</option>
                                        <option>Colombia</option>
                                        <option>Comoros (the)</option>
                                        <option>Congo (the Democratic Republic of the)</option>
                                        <option>Congo (the)</option>
                                        <option>Cook Islands (the)</option>
                                        <option>Costa Rica</option>
                                        <option>Côte d'Ivoire</option>
                                        <option>Croatia</option>
                                        <option>Cuba</option>
                                        <option>Curaçao</option>
                                        <option>Cyprus</option>
                                        <option>Czech Republic (the)</option>
                                        <option>Denmark</option>
                                        <option>Djibouti</option>
                                        <option>Dominica</option>
                                        <option>Dominican Republic (the)</option>
                                        <option>Ecuador</option>
                                        <option>Egypt</option>
                                        <option>El Salvador</option>
                                        <option>Equatorial Guinea</option>
                                        <option>Eritrea</option>
                                        <option>Estonia</option>
                                        <option>Ethiopia</option>
                                        <option>Falkland Islands (the) [Malvinas]</option>
                                        <option>Faroe Islands (the)</option>
                                        <option>Fiji</option>
                                        <option>Finland</option>
                                        <option>France</option>
                                        <option>French Guiana</option>
                                        <option>French Polynesia</option>
                                        <option>French Southern Territories (the)</option>
                                        <option>Gabon</option>
                                        <option>Gambia (the)</option>
                                        <option>Georgia</option>
                                        <option>Germany</option>
                                        <option>Ghana</option>
                                        <option>Gibraltar</option>
                                        <option>Greece</option>
                                        <option>Greenland</option>
                                        <option>Grenada</option>
                                        <option>Guadeloupe</option>
                                        <option>Guam</option>
                                        <option>Guatemala</option>
                                        <option>Guernsey</option>
                                        <option>Guinea</option>
                                        <option>Guinea-Bissau</option>
                                        <option>Guyana</option>
                                        <option>Haiti</option>
                                        <option>Heard Island and McDonald Islands</option>
                                        <option>Holy See (the)</option>
                                        <option>Honduras</option>
                                        <option>Hong Kong</option>
                                        <option>Hungary</option>
                                        <option>Iceland</option>
                                        <option>India</option>
                                        <option>Indonesia</option>
                                        <option>Iran (Islamic Republic of)</option>
                                        <option>Iraq</option>
                                        <option>Ireland</option>
                                        <option>Isle of Man</option>
                                        <option>Israel</option>
                                        <option>Italy</option>
                                        <option>Jamaica</option>
                                        <option>Japan</option>
                                        <option>Jersey</option>
                                        <option>Johnston Island</option>
                                        <option>Jordan</option>
                                        <option>Kazakhstan</option>
                                        <option>Kenya</option>
                                        <option>Kiribati</option>
                                        <option>Korea (the Democratic People's Republic of)</option>
                                        <option>Korea (the Republic of)</option>
                                        <option>Kuwait</option>
                                        <option>Kyrgyzstan</option>
                                        <option>Lao People's Democratic Republic (the)</option>
                                        <option>Latvia</option>
                                        <option>Lebanon</option>
                                        <option>Lesotho</option>
                                        <option>Liberia</option>
                                        <option>Libya</option>
                                        <option>Liechtenstein</option>
                                        <option>Lithuania</option>
                                        <option>Luxembourg</option>
                                        <option>Macao</option>
                                        <option>Macedonia (the former Yugoslav Republic of)</option>
                                        <option>Madagascar</option>
                                        <option>Malawi</option>
                                        <option>Malaysia</option>
                                        <option>Maldives</option>
                                        <option>Mali</option>
                                        <option>Malta</option>
                                        <option>Marshall Islands (the)</option>
                                        <option>Martinique</option>
                                        <option>Mauritania</option>
                                        <option>Mauritius</option>
                                        <option>Mayotte</option>
                                        <option>Mexico</option>
                                        <option>Micronesia (Federated States of)</option>
                                        <option>Midway Islands</option>
                                        <option>Moldova (the Republic of)</option>
                                        <option>Monaco</option>
                                        <option>Mongolia</option>
                                        <option>Montenegro</option>
                                        <option>Montserrat</option>
                                        <option>Morocco</option>
                                        <option>Mozambique</option>
                                        <option>Myanmar</option>
                                        <option>Namibia</option>
                                        <option>Nauru</option>
                                        <option>Nepal</option>
                                        <option>Netherlands (the)</option>
                                        <option>New Caledonia</option>
                                        <option>New Zealand</option>
                                        <option>Nicaragua</option>
                                        <option>Niger (the)</option>
                                        <option>Nigeria</option>
                                        <option>Niue</option>
                                        <option>Norfolk Island</option>
                                        <option>Northern Mariana Islands (the)</option>
                                        <option>Norway</option>
                                        <option>Oman</option>
                                        <option>Pakistan</option>
                                        <option>Palau</option>
                                        <option>Palestine, State of</option>
                                        <option>Panama</option>
                                        <option>Papua New Guinea</option>
                                        <option>Paraguay</option>
                                        <option>Peru</option>
                                        <option>Philippines (the)</option>
                                        <option>Pitcairn</option>
                                        <option>Poland</option>
                                        <option>Portugal</option>
                                        <option>Puerto Rico</option>
                                        <option>Qatar</option>
                                        <option>Réunion</option>
                                        <option>Romania</option>
                                        <option>Russian Federation (the)</option>
                                        <option>Rwanda</option>
                                        <option>Saint Barthélemy</option>
                                        <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option>Saint Kitts and Nevis</option>
                                        <option>Saint Lucia</option>
                                        <option>Saint Martin (French part)</option>
                                        <option>Saint Pierre and Miquelon</option>
                                        <option>Saint Vincent and the Grenadines</option>
                                        <option>Samoa</option>
                                        <option>San Marino</option>
                                        <option>Sao Tome and Principe</option>
                                        <option>Saudi Arabia</option>
                                        <option>Senegal</option>
                                        <option>Serbia</option>
                                        <option>Seychelles</option>
                                        <option>Sierra Leone</option>
                                        <option>Singapore</option>
                                        <option>Sint Maarten (Dutch part)</option>
                                        <option>Slovakia</option>
                                        <option>Slovenia</option>
                                        <option>Solomon Islands</option>
                                        <option>Somalia</option>
                                        <option>South Africa</option>
                                        <option>South Georgia and the South Sandwich Islands</option>
                                        <option>South Sudan</option>
                                        <option>Southern Rhodesia</option>
                                        <option>Spain</option>
                                        <option>Sri Lanka</option>
                                        <option>Sudan (the)</option>
                                        <option>Suriname</option>
                                        <option>Svalbard and Jan Mayen</option>
                                        <option>Swaziland</option>
                                        <option>Sweden</option>
                                        <option>Switzerland</option>
                                        <option>Syrian Arab Republic</option>
                                        <option>Taiwan (Province of China)</option>
                                        <option>Tajikistan</option>
                                        <option>Tanzania, United Republic of</option>
                                        <option>Thailand</option>
                                        <option>Timor-Leste</option>
                                        <option>Togo</option>
                                        <option>Tokelau</option>
                                        <option>Tonga</option>
                                        <option>Trinidad and Tobago</option>
                                        <option>Tunisia</option>
                                        <option>Turkey</option>
                                        <option>Turkmenistan</option>
                                        <option>Turks and Caicos Islands (the)</option>
                                        <option>Tuvalu</option>
                                        <option>Uganda</option>
                                        <option>Ukraine</option>
                                        <option>United Arab Emirates (the)</option>
                                        <option selected="selected">United Kingdom</option>
                                        <option>United States</option>
                                        <option>United States Minor Outlying Islands (the)</option>
                                        <option>Upper Volta</option>
                                        <option>Uruguay</option>
                                        <option>Uzbekistan</option>
                                        <option>Vanuatu</option>
                                        <option>Venezuela (Bolivarian Republic of)</option>
                                        <option>Viet Nam</option>
                                        <option>Virgin Islands (British)</option>
                                        <option>Virgin Islands (U.S.)</option>
                                        <option>Wallis and Futuna</option>
                                        <option>Western Sahara</option>
                                        <option>Yemen</option>
                                        <option>Zambia</option>
                                        <option>Zimbabwe</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">* Phone Number</td>
                                <td>
                                    <input class="inline-invalid-styling checkout" id="phoneNumber" name="phoneNumber" size="25" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td class="rightAlign">* Email Address</td>
                                <td>
                                    <input class="inline-invalid-styling checkoutBottom" id="emailAddress" name="emailAddress" size="15" type="text" required="required">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript">
                jQuery(document).ready(function() {

                    var $country = jQuery('#country');

                    if ($country.val() == 'United States' || $country.val() == 'Canada') {
                        jQuery('#stateRequired').html('* State');
                        var stateElement = document.getElementById("state");
                        stateElement.classList.add('inline-invalid-styling');
                        stateElement.setAttribute('required', 'required');
                    } else {
                        var stateElement = document.getElementById("state");
                        stateElement.classList.remove('inline-invalid-styling');
                        stateElement.removeAttribute('required');
                    }

                    if ($country.length > 0 && "SELECT" == $country.get(0).tagName) {
                        $country.change(function() {

                            if ($country.val() == 'United States' || $country.val() == 'Canada') {
                                jQuery('#stateRequired').html('* State');
                                var stateElement = document.getElementById("state");
                                stateElement.classList.add('inline-invalid-styling');
                                stateElement.setAttribute('required', 'required');
                            } else {
                                jQuery('#stateRequired').html('State');
                                var stateElement = document.getElementById("state");
                                stateElement.classList.remove('inline-invalid-styling');
                                stateElement.removeAttribute('required');
                            }
                        });
                    }
                });

                jQuery('#addressLine1, #city, #zipCode, #country, #state').change(function() {
                    Infusion.Ecomm.OrderForms.submitFormUponChangeOnBilling('orderForm', '6-Week-Shred', 'RENDER_ORDER_FORM');

                });
                </script>
            </div>
            <div id="ORDER_FORM_SHIPPING_ENTRY">
                <div id="orderFormShippingEntry" style="display:none;">
                </div>
            </div>
            <div id="SHIPPING_OPTIONS">
                <div id="shippingOptionsContainer" style="display:none;">
                </div>
            </div>
            <div id="PAYMENT_PLANS">
            </div>
            <div id="ORDER_FORM_SUMMARY">
                <table class="orderSummary tabular grid">
                    <tbody>
                        <tr>
                            <th class="leftAlign">
                                Order Summary</th>
                            <th class="rightAlign"></th>
                        </tr>
                        <tr>
                            <td class="listCell">Subtotal</td>
                            <td class="rightAlign">£19.99</td>
                        </tr>
                        <tr>
                            <td class="subtotal">Total Due</td>
                            <td class="rightAlign subtotal">£19.99</td>
                        </tr>
                        <tr>
                            <td colspan="2">Promo Code:
                                <input class="promoField field-valid" id="promoCode" name="promoCode" type="text"><a href="javascript:Infusion.Ecomm.OrderForms.ajaxSubmitForm('orderForm', false, 0, 0, '6-Week-Shred', 'RENDER_ORDER_FORM', ['ORDER_FORM_PRODUCT_LIST', 'ORDER_FORM_SUMMARY', 'UP_SELLS', 'PAYMENT_PLANS', 'SHIPPING_OPTIONS'])" class="codeButton">Apply</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="PAYMENT_SELECTION">
                <div id="payPalLightBox" style="display:none;">
                    <p class="payPalIcon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/paypal_express_checkout_button.png" class="payPalLightboxIcon"></p>
                    <p class="payPalMessage">Please continue your purchase in the secure window we opened. If you don't see it, click the button below.</p>
                    <input class="inf-button btn payPalGo" id="payPalGo" name="payPalGo" type="button" value="Go">
                    <input class="inf-button btn continueButton closePayPalLightbox" id="closeLightBox" name="closeLightBox" type="button" value="Close">
                </div>
                <table id="paymentSelection" class="paymentMethodTable tabular grid" style="display:none;">
                    <input id="shippingRequired" name="shippingRequired" type="hidden" value="false">
                    <tbody>
                        <tr>
                            <th colspan="5" class="leftAlign">Payment Information</th>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center;">No results to display.</td>
                        </tr>
                        <input id="creditCardType" name="paymentType" type="hidden" value="">
                        <script type="text/javascript">
                        Infusion.ready(function() {

                            Infusion.Ecomm.OrderForms.initPaymentSelection();

                        });
                        </script>
                    </tbody>
                </table>
            </div>
            <div id="CHECKOUT_LINKS">
                <div class="checkoutLinks">
                    <a id="checkoutWithCreditCardLink" onclick="Infusion.Ecomm.OrderForms.selectPaymentType('creditcard');Infusion.Ecomm.OrderForms.ajaxSubmitForm('orderForm', false, 0, '', '6-Week-Shred', 'RENDER_ORDER_FORM',
                                ['ORDER_FORM_BILLING_ENTRY', 'PAYMENT_SELECTION', 'ORDER_FORM_SHIPPING_ENTRY', 'SHIPPING_OPTIONS', 'CHECKOUT_LINKS'])" class="continueButton">Pay by card</a>
                    <a id="checkoutWithPayPalLink" onclick="javascript:Infusion.Ecomm.OrderForms.payPalExpressLogin('6-Week-Shred', 'PayPal Login');" class="checkoutWithPayPalLink"><img src="<?php echo get_template_directory_uri(); ?>/img/paypal_express_checkout_button.png" class="checkoutWithPayPalImg"></a>
                </div>
            </div>
        </div>
        <br clear="all">
        <div id="footer">
            <div id="CUSTOM_HTML">
                <div id="customFooter">
                    <span style="padding:0px 0px 40px">Please email <span style="color:blue; text-decoration:underline">support@scottlaidler.com</span> with any issues</span>
                </div>
            </div>
        </div>
    </form>
</div>



<?php get_footer(); ?>
