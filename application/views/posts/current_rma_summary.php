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
                            <tr class="rma-status-three">
                                <th class="status-one" rowspan="2">SKU</th>
                                <th class="status-one" rowspan="2">Product</th>
                                <th class="status-one" rowspan="2">Reason</th>
                                <th class="status-one" rowspan="3">Quantity</th>
                            </tr>
                            <tr class="rma-status-three">
                                <th class="status-one">Received</th>
                                <th class="status-one">Open</th>
                                <th class="status-one">RMA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VE278H</td>
                                <td>Asus VE278H 27" LED LCD Monitor</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
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