<?php $site = 'Оформление заказа'; include(ROOT.'/views/layouts/header.php'); ?>

    <!-- Page Title -->
    <section class="page-title text-center">
      <div class="container">
        <h1 class=" heading page-title__title">оформление заказа</h1>
      </div>
    </section> <!-- end page title -->


    <!-- Checkout -->
    <section class="section-wrap checkout">
      <div class="container relative">
        <div class="row">
        <?php if ($result): ?>
        <div class="col-6">
         <h1>Заказ оформлен!</h1>
         <p>В скором времени с вами свяжется оператор</p>
         </div>
         <div class="pb-120 mb-120"></div>
         <?php else: ?>
          <div class="ecommerce col">

            <div class="row mb-30">
              <div class="col-md-8">
               <?php if (User::isGuest()): ?>
                <p class="ecommerce-info">
                  Есть аккаунт? 
                  <a href="/user/action" class="showlogin">Нажмите здесь, что бы войти</a>
                </p>
                <?php endif; ?>
              </div>
            </div>

            <form method="post" class="checkout ecommerce-checkout row">

              <div class="col-lg-7" id="customer_details">
                <div>
                  <h2 class="uppercase mb-30">Данные оплаты</h2>

                      <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_full_name_field">
                        <label for="billing_full_name">Полное имя
                          <abbr class="required" title="required">* <?php if (isset($errors['billing_full_name'])) echo ' - '.$errors['billing_full_name']; ?></abbr>
                        </label>
                        <input type="text" class="input-text" placeholder value="<?php if (isset($userName)) echo $userName; ?>" name="billing_full_name" id="billing_full_name">
                      </p>
                <!-- full name -->

                  <p class="form-row form-row-wide" id="billing_company_field">
                    <label for="billing_company">Название Компании</label>
                    <input type="text" class="input-text" placeholder value name="billing_company" id="billing_company">
                  </p>
                  
                  <p class="form-row form-row-wide address-field update_totals_on_change validate-required ecommerce-validated" id="billing_country_field">
                    <label for="billing_country">Страна
                      <abbr class="required" title="required">* <?php if (isset($errors['billing_country'])) echo ' - '.$errors['billing_country']; ?></abbr>
                    </label>
                    <select name="billing_country" id="billing_country" class="country_to_state country_select" title="Country *">
                      <option value="0">Выберите страну…</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AX">Åland Islands</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia, Plurinational State of</option>
                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Côte d'Ivoire</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Curaçao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran, Islamic Republic of</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao</option>
                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestinian Territory, Occupied</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Réunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthélemy</option>
                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SX">Sint Maarten (Dutch part)</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela, Bolivarian Republic of</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands, British</option>
                      <option value="VI">Virgin Islands, U.S.</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </p>
                  

                  <p class="form-row form-row-wide address-field validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_address_1_field">
                    <label for="billing_address">Адрес
                      <abbr class="required" title="required">* <?php if (isset($errors['billing_address'])) echo ' - '.$errors['billing_address']; ?></abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="Улица, дом, квартира" value="<?php if (isset($userStreet)) echo $userStreet; ?>" name="billing_address" id="billing_address_1">
                  </p>

                  <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required">
                    <label for="billing_city">Поселение / Город
                      <abbr class="required" title="required">* <?php if (isset($errors['billing_city'])) echo ' - '.$errors['billing_city']; ?></abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="Поселение / Город" value="<?php if (isset($userCity)) echo $userCity; ?>" name="billing_city" id="billing_city">
                  </p>

                  <p class="form-row form-row-first address-field validate-state" id="billing_state_field" data-o_class="form-row form-row-first address-field validate-state">
                    <label for="billing_state">Регион / Штат</label>
                    <input type="text" class="input-text" placeholder value="<?php if (isset($userState)) echo $userState; ?>" name="billing_state" id="billing_state">
                  </p>

                  <p class="form-row form-row-last address-field validate-required validate-postcode ecommerce-invalid ecommerce-invalid-required-field" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                    <label for="billing_postcode">Почтовый индекс / ZIP
                      <abbr class="required" title="required">* <?php if (isset($errors['billing_postcode'])) echo ' - '.$errors['billing_postcode']; ?></abbr>
                    </label>
                    <input type="text" class="input-text" placeholder value="<?php if (isset($userPostcode)) echo $userPostcode; ?>" name="billing_postcode" id="billing_postcode">
                  </p>

                  <div class="row">
                    <div class="col-md-6">
                      <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                        <label for="billing_phone">Телефон
                          <abbr class="required" title="required">* <?php if (isset($errors['billing_phone'])) echo ' - '.$errors['billing_phone']; ?></abbr>
                        </label>
                        <input type="text" class="input-text" placeholder value="<?php if (isset($userPhone)) echo $userPhone; ?>" name="billing_phone" id="billing_phone">
                      </p>
                    </div>
                    <div class="col-md-6">
                      <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
                        <label for="billing_email">Почта Email
                          <abbr class="required" title="required">* <?php if (isset($errors['billing_email'])) echo ' - '.$errors['billing_email']; ?></abbr>
                        </label>
                        <input type="text" class="input-text" placeholder value="<?php if (isset($userEmail)) echo $userEmail; ?>" name="billing_email" id="billing_email">
                      </p>
                    </div>
                  </div>                      

                </div>

                <p class="form-row form-row-wide create-account">
                  <input type="checkbox" class="input-checkbox" id="createaccount" name="createaccount" value="1">
                  <label for="createaccount" class="checkbox-label">Создать аккаунт</label>
                </p>

                <div>
                  <p class="form-row notes ecommerce-validated" id="order_comments_field">
                    <label for="order_comments">Комментарии к заказу</label>
                    <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Заметки о вашем заказе, например, специальные пожелания к доставке." rows="2" cols="6"></textarea>
                  </p>
                </div>

              </div> <!-- end col -->

              <!-- Your Order -->
              <div class="col-lg-5">
                <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                  <h2 class="uppercase">Ваш заказ</h2>
                  <table class="table shop_table ecommerce-checkout-review-order-table">
                    <tbody>
                     <?php foreach ($products as $product): ?>
                      <tr>
                        <th><?php echo $product['title'] ?><span class="count"> x <?php echo $productsInCart[$product['id']]; ?></span></th>
                        <td>
                          <span class="amount">RUB <?php echo $product['price']; ?></span>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                      <tr class="sub-total">
                        <th><strong>Промежуточная Сумма</strong></th>
                        <td>
                          <strong><span class="amount">RUB <?php echo ($totalPrice-($totalPrice/100*$_SESSION['discount'])); ?></span></strong>
                        </td>
                      </tr>
                      <tr class="shipping">
                        <th>Доставка</th>
                        <td>
                          <span><?php if ($_SESSION['dostavka']== 0) echo 'Бесплатная Доставка'; else echo 'RUB '.$_SESSION['dostavka']; ?></span>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th><strong>Полная Сумма</strong></th>
                        <td>
                          <strong><span class="amount">RUB <?php echo ($totalPrice-($totalPrice/100*$_SESSION['discount']))+$_SESSION['dostavka']; ?></span></strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div id="payment" class="ecommerce-checkout-payment">
                    <h2 class="uppercase">Метод оплаты</h2>
                    <ul class="payment_methods methods">

                      <li class="payment_method_bacs">
                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                        <label for="payment_method_bacs">
Прямой банковский перевод<!--Direct Bank Transfer--></label>
                        <div class="payment_box payment_method_bacs">
                          <p>Сделайте свой платеж непосредственно на наш банковский счет. Пожалуйста, используйте свой идентификатор заказа в качестве ссылки на оплату. Ваш заказ не будет отправлен до тех пор, пока средства не будут очищены на нашем счете.<!--Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.--></p>
                        </div>
                      </li>

                      <li class="payment_method_cheque">
                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                        <label for="payment_method_cheque">Оплата чеком<!--Cheque payment--></label>
                        <div class="payment_box payment_method_cheque">
                          <p>
Пожалуйста, отправьте свой чек на имя магазина, в магазине, в магазине, в магазине, в штате штата / в округе, в почтовом магазине.<!--Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.--></p>
                        </div>
                      </li>

                      <li class="payment_method_paypal">
                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                        <label for="payment_method_paypal">Paypal<!--Paypal--></label>
                        <img src="/template/img/shop/paypal.png" alt="">
                        <div class="payment_box payment_method_paypal">
                          <p>
Оплата через PayPal; вы можете оплатить с помощью кредитной карты, если у вас нет учетной записи PayPal.<!--Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.--></p>
                        </div>
                      </li>

                    </ul>
                    <div class="form-row place-order">
                      <input type="submit" class="btn btn-lg btn-color btn-button" id="place_order" id="submit" name="submit" value="Подтвердить заказ">
                    </div>
                  </div>
                </div>
              </div> <!-- end order review -->
            </form>

          </div> <!-- end ecommerce -->
        <?php endif; ?>
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end checkout -->
    
<?php include(ROOT.'/views/layouts/footer.php'); ?>