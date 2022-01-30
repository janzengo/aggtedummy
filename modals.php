<!-- Modals -->

<!--login-modal start-->
<div class="modal fade bs-example-modal-md-1" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
      <h2 class="modal-title">LOGIN FORM</h2>
      <form class="login-form">
        <fieldset>
          <div class="form-group"> <i class="fa fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email" required data-error="Valid email is required.">
          </div>
          <div class="form-group"> <i class="fa fa-lock"></i>
            <input type="password" name="name" class="form-control" placeholder="Password" required data-error="Password is required.">
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox">
              <em>Remember Me</em> </label>
            <a class="forgetpassword" href="#"> <em>Forgot Password</em> <i class="fa fa-question-circle"></i> </a> </div>
          <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
        </fieldset>
      </form>
      <p>Not a Member?
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Create an Account</button>
      </p>
    </div>
  </div>
</div>
<!--login-modal end-->

    <!--quote-modal start-->
<div class="modal fade bs-example-modal-md-2 quote-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md-2" role="document">
    <div class="modal-content">
      <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
      <h2 class="modal-title">GET A FREE QUOTE</h2>

        <form class="login-form" method="post" action="tripetto" name="quote-form" role="form" enctype="multipart/form-data">
        <fieldset>
        <div id="tripetto"></div>
<script src="https://cdn.jsdelivr.net/npm/tripetto-runner-foundation"></script>
<script src="https://cdn.jsdelivr.net/npm/tripetto-runner-chat"></script>
<script src="https://cdn.jsdelivr.net/npm/tripetto-services"></script>
<script>
var tripetto = TripettoServices.init({ token: "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjoiSGtiK0hCTytIclB0NWZodncydS9oRnpjYXBOM3FHTVQrWkVOdllxK2x1TT0iLCJkZWZpbml0aW9uIjoibG9yajJyRmtBVTIrdU53L1NLSWdHQ3dsSE5xZGVwL3ZaVnA3TGR4K1U5ND0iLCJ0eXBlIjoiY29sbGVjdCJ9.FSr350asH65eGhqxVU-JmyCS3bu9vj3_ZCNoGW9UpGM" });

TripettoChat.run({
    element: document.getElementById("tripetto"),
    definition: tripetto.definition,
    styles: tripetto.styles,
    l10n: tripetto.l10n,
    locale: tripetto.locale,
    translations: tripetto.translations,
    attachments: tripetto.attachments,
    onSubmit: tripetto.onSubmit
});
</script> <br><br>
          <div class="form-group">
               <label><em>By accepting the estimate or quotation the customer is agreeing to the<a data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".priv">(Privacy Statement)</a> set out herein. </em></label> </div>

        </fieldset>
      </form>
    </div>
  </div>
</div>
<!--quote-modal end-->
<!--sample-modal start-->
  <div class="modal fade bs-example-modal-md-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md-3" role="document">
      <div class="modal-content">
        <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
        <h2 class="modal-title">GET YOUR FREE SAMPLE</h2>
                <img src="images/sampledouble.jpg" alt="sampleimage" class="sampleimage" align="right">
              <p class="sample-description">Sure a picture is worth a thousand words, but actually seeing and touching the product makes all the difference.<br><br>For just ₱200 flat-rate Delivery fee via shopee store, you can get a closer look of all our decking and cladding profile SAMPLES today – delivered straight to your door! The standard length of samples is 10cm.<br><br> Just follow the Shopee link below, and check out for COD payment.</p>
              <button class="tg-theme-btn tg-theme-btn-lg" type="submit" onclick="comfirmFunc();">Click here</button>
    </div>
  </div>
      </div>
  <!--sample-modal end-->
    <!--warranty-modal start-->
  <div class="modal fade bs-example-modal-md-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md-4" role="document">
      <div class="modal-content">
        <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
        <h2 class="modal-title">WARRANTY INFORMATION</h2>
                <div class="warranty-content">
                  <p><br><strong>AGGTEDeck Composite Cladding & Decking Limited Warranty Details</strong><br>
                      <!-- First Paragraph -->
                      Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) warrants to the original purchaser (“Purchaser”):<br>
                        •	a period of two (2) years (Local Warranty) for selected products for residential application from the date of original purchase; and<br>
                        •	one (1) year (Local Warranty) for selected products used for commercial application from the date of original purchase<br>
                      under normal use and service conditions. Provided further that the Decking/Cladding Materials are free from material defects in workmanship and that the materials does not <a target="_blank" href="about.php#advantage">split, splinter, rot or suffer structural damage from termites decay</a>. For reference regarding this warranty, kindly refer to the WPC Cladding/Decking Installation Manual. All warranties are subject to the exclusions, limitations and restrictions set forth below.
                    </p>
                        <!-- Second Paragraph -->
                    <p><strong>Obtaining Warranty Performance</strong><br>
                    In the event that the purchaser discovers a defect in the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products during the term of warranty, the purchaser must:<br>
                        •	notify  AGG Trading & Enterprise in email, at following <a target="_blank" href="contact.php">email address: sales@aggtedeck.com</a>. within thirty (30) days but not later than the end of the term upon the discovery of the alleged defect; and<br>
                        •	include in the notification the proof of purchase and a statement explaining the defect for our reference.<br>
                    Additional information may also be requested from you by the company or we may opt to do an actual visit in the location of installation for us to be able to do a more accurate assessment and investigation of the extent of the defect. Immediately after the said assessment and or validation/review of all the information at hand, Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) will determine the validity of the claim. If the purchaser’s claim is found to be valid by the company, Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) will, at its option, either replace the defective Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products or discuss with the purchaser for possible remedies for such defective Materials/Products. However, this warranty shall not cover, and Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) shall not be responsible for the costs and other expenses to be incurred relevant to the removal of the defective Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) products or the installation of the materials including but not limited to, labor and delivery.
                    </p>
                    <!-- Third Paragraph -->
                    <p><strong>Exclusions From Warranty Coverage</strong><br>
                    AGG Trading & Enterprise does not warrant against and is not responsible for, and no implied warranty shall be deemed to cover, any product failure, product malfunction, or damages attributable to: <br>
                        (1) improper installation of the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products and/or failure to abide by Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) installation guidelines, including but not limited to improper gapping; <br>
                        (2) use of the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products beyond normal use, or in an application not recommended by Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) guidelines and local building codes; <br>
                        (3) movement, distortion, collapse or settling of the ground or the supporting structure on which the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products are installed; <br>
                        (4) any act of God (such as flooding, hurricane, earthquake, lightning, etc.), environmental condition (such as air pollution, mould, mildew, etc.), or staining from foreign substances (such as dirt, grease, oil, etc.); <br>
                        (5) variations or changes in color of the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products;<br>
                        (6) normal weathering due to exposure to sunlight, weather and atmosphere which can cause colored surfaces to, among other things, flake, chalk, or accumulate dirt or stains;<br>
                        (7) ordinary wear and tear or <br>
                        (8) improper handling, storage, abuse or neglect of the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products by the purchaser, the transferee or third parties. The purchaser is solely responsible for determining the effectiveness, fitness, suitability and safety of the Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) Products in connection with their use in any particular application.<br>
                    </p>
                    <!-- Fourth Paragraph -->
                    <p><strong>Disclaimer Of Warranties</strong><br>
                    Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) makes no other warranties, guarantees or indemnities, whether expressed  or implied, arising by law, course of dealings, usage of trade, customer or otherwise, including but not limited to the implied warranty of merchantability and implied warranty of fitness for a particular purpose, and all such other warranties, guarantees and indemnities are hereby disclaimed, overridden and excluded from this transaction, except for the express written warranty contained herein. <br>
                    Limitation of remedies and exclusion of consequential and incidental damages:  The liabilities of <a target="_blank" href="https://www.aggtedeck.com/">Go Green Trading & Enterprise</a> (T/A AGGTEDeck Composite Cladding & Decking) are limited solely and exclusively to the obligations specifically undertaken herein, and under no circumstances will Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) be liable or obligated towards any incidental consequential, indirect, special, punitive or any other damages of any kind whatsoever (including, but not limited to, lost profits, lost sales, loss of goodwill, use of money, use of goods, stoppage of work, or impairment of assets), whether foreseeable or unforeseeable, arising out of the breach of failure of express or implied warranty, breach of contract, fraud, misrepresentation, negligence, strict liability in tort or otherwise, except and only to the extent this limitation is specifically precluded by applicable law of mandatory application. Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) liability with respect to defective products shall in no event exceed the replacement of such products of the purchase price, as described above.</p>
                </div>
              <button class="tg-theme-btn tg-theme-btn-lg" type="submit" href="#" data-dismiss="modal" aria-label="Close">Close</button>
    </div>
  </div>
      </div>
  <!--warranty-modal end-->
<!--terms and conditions-modal start-->
  <div class="modal fade bs-example-modal-md-terms termed" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md-terms" role="document">
      <div class="modal-content">
        <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
        <h2 class="modal-title">TERMS AND CONDITIONS</h2>
                <div class="privacy-content">
                    <!-- Start Intro -->
                  <p><br>There are terms and conditions that apply relevant to the use of the  AGGTE WPC Cladding & Decking website . This page will tell you how these conditions would be applicable. The conditions to be stipulated herein shall be in full effect upon the use of the website and once you open it, it means that you agree with all the terms and conditions given. If you disagree with any of the terms and conditions given, please refrain from using our website.</p><br>

                    <p><strong class="larger">Our Terminology</strong><br>

                    We will refer to ourselves as “AGGTE WPC Cladding & Decking”, “us”, or “we” throughout the website. On the other hand, when we say “you”, we are referring to the user or viewer of this site.<br><br>

                    The registered office for Aquaponics Go Green Trading & Enterprises (T/A AGGTEDeck Composite Cladding & Decking)  is based at Bagong Daan, Diversion Road, Brgy. Cawit, 4208 Taal, Batangas, Philippines. The DTI business registered company number is 1267182 with BIR COR number: 297-844-375-000.</p>

                    <p><strong>Use of our website is subject to these following terms of use:</strong><br>

                    All the information contained in this website is for your information and use only. It may be subject to change without notice. However, should there be any changes, we will surely notify you.<br>

                    Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timelines, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. As the viewer, you  acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any of  such inaccuracies or errors to the fullest extent permitted by law.<br>

                    The use of any information or materials contained in this website is solely at your own risk, and the company will not be liable for that. As such, it will be your responsibility to make sure that any products, services or information in this website would meet your specific needs.<br>

                    Furthermore, this website contained material which is owned or licensed to us. It includes, but is not limited to, the design, layout, look, appearance and graphics. Any reproduction is prohibited other than those that are in accordance with the copyright notice which are also contained under the terms and conditions.<br>

                    There are trademarks used in this website which are not a property of or is not licensed to the operator but the sources have been acknowledged herein.<br>

                    Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense. Also, Linking this website to another website or document without the consent of AGGTE WPC Cladding & Decking is highly prohibited.<br>

                    The use of the website and any dispute arising out of its use shall be subject to the Laws of the Philippines.<br>

                        Please also see our privacy policy for more information or email us at <a target="_blank" href="contact.php">info@aggtedeck.com</a> if you have any questions.<br></p>
                    <!-- End Intro -->

                    <!-- Terms and Conditions for Sale of Goods -->
                    <p><strong class="larger">Terms and Conditions for Sale of Goods</strong><br>
                    <!-- Definitions -->
                        <strong>Definitions</strong><br>
                    </p>
                        <ul>
                            <li>•	AGGTE WPC Cladding & Decking: We or us.</li>
                            <li>•	Customer: Any person who buys goods from us for purposes that is outside his trade, business or profession.</li>
                            <li>•	Goods: All goods and services sold by us to you including packaging, manuals and any other ancillary components.</li>
                            <li>•	Conditions: This means the terms and conditions of sale set out in this document and any special terms and conditions agreed in writing by us.</li><br>
                        </ul>
                    <!-- Definition End -->

                    <!-- The conditions that apply to your purchase of goods from us -->
                    <p><strong>The conditions that apply to your purchase of goods from us:</strong><br></p>
                        <ul>
                            <li>•	The conditions in Section A shall apply to your purchase of goods from us whether you are a consumer or not.</li>
                            <li>•	The conditions in Section B only apply to your purchase of goods from us if you are not a consumer.</li><br>
                        </ul>
                    <!-- The conditions that apply to your purchase of goods from us End -->

                    <!-- Section A -->
                    <p><strong class="larger">Section A</strong>
                    <p><strong>Making an agreement to purchase our goods</strong></p>
                    <ul>
                        <li>•	The specification, color, description and price of individual goods can change.</li>
                        <li>•	The invitation for you to order goods from us is not an offer by us to sell to your goods of the specification and description at the price indicated.</li>
                        <li>•	Your order is an offer to us to buy the goods of the specification and description at the price indicated.</li>
                        <li>•	Your orders to buy the goods that fit the specification and description at the price indicated will be accepted whenever possible. This case will be concluded with an agreement between you and us.</li>
                        <li>•	Whenever it is not possible to accept your order to buy the goods of the specification and description at the price indicated, we will advise you by e-mail. We will also send you an offer to sell the goods of the specification and description at the price stated in the e-mail and will state until when the offer is valid for your reference.</li>
                        <li>•	The offer may be accepted by email within the stipulated period. This will also be concluded with an agreement between you and us.</li><br>
                    </ul>
                    <p><strong>Delivery of the goods</strong></p>
                    <ul>
                        <li>•	The price of the goods does not include delivery by us to you unless otherwise stated.</li>
                        <li>•	On your behalf, we shall arrange for delivery of the goods to your address and the courier shall be our responsibility.</li>
                        <li>•	The costs of carriage and any insurance shall be reimbursed by you and shall be due on the date for payment of the price.</li>
                        <li>•	We shall advise you by e-mail of the date when the courier has collected your goods.</li>
                        <li>•	Please make sure that you carefully check and inspect all the items. Check also the packaging if it is a parcel delivery. On the driver’s sheet or hand terminal, mark all items that you found to be damaged. It is important to note that, we will not accept any claims for damaged items if you have signed during the delivery that all items are in good condition or if the items are unchecked. If there are any errors upon the delivery of your orders, contact our customer care team within 48 hours. Please be advised also that you may be asked to supply photographic evidence to support your claim.</li><br>
                    </ul>
                    <!-- Section A End -->

                    <!-- Section B -->
                    <p><strong class="larger">Section B</strong>
                    <p><strong>Payment and price</strong></p>
                    <p>As a company policy, the delivery of goods will only be done after payment. The due date of the payment is when the goods have been allocated for dispatch. It is important that you follow the prescribed period of payment. The price that will be due to you covers the actual cost of the product, the courier charge inclusive of the value-added tax if applicable.</p>
                    <p><strong>Delivery</strong></p>
                    <ul>
                        <li>•	To speed up the delivery, we will try to organize the collection of the goods by our courier within the time estimated.</li>
                        <li>•	If we are unable to do so, we reserve the right to deliver them within 30 days beginning with the day after the day of the agreement between us.</li>
                        <li>•	If we are unable to deliver the goods to you within 30 days beginning with the day after the day of the agreement, we shall take the following measures:
                        <ul>
                            <li>•	inform you by e-mail;</li>
                            <li>•	make a further offer to you by e-mail to sell you the goods of the specification and description at the delivery time stated in the e-mail and will state the period for which the offer or the price remains valid.</li><br>
                        </ul>
                        </li>
                    </ul>
                    <p><strong>Your right of cancellation</strong></p>
                    <p>The rights of cancellation set out below apply to any agreement between you and us.</p>
                    <ul>
                        <li>•	You have a right to cancel the agreement at any time before the expiry of a period of 7 working days beginning with the day after the day on which you receive the goods, unless the item is a specific size, made to measure or a none regular stock item, if refused 50% of the order or the return haulage fee will be deducted from the refund.</li>
                        <li>•	You may cancel by giving us notice in any of the following ways:
                        <ul>
                            <li>•	in writing which you leave at our registered company address;</li>
                            <li>•	in writing which you send by post to our registered company address;</li>
                            <li>•	By giving us a call.</li>
                        </ul>
                        </li>
                        <li>•	In the event that you will cancel the agreement, you must:
                        <ul>
                            <li>•	return the goods to us at the address given above. We strongly recommend all goods should be returned via recorded delivery.</li>
                            <li>•	return the goods completely. (please note the definition of goods given above).</li>
                            <li>•	be responsible for the cost of returning the goods to us at the address given above.</li>
                            <li>•	take reasonable care of the goods as your duty (including reusable packaging, manuals etc.) until they are returned to us.</li>
                            <li>•	see to it that all the goods are received by us and are not damaged in transit.</li><br>
                            Moreover, the company will:
                            <li>•	reimburse any sum paid by you or on your behalf under or in relation to the agreement (not including the costs of carriage).</li>
                            <li>•	charge you the direct costs to us of recovering any goods supplied by us if you fail to return the goods to us.</li>
                            <li>•	reserve the right to charge 4% of the total order value to compensate against Credit Card / Merchant Service charges absorbed by us when an order is cancelled.  We may also charge 20% of the order when goods have left for delivery and have to be returned to us, you have 1 hour from delivery confirmation to cancel before charges are applied. This may be done strictly by telephone only.</li><br>
                        </ul>
                        </li>
                    </ul>
                    <p><strong>Our right of cancellation</strong></p>
                    <p>If for circumstances beyond our reasonable control, we cancel the agreement at any time before the goods are delivered by giving notice to you, we shall not be liable for any other loss or damage whatever arising from such cancellation.</p>
                    <p><strong>Cancellation of orders in transit</strong></p>
                    <p>We reserve the right to charge 20% of the sales value or the return haulage fee charged of Php3,500 for Metro, Manila & South Luzon area and Php7,000 for outside of Metro Manila and South Luzon area (whichever is higher) when goods have left for delivery and have to be returned to us for a refund. The above will apply and an additional charge will be levied if orders have to be redelivered, charged at the same rate stated above.</p><br>
                    <p><strong>Statutory rights</strong></p>
                    <p>Your right of cancellation is in addition to your other statutory rights. However, the after sales service and guarantees and the voluntary code for the return of goods by you to us mentioned below do not affect your statutory rights.</p>
                    <p><strong>Retention of title by us</strong></p>
                    <ul>
                        <li>•	You will be held liable for the goods upon its receipt. Even if the delivery has been made properly, the goods will not be entrusted to you until:
                            <ul>
                                <li>•	you have paid the price plus value added tax (if applicable) in full; and</li>
                                <li>•	no other sums whatever shall be due from you to us.</li>
                                <li>•	in the event that payment is received by us in full prior to delivery then you will be entitled to receive the goods at the time of actual delivery.</li>
                            </ul>
                        </li>
                        <li>•	When the ownership of the goods has been passed to you, we have our full trust and confidence to you as bailee for us</li>
                        <li>•	You shall be responsible to store the goods (at no cost to us) separately from all other goods in your possession and mark it in such a way that they are clearly identified as our property.</li>
                        <li>•	Even if the goods (or any of them) remain as our property, you are allowed to sell them in the ordinary course of your business at full market value for our account. Any such sale or transaction shall be a sale or use of our property by you on your behalf and you shall deal as principal when making such sales or transactions.</li>
                        <li>•	Until property in the goods passes from us the entire proceeds of sale or otherwise of the goods shall be held in trust for us and shall not be mixed with other money or paid into any overdrawn bank account and shall be at all times identified as our money.</li>
                        <li>•	We shall be entitled to recover the price (plus value added tax) even if that property in any of the goods has not been passed from us.</li>
                        <li>•	Until such time as property in the goods passes from us, you shall upon request deliver up to us such of the goods as have not ceased to be in existence or resold. If you fail to do so we may enter upon any premises owned, occupied or controlled by you where the goods are situated and repossess the goods. On the making of such request your rights to sell, use or otherwise deal with the goods shall also be ceased.</li>
                        <li>•	You shall not pledge or in any way charge by way of security for any indebtedness any of the goods that are our property. Without prejudice to our other rights, if you do so all sums whatever owing by you to us shall forthwith become due and payable.</li>
                        <li>•	You shall insure and keep insured the goods to the full price against ‘all-risks’ to our reasonable satisfaction until the date that property in the goods passes from us, and shall whenever requested by us produce a copy of the policy of insurance. Without prejudice to our other rights, if you fail to do so all sums whatever owing by you to us shall forthwith become due and payable.</li>
                        <li>•	You shall promptly deliver the prescribed particulars of this contract to the Registrar in accordance with the law. Without prejudice to our other rights, if you fail to do so all sums whatever owing by you to us shall forthwith become due and payable.</li><br>
                    </ul>
                    <p><strong>Acceptance of the goods</strong></p>
                    <ul>
                        <li>•	After the courier have delivered the goods to the address you have specified, the company will consider that you have received the goods.</li>
                        <li>•	You are not entitled anymore to reject the goods that are not in accordance with our contract if you have already accepted the delivered goods.</li><br>
                    </ul>
                    <p><strong>Rejection of the goods</strong></p>
                    <p>In the event that you have done the correct procedure in rejecting the goods which are not in accordance to our contract, you shall still pay for the full cost of it unless you are able to return to us the goods before the price payment is due.</p><br>

                    <p><strong>Return of goods which are in accordance with the contract</strong></p>
                    <ul>
                        <li>•	The company shall not accept the return of goods which are delivered to you in accordance with our contract without our prior written approval and on terms toe be determined by our absolute discretion which is in accordance with our returns authorization procedure.</li>
                        <li>•	You shall be liable to shoulder a handling price of 25% of the invoice price once we agree for you to return the goods. Note that the goods must be returned by you to us carriage-paid and in the original packaging.</li>
                        <li>•	We have absolute discretion to return to you or store at your cost or do appropriate rights and remedies we deem necessary those goods that are returned without our prior approval even if the goods are in accordance with our agreement.</li><br>
                    </ul>

                    <p><strong>Variations in description or specification</strong></p>
                    <p>We may deliver goods of a different description or specification from that agreed which is agreed upon to comply with any applicable safety or statutory requirements. But we shall assure you that such will not materially affect the quality or fitness for purpose of the goods.</p><br>

                    <p><strong>Limitations upon our liability to you</strong></p>
                    <ul>
                        <li>•	In case of any breach of contract or negligence, except for death and or personal injury, our liability to you shall be limited only to the price of the goods together with any other expenses incurred by you in notifying us or returning the goods to us.</li><br>
                    </ul>
                    <p><strong>Choice of law and jurisdiction</strong></p>
                    <ul>
                        <li>•	This contract is subject to the law of the Philippines.</li>
                        <li>•	All disputes arising out of this agreement shall be subject to the exclusive jurisdiction of the courts of The Philippines.</li>
                        <li>•	If any part of these terms and conditions shall be found to be unlawful, it shall not affect the validity or enforceability of the remainder of the conditions.</li><br>
                    </ul>

                    <p><strong>Guarantees and after sales service</strong></p>
                    <ul>
                        <li>•	We guarantee that the goods that you will receive correspond to the description and specification that you have stated.</li>
                        <li>•	We guarantee that the goods are of very satisfactory quality once it is delivered to or collected by our courier.</li>
                        <li>•	We are using a voluntary code which can be found below in relation to the return of goods which have failed to meet your expectations.</li>
                        <li>•	We shall include the terms of any manufacturer’s guarantee and after sales service within the documents accompanying the goods.</li>
                        <li>•	We are willing to provide advice to you in accordance with the conditions below.</li>
                        <li>•	We are always prepared to offer advice about the goods and services we offer.</li><br>
                    </ul>
                    <p><strong>Voluntary code for the return of goods by you to us</strong></p>
                    <ul>
                        <li>•	This code is applicable only between us (the company) and you (the costumer).</li>
                        <li>•	This code is intended to promote good relations between you and us.</li>
                        <li>•	The code is entirely voluntary and does not affect your statutory rights.</li>
                        <li>•	We recognize the possibility that the goods that may be supplied by us to you may not meet your expectations. Based from our experience, this may be attributed to several reasons like the defect of goods at the point of collections.</li>
                        <li>•	We recognize that goods supplied by us to you may not meet your expectations. </li>
                        <li>•	We will endeavor to establish why the goods have failed to meet your expectations without an opportunity of inspecting and testing the goods so that necessary actions may be taken.</li>
                        <li>•	When the goods fail to meet your expectation, we highly encourage you to follow the procedure that we have previously stated with an explanation of the problem so that we will be able to handle your concern in the promptest and efficient manner.</li>
                        <li>•	In such cases where we agree that the problem has come out because of a defect in the goods at the point of collection, we shall:
                            <ul>
                                <li>•	refund the cost of the goods to you if returned within 7 days of the date of delivery to you provided that the goods are unused and packaged as originally supplied.</li>
                                <li>•	replace the goods or provide you with a credit for the cost of the goods.</li><br>
                            </ul>
                        </li>
                        <li>•	In any other case, we will try to offer assistance for us to resolve the problem you have stated, but this will also be subject to the following conditions:
                            <ul>
                                <li>•	Depending upon the age and condition of the goods, we may be prepared to accept the return of the goods subject to a restocking charge (to a maximum of 25%) and refund or credit the balance of the cost of the goods.</li>
                                <li>•	For every case where you will return to us the goods which were found to be defective at the point of collections, you shall allow us to inspect and test the goods first.</li>
                                <li>•	To such extent that it will be established that there was no defect in the goods at the point of the collection to you, we reserve the right to charge you Php3,500. The said amount shall be your share for the cost of transportation to be incurred for inspecting and testing the goods.</li>
                                <li>•	In case that the age or condition of the goods is the reason why we could not accept the return, we will redeliver the goods to you prior to dispatch. In such case, you agree to pay to us the reasonable cost of re-delivering the goods to you.</li><br>
                            </ul>
                        </li>
                    </ul>
      <!-- Section B End -->
                </div>
              <button class="tg-theme-btn tg-theme-btn-lg" type="submit" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-md-2">Get a Quote</button>
    </div>
  </div>
      </div>
<!--terms and conditions-modal end-->
<!--privacy-modal start-->
  <div class="modal fade bs-example-modal-md-terms priv" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md-terms" role="document">
      <div class="modal-content">
        <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
        <h2 class="modal-title">PRIVACY POLICY</h2>
                <div class="privacy-content">
                    <br><p><strong>We regard your privacy with high respect and we are highly committed to protect your personal data</strong></p>
                  <p>To assure that we treat the personal data that you will be providing us once you enter into a contract to us by purchasing a product or service (whether personal or in behalf of an organization or company), make payment or inquiry to us or visit our website at www.aggtedeck.com (regardless of where you visit form) with utmost confidentiality, this privacy notice is given. It will also tell you about your privacy rights and how you are protected by the law when you enter into a contract with us. Hence, in case of conflict, please take note that this privacy notice shall rule over any contract done with us relative to the purchase of a product or service.<br>

                    Whenever you provide us your personal data, it is a manifestation that you are giving your full consent or permission for us to use it in accordance with this privacy notice, including our use of cookies. In the event that you give us any personal information in behalf of someone else, it also means that you have sought the consent of the concerned individual for us to use his personal data in the manner described in the privacy notice. For your reference, please refer to the glossary provided to be able to understand better some terms used in this privacy notice.</p><br>

                    <p><strong class="larger">Important Information and Who We Are</strong></p>
                        <p><strong>Purpose of this privacy notice</strong>
                    The purpose of this privacy notice is to give you vital information regarding how AGGTE WPC Cladding & Decking collect and process the personal data that you will be providing our company once you enter into a contract with us. This contract shall cover any transaction done either personally or in behalf of a company by availing of our products and services, making inquiries and payments or visiting our websites regardless of where you visit from or otherwise.<br>

                    Please take note also that we do not collect data relating to children<br>

                    We also ask that you read this privacy notice carefully and thoroughly along with other privacy notice or fair processing notice that we will be giving you whenever we are collecting and processing personal data so that you will fully understand the reason why we are collecting such data and what will be its utility to us. Furthermore, please note that this privacy notice serves to supplement other notices and is not intended to nullify of override them.</p>

                    <p><strong>Controller</strong><br>

                    The terms “Company”, “we”, “us”, or “our” which are used in this privacy notice refers to AGGTE WPC Cladding & Decking. Thus, AGGTE WPC Cladding & Decking is considered as the controller and is directly responsible for the personal data that you will entrust to us.<br>

                    To be able to ensure efficient data management, we have appointed a Data Privacy Manager who is responsible for handling the questions regarding our privacy notice. Included also in his functions is to look into any requests to exercise customer’s legal rights. Should you have any concerns about personal data, you may contact our Data Privacy Manager on the details given below:</p>

                    <p><strong>Contact details</strong><br>

                    Aquaponics Go Green Trading & Enterprise (T/A AGGTEDeck Composite Cladding & Decking) – for the attention of the data privacy manager.<br>

                    <a target="_blank" href="contact.php">Bagong Daan, Diversion Road, Brgy. Cawit, 4208 Taal, Batangas, Philippines info@aggtedeck.com</a></p>

                    <p><strong>Changes to the privacy notice and your duty to inform us of changes</strong><br>
                    It is important that we hold updated information about you. Since this version was created last December 2021, we would greatly appreciate if you will keep us informed about the changes of your personal details to ensure a smooth transaction with us.</p>
                    <p><strong>Third-party links on our website</strong>
                    Technically, our website may include links to third-party websites, plug-ins and application. Once you click those links or enable those connections, it is very possible that those parties will collect or share your data. Thus, we would like to inform you that we have no control over these third-party websites and we are not responsible to any of their privacy policy, so please exercise extra care. We strongly advise that you read the privacy notice of every website that you visit when you leave our webpage.
                    </p><br>
                    <p><strong class="larger">The Data We Collect About You</strong><br>
                        Any information about that relates to how an individual may be identified is referred to as Personal Data. However, it does not include data where the identity has been removed (anonymous).</p>
                    <p>The personal data that we will collect, use, store and transfer about you have been grouped as follows:</p>
                    <ul>
                        <li>•	<strong>Identity Data</strong> which includes first name, maiden name, last name, username or similar identifier, marital status, title, date of birth, job title and gender.</li>
                        <li>•	<strong>Contact Data</strong> which covers billing address, delivery address, site address, branch address, email address and telephone numbers.</li>
                        <li>•	<strong>Financial Data</strong> which refers to bank account and payment card details.</li>
                        <li>•	<strong>Trasaction Data</strong> which are details about payments to and from you and other details of products and services you have purchased from us.</li>
                        <li>•	<strong>Technical Data</strong> which includes internet protocol (IP) address, your login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices you use to access our website and systems.</li>
                        <li>•	<strong>Profile Data</strong> which covers your username and password, purchases or orders made by you, information viewed or requested by you, sales enquiries from you, feedback by you and any account preferences.</li>
                        <li>•	<strong>Usage Data</strong> which contains information about how you use our website, products and services.</li>
                        <li>•	<strong>Marketing and Communications Data</strong> which shows your preferences in receiving marketing from us and our third parties and your communication preferences.</li><br>
                    </ul>
                    <p>Aggregated Data such as statistical or demographic data may also be collected for any relevant purposes. Aggregated Data may be obtained from your personal data but is not considered personal data in law as this data does not directly or indirectly reveal your identity. To illustrate, we may collect the total of your Usage Data to estimate or determine the percentage of users accessing a specific feature of our website. However, if we put together or connect Aggregated Data with your personal data in a way that it will directly or indirectly identify you, please be assured that we will treat the combined data at hand in accordance with this privacy notice.<br>
                        Please be advised also that we do not collect <strong>Special Categories of Personal Data</strong> about you such as details about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, health information and genetic and biometric data.
                    </p>
                    <p><strong>If you fail to provide personal data</strong><br>
                    The personal data that you will be providing us as a requirement before you enter into any contract with us is necessary to ensure efficient and smooth transaction with us. In case of failure to provide the necessary information, we have no other recourse but to cancel our transaction with you but we will notify you first in case this situation happens.
                    </p>
                    <p><strong class="larger">How is Your Personal Data Collected?</strong><br>
                    We will be using different methods to obtain data from you, these include:
                    </p>
                    <ul>
                        <li>•	<strong>Direct interactions.</strong> In this method, you will provide us your personal data, Contract and Financial Data by filling-up forms or by sending it by post or email. It may also be sent by phone. This covers that personal data that you provide when you:
                            <ul>
                                <li>•	sign into one of our site visitor books;</li>
                                <li>•	apply for our products or services;</li>
                                <li>•	create an account with us (on our website or otherwise);</li>
                                <li>•	subscribe to our service or publications;</li>
                                <li>•	request marketing to be sent to you;</li>
                                <li>•	enter a competition, promotion or survey; or</li>
                                <li>•	give us some feedback.</li>
                            </ul>
                        </li>
                        <li>•	<strong>Automated technologies or interactions.</strong> As you interact with our website, we can collect Technical Data about your equipment, browsing actions and patterns automatically. We can also obtain this personal data by using cookies, server logs and other similar technologies.</li>
                        <li>•	<strong>Third parties or publicly available sources.</strong> We   can also obtain personal data about you from reliable third parties and public sources. We can also record phone conversations we have with you.</li><br>
                    </ul>
                    <p><strong class="larger">How We Use Your Personal Data</strong><br>
                        We will use your personal data in the following conditions allowed by the law:
                    </p>
                    <ul>
                        <li>•	When we need to perform the contract we are about to enter into or have entered into with you.</li>
                        <li>•	When it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests.</li>
                        <li>•	When we need to comply with a legal or regulatory obligation.</li><br>
                    </ul>
                    <p>Generally, we do not rely on consent as a legal basis for processing your personal data. You have the right to withdraw consent to marketing at any time by contacting us.</p>
                    <p><strong>Marketing</strong><br>
                    We are working hard to give you choices regarding certain personal data uses, specifically regarding marketing and advertising. You have the right to withdraw your consent to marketing by unsubscribing to us (option at the bottom of applicable emails) or by contacting us directly.<br><br>
                        Promotional offers from us<br>
                        As part of our marketing strategy, we will use your identity, contract, technical Usage and Profile data once deemed necessary to serve your best interest. Through this, we may be able to obtain vital information that will help us in determining which products, services, offers or other information that we can possibly advise you to help you decide which product or service will best fit your need and preference.<br>
                        In addition to this, you will receive marketing communications once you request from us. You will also receive the same once you provide us with your details when you join a contest or register into a promotional offer. <br><br>
                        Opting out <br>
                        Should you prefer not to receive any marketing messages, you may follow the opt-out links on any marketing message sent to you or you may directly contact our store. <br><br>
                        Cookies<br>
                        We are using cookies to monitor how people use our website. This helps us to understand how our customers and potential customers use our it so we can obtain feedback on how to improve things like layout, function and design.<br>
                        To understand the term better, a cookie is defined as a piece of information stored on your computer’s hard drive that records how you have used a website. The next time you visit a website, cookies can tailor your options based on the information it has stored about your last visit. You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. If you disable or refuse cookies, please note that some parts of our website may become inaccessible or will not function properly.<br>
                        Further information can be found at <a target="_blank" href="https://www.privacy.gov.ph/npc-privacy-policy/#3">https://www.privacy.gov.ph/npc-privacy-policy/#3.</a><br><br>
                        Change of purpose<br>
                        The personal data that you provided us will only be used for the purpose why it was collected. However, if it will be necessary for us to use it for another reason, please be assured that it will definitely be relevant or compatible for the original purpose. If you have any clarifications about this, please feel free to contact us so that we will be able to provide a clear explanation. In the event that we will need to use your personal data for an unrelated purpose, we will notify you and we will explain the legal basis that will provide support to our action.<br>
                        Please note that we may process your personal data without your knowledge or consent, in compliance with the above rules, where this is required or permitted by law.
                    </p>
                    <p><strong>Revisions of this Privacy Statement</strong><br>
                        We will post changes on our homepage so that our users will always be informed of what information we need to collect, how we will use it and the circumstances that would merit its use, if any, should there be any changes in our Privacy Policy.
                    </p>

                </div>
              <button class="tg-theme-btn tg-theme-btn-lg" type="submit" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-md-2">Get a Quote</button>
    </div>
  </div>
</div>
<!--privacy-modal end-->

<!--subscription-modal start-->
<div class="modalS fade bs-example-modal-mds sub" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-image:url(images/subscribe.png)">
      <div class="top_linksSub"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
      <h2 class="modal-title">Join Our Newsletter</h2>
      <label style="margin: 22px 34px 0px 34px;color: #fff;">Please read on, stay posted, subscribe, and we welcome you to tell us what you think.</label>
      <form class="login-form" action="products/subIndex.php" method="POST">
        <fieldset>
        <div class="input-group">
	                <input type="email" name="userEmail" class="form-control" placeholder="Email" style="padding: 23px 12px !important;" required>
	                <span class="input-group-btn">
	                <input type="submit" name="submit" value="Subscribe" class="btn btn-info btn-flat" style="padding: 13px 12px !important;">
	                </span>
	            </div>
              <label style="margin: 22px 34px 0px 34px;color: #fff;font-weight: light !important;">We care about your privacy and won't spam.</label>
        </fieldset>
      </form>
      <p>
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary">No, Thank you!</button>
      </p>
    </div>
  </div>
</div>
<!--subscription-modal end-->
<!-- Modals End -->