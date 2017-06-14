<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert content later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-main-content">
        <div class="rma-content-area">
            <article id="rma-request-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?= $title ?></h1>
                </header>
                <!-- rma page header -->
                <div class="rma-content-content">
                    <h1 class="bblue-title">RMA Request</h1>
                    <p class="rma-content-p">
                        You will be notified if your RMA request requires an TechWise Direct representative to contact you.
                        if you require your return to be placed on your credit card, after creating RMA, please contact
                        Customer Service at <a href="mailto:customer.service@techwisedirect.com">customer.service@techwisedirect.com</a>
                        to add credit card details to your RMA.
                    </p>
                    <div class="rma-request_form">
                        <div class="rma-form-error-container">
                            <?php echo validation_errors(); ?>
                        </div>
                        <?= form_open('posts/create', 'class="rma-form-form"'); ?>
                        <div class="rma-form-header-section">
                            <label>Contact Information</label>
                        </div>
                        <div class="rma-request-form-box">
                            <div class="row">
                                <div class="row_left">
                                    <label for="customer_reference_number">Your Reference Number:</label>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" readonly name="customer_reference_number" id="customer_reference_number" value="<?php echo mt_rand(60000000,69999999); ?>"/>
                                </div> <!-- /. reference number -->
                                <div class="row_left">
                                    <label for="customer_name">Name:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_name" id="customer_name" />
                                </div> <!-- /. customer name -->
                                <div class="row_left">
                                    <label for="customer_email">Email:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_email" id="customer_email" />
                                </div> <!-- /. customer email -->
                                <div class="row_left">
                                    <label for="customer_phone">Phone:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_phone" id="customer_phone" /> (e.g. XXX-XXXX-XXXX)
                                </div> <!-- /. customer phone -->
                                <div class="row_left">
                                    <label for="customer_extension">Extension:</label>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_extension" id="customer_extension" />
                                </div> <!-- /. customer extension -->
                                <div class="row_left">
                                    <label for="customer_fax">Fax:</label>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_fax" id="customer_fax" />
                                </div> <!-- /. customer fax -->
                                <div class="row_left">
                                    <label for="customer_company">Company:</label>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_company" id="customer_company" />
                                </div> <!-- /. customer company -->
                                <div class="row_left">
                                    <label for="customer_order_number">Order Number:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_order_number" id="customer_order_number" />
                                </div> <!-- /. customer order number -->
                                <div class="row_left">
                                    <label for="customer_address_one">Address 1:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_address_one" id="customer_address_one" />
                                </div> <!-- /. customer address 1 -->
                                <div class="row_left">
                                    <label for="customer_address_two">Address 2:</label>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_address_two" id="customer_address_two" />
                                </div> <!-- /. customer address 2 -->
                                <div class="row_left">
                                    <label for="customer_city">City:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_city" id="customer_city" />
                                </div> <!-- /. customer city -->
                                <div class="row_left">
                                    <label for="customer_state">State:</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <select class="rma-select-style" name="customer_state" id="customer_state">
                                        <option value="">Select State...</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div> <!-- /. customer_state -->
                                <div class="row_left">
                                    <label for="customer_zip_code">Zip Code</label>
                                    <span class="required">*</span>
                                </div>
                                <div class="row_right">
                                    <input class="input-w-50" type="text" name="customer_zip_code" id="customer_zip_code" />
                                </div> <!-- /. customer zip code -->
                                <div id="initial_sku">
                                    <p class="rma_first_sku rma-content-p">SKU</p>
                                    <div class="row_left">
                                        <label for="customer_return_type">Type:</label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="row_right">
                                        <select class="rma-select-style input-w-50" name="customer_return_type" id="customer_return_type">
                                            <option value="">Select Return Type...</option>
                                            <option value="stock_balance_factory_sealed">Stock Balance - Factory Sealed</option>
                                            <option value="defective_product_with_original_packaging">Defective Product With Original Packaging</option>
                                            <option value="damaged_product">Damaged Product</option>
                                            <option value="techwise_sales_error_unopened">TechWise Sales Error - Unopened</option>
                                            <option value="techwise_sales_error_opened">TechWise Sales Error</option>
                                            <option value="open_box_return">Open Box Return</option>
                                            <option value="whse_shipped_wrong_item_unopened">Whse Shipped Wrong Item - Unopened</option>
                                            <option value="whse_shipped_wrong_item_opened">Whse Shipped Wrong Item - Opened</option>
                                            <option value="product_incomplete">Product Incomplete</option>
                                            <option value="no_longer_needed_unopened">No Longer Needed or Wanted - Unopened</option>
                                            <option value="no_longer_needed_opened">No Longer Needed or Wanted - Opened</option>
                                        </select>
                                        <select class="rma-select-style input-w-50" name="customer_hardware_problem" id="customer_hardware_problem">
                                            <option value="">Select Hardware Problem...</option>
                                            <option value="dead_on_arrival">Dead On Arrival</option>
                                            <option value="grinding_noise">Grinding Noise</option>
                                            <option value="loses_print_job">Loses Print Job</option>
                                            <option value="no_line_feed_paper_jam">No Line Feed/Paper Jam</option>
                                            <option value="poor_print_quality">Poor Print Quality</option>
                                            <option value="satisfaction_guaranteed_return">Satisfaction-Guaranteed Return</option>
                                            <option value="stock_balance">Stock Balance</option>
                                            <option value="whining_noise">Whining Noise</option>
                                            <option value="wont_write">Won't Write</option>
                                        </select>
                                    </div> <!-- /. customer return type & hardware problem-->
                                    <div class="row_left">
                                        <label for="customer_sku">SKU:</label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="row_right">
                                        <input class="input-w-50" type="text" name="customer_sku" id="customer_sku" />
                                    </div> <!-- /. customer sku -->
                                    <div class="row_left">
                                        <label for="customer_quantity">Quantity:</label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="row_right">
                                        <input class="input-w-50" type="text" name="customer_quantity" id="customer_quantity" />
                                    </div> <!-- /. customer quantity -->
                                    <div class="row_left">
                                        <label></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="row_right" style="margin-bottom: 10px;">
                                        <label class="input-w-50">If you are returning damaged or sales error product, <br />
                                            you must enter am invoice number below.</label>
                                    </div> <!-- /. customer notes text -->
                                    <div class="row_left">
                                        <label></label>
                                    </div>
                                    <div class="row_right" style="margin-left: 34%;">
                                        <input type="checkbox" id="append_invoice_number" />
                                        <label style="margin-left: 5px; margin-right: 15px;" for="invoice_number">Invoice Number</label>
                                        <input type="checkbox" id="append_po_number" />
                                        <label style="margin-left: 5px;" for="append_po_number">P.O. Number</label>
                                    </div> <!-- /. checkbox -->
                                </div>
                                <div class="row_right" id="append-in-po" style="margin-left: 34%; margin-top: 10px;">
                                    <!-- dynamic content -->
                                </div> <!-- appended container -->
                                <div class="row_left">
                                    <label for="customer_hardware_serial_numbers">Hardware Serial Number(s):</label>
                                </div>
                                <div class="row_right" style="margin-bottom: 10px;">
                                    <textarea class="rma-textarea-style no-resize" onkeyup="nospaces(this)" name="customer_hardware_serial_numbers" id="customer_hardware_serial_numbers"></textarea>
                                    <label style="display: inline-block;">separate serial numbers with commas, no spaces</label>
                                </div> <!-- customer hardware serial numbers -->
                                <div class="row_left">
                                    <label for="customer_comments">Comments:</label>
                                </div>
                                <div class="row_right">
                                    <textarea class="rma-textarea-style no-resize" name="customer_comments" id="customer_comments"></textarea>
                                </div> <!-- /. customer comments -->
                                <!-- footer row -->
                                <div class="row_left" style="margin-top: 15px;">
                                    * Required field
                                </div>
                                <div class="row_right" style="margin-top: 15px;">
                                    <button type="button" class="btn btn-primary Techblue" onclick="window.history.back();">Cancel</button>
                                    <button type="reset" class="btn btn-primary Techblue">Reset</button>
                                    <button type="submit" class="btn btn-primary Techblue" name="submitRmaRequestForm" id="submitRmaRequestForm">Request RMA</button>
                                </div>
                                <!-- /. footer row -->
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("body").addClass("rma-body");
        /*$("form").addClass("rma-form-form");*/

        var invoiceNum = $("#append_invoice_number");
        var poNum = $("#append_po_number");
        var appendContainer = $("#append-in-po");
        var appendedInvoiceNumberInput = $('<input class="input-w-50" type="text" name="invoice_number_input" id="invoice_number_input" />');
        var appendedPoNumberInput = $('<input class="input-w-50" type="text" name="po_number_input" id="po_number_input" /> ');

        $(invoiceNum).on('click', function () {
           if(invoiceNum.is(':checked')) {
               $(appendContainer).append(appendedInvoiceNumberInput);
           } else {
               $(invoiceNum).removeAttr(':checked');
               $(appendedInvoiceNumberInput).remove();
           }
        });

        $(poNum).on('click', function () {
            if(poNum.is(':checked')) {
                $(appendContainer).append(appendedPoNumberInput);
            } else {
                $(poNum).removeAttr(':checked');
                $(appendedPoNumberInput).remove();
            }
        });
    });
</script>
