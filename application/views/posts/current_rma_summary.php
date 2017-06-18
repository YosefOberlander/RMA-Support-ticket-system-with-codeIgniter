<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-summary-content">
        <div class="rma-summary-content-p">
            <article id="rma-summary-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?php echo $title ?></h1>
                </header>
                <div class="rma-summary-content-container">
                    <table width="100%" class="rma-status-details" border="1">
                        <thead>
                            <tr class="rma-status-one">
                                <th class="status-one" colspan="2">Requested User</th>
                                <th class="status-two">Reference Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">Yosef Oberlander</td>
                                <td>60162426</td>
                            </tr>
                            <tr>
                                <td style="color: #000">RMA Creation Date</td>
                                <td style="color: #000">RMA #</td>
                                <td style="color: #000">RMA Status</td>
                            </tr>
                            <tr>
                                <td>6/18/2017</td>
                                <td>RMA Pending</td>
                                <td>Pending</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- rma customer info table -->
                    <br />
                    <table width="100%" class="rma-status-details" border="1">
                        <thead>
                            <tr class="rma-status-one">
                                <th class="status-one" rowspan="2">SKU</th>
                                <th class="status-one" rowspan="2">Product</th>
                                <th class="status-one" rowspan="2">Reason</th>
                                <th class="status-one" rowspan="2">Quantity</th>
                                <th class="status-one" rowspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VE278H</td>
                                <td>Asus VE278H 27" LED LCD Monitor</td>
                                <td>Sales Error</td>
                                <td>1</td>
                                <td style="padding: 5px;">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle Techblue" type="button" data-toggle="dropdown">Download Label and Instructions
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="left: 100px; right: 100px;">
                                            <li><a href="#"></a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-save" style="margin-right: 5px;"></i> Download Shipping Label</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-envelope" style="margin-right: 5px;"></i> Email Shipping Label</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-file" style="margin-right: 5px;"></i> Download RMA Authorization</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-info-sign" style="margin-right: 5px;"></i> Download Instructions</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="push-20-t">
                        <p class="very-rma-under-table-p">If your RMA is Pending no actions will be available</p>
                        <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold; display: block;" href="check_status">Return to RMA Search</a>
                        <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold;" href="#">Return to Summary Result</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
       $("body").addClass("rma-body");
    });
</script>