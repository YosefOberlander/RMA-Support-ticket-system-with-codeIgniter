<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-search-content">
        <div class="rma-search-content">
            <article id="rma-search-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?php echo $title ?></h1>
                </header>
                <!-- rmm search page title -->
                <div class="rma-search-content-c">
                    <h1 class="bblue-title">Returns And Claim Search</h1>
                    <p class="rma-content-p" style="margin-bottom: 5px !important;">Search below to view your status of your RMA, Claim or Refund details for returns and refund.</p>
                    <p class="rma-content-p">"Exact RMA Number or RMA Reference Number or Claim Number or RMA refund Number is required to perform a search.</p>
                    <div class="rma-search-form">
                        <div class="rma-search-form-error-container">

                        </div>
                        <?= form_open('search/execute_rma_search'); ?>
                        <table width="100%" class="rma-search-table claimtable">
                            <thead>
                                <tr>
                                    <th>Select A Search Type (Required)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 15%;" for="rma_number_search">RMA Number:</label>
                                            <input class="input-w-25 input-text" name="rma_number_search" id="rma_number_search" /> (e.g. RMA-1234 or RMA-123%)
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label class="right-align" for="rma_reference_number">RMA Reference Number:</label>
                                            <input class="input-w-25 input-text" name="rma_reference_number" id="rma_reference_number" /> (e.g. 66263442)
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 14.3%;" for="claim_number">Claim Number:</label>
                                            <input class="input-w-25 input-text" name="claim_number" id="claim_number" /> (e.g. 26450442)
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 9.4%;" for="rma_refund_number">RMA Refund Number:</label>
                                            <input class="input-w-25 input-text" name="rma_refund_number" id="rma_refund_number" /> (e.g. 15660331)
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide"></p>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- /. select a search type -->
                            <thead>
                                <tr>
                                   <th>Search Criteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 13.6%;" for="rma_containing_sku">Containing SKU:</label>
                                            <input class="input-w-25 input-text" name="rma_containing_sku" id="rma_containing_sku" />
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 17%" for="rma_exact_date">Exact Date:</label>
                                            <input class="input-w-25 input-text" name="rma_exact_date" id="rma_exact_date" /> (use format MM/DD/YYYY)
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide">
                                            <label style="margin-right: 16.4%" for="rma_date_range">Date Range:</label>
                                            <input class="input-text" name="rma_date_range_from" id="rma_date_range_from" style="width: 16.1%;"/> To
                                            <input class="input-text" name="rma_date_range_to" id="rma_date_range_to" style="width: 16.2%;" />
                                        </p>
                                    </td>
                                    <td>
                                        <p class="form-row form-row-wide" style="margin-left: 32.3%">
                                            <button class="btn btn-primary Techblue" type="button" onclose="window.history.back();">Cancel</button>
                                            <button class="btn btn-primary Techblue" type="reset">Reset</button>
                                            <button class="btn btn-primary Techblue" type="submit">Search</button>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
        $("form").addClass("rma-search-form");
    });
</script>
<script>
    $(document).ready(function () {
        var datepic = jQuery.noConflict();
        datepic(function () {
            datepic("#rma_exact_date").datepicker({datepicker:"m/d/yy"});
            datepic("#rma_date_range_from").datepicker({datepicker:"m/d/yy"});
            datepic("#rma_date_range_to").datepicker({datepicker:"m/d/yy"});
        });
    });
</script>