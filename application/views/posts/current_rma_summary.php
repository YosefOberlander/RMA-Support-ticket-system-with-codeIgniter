<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-summary-content">
        <div class="rma-summary-content-p">
            <article id="rma-summary-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?php echo "Current RMA/Claim Summary" ?></h1>
                </header>
                <div class="rma-summary-content-container">
                    <?php foreach ($results as $val) { ?>
                    <table width="100%" class="rma-status-details" border="1">
                        <thead>
                            <tr class="rma-status-one">
                                <th class="status-one" colspan="3">Requested User</th>
                                <th class="status-two">Reference Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3"><?php echo $val['name']; ?></td>
                                <td><?php echo $val['reference_number']; ?></td>
                            </tr>
                            <tr>
                                <td style="color: #000">RMA Creation Date</td>
                                <td style="color: #000">RMA #</td>
                                <td style="color: #000;">Refund #</td>
                                <td style="color: #000">RMA Status</td>
                            </tr>
                            <tr>
                                <td><?php echo $val['rma_request_date']; ?></td>
                                <td>
                                    <?php if (empty($val['rma_number'])) {
                                        echo "-";
                                    } else {
                                        echo $val['rma_number'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php if (empty($val['refund_number'])) {
                                        echo "-";
                                    } else {
                                        echo $val['refund_number'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php if ($val['status'] == 0) {
                                      echo "Pending";
                                    } else if ($val['status'] == 1) {
                                        echo "Approved";
                                    } else if ($val['status'] == 2) {
                                        echo "No Approved";
                                    } else if ($val['status'] == 3) {
                                        echo "Processing Refund";
                                    } else if ($val['status'] == 4) {
                                        echo "Refund Completed";
                                    } else if ($val['status'] == 5) {
                                        echo "Completed/Closed";
                                    }
                                    ?>
                                </td>
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
                                <td><?php echo $val['sku']; ?></td>
                                <td><?php echo $val['product_name']; ?></td>
                                <td><?php echo $val['return_type']; ?></td>
                                <td><?php echo $val['quantity']; ?></td>
                                <td style="padding: 5px;">
                                    <?php if ($val['status'] == 0) {
                                      echo "No Actions Available";
                                    } else if ($val['status'] == 1) {
                                        echo '<div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle Techblue" type="button" data-toggle="dropdown">Download Label and Instructions
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="left: 25px;">
                                            <li><a href="#"></a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-save" style="margin-right: 5px;"></i> Download Shipping Label</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-envelope" style="margin-right: 5px;"></i> Email Shipping Label</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-file" style="margin-right: 5px;"></i> Download RMA Authorization</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-info-sign" style="margin-right: 5px;"></i> Download Instructions</a></li>
                                        </ul>
                                    </div>';
                                    } else if ($val['status'] == 2) {
                                        echo "No Actions Available";
                                    } else if ($val['status'] == 3) {
                                        echo "No Actions Available";
                                    } else if ($val['status'] == 4) {
                                        echo "No Actions Available";
                                    } else if ($val['status'] == 5) {
                                        echo "No Actions Available";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php } ?>
                    <div class="push-20-t">
                        <p class="very-rma-under-table-p">If your RMA is Pending no actions will be available</p>
                        <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold; display: block;" href="<?php echo base_url();?>check_status">Return to RMA Search</a>
                        <!-- <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold;" href="#">Return to Summary Result</a> -->
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