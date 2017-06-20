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
                                    echo  '<button class="btn btn-primary Techblue" type="button" data-toggle="modal" data-target="#confirm_rma_number">Label and Instruction</button>';
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

<!-- open authorization model -->
<div class="modal fade in" id="confirm_rma_number" tabindex="-1" role="dialog">
     <div class="modal-dialog modal-dialog-popout">
         <div class="modal-content">
             <div class="block block-themed block-transparent remove-margin-b">
                 <div class="block-header bg-techwise-dark">
                     <ul class="block-options">
                         <li>
                             <button class="no-opacity" data-dismiss="modal" type="button">
                                 <i class="si icon-close"></i>
                             </button>
                         </li>
                     </ul>
                    <h3 class="block-title">RMA Return Authorization</h3>
                 </div>
                 <div class="block-content">
                     <?= form_open('search/find_rma_authorization'); ?>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th style="color: #000;">Please enter your RMA number in order to print out your label and instructions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="form-row form-row-wide model-form-row" style="margin: 20px; line-height: 1;">
                                            <label style="margin-right: 4%;" class="rma-model-label" for="con_rma_number">RMA Number:</label>
                                            <input class="rma-model-input-text" name="con_rma_number" id="con_rma_number" style="width: 45%; margin-right: 10px;"/> <span style="color: #000;">(e.g. EMA-1234)</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-primary Techblue" type="button" data-dismiss="modal">Close</button>
                     <button class="btn btn-primary Techblue" type="submit">Search...</button>
                 </div>
             <?= form_close(); ?>
         </div>
     </div>
</div>

<script>
    $(document).ready(function () {
       $("body").addClass("rma-body");
    });
</script>