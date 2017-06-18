<?php defined('BASEPATH') Or exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-summary-content">
        <div class="rma-summary-content-p">
            <article id="rma-rma-summary-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?php echo $title ?></h1>
                </header>
                <div class="rma-summary-content-container">
                    <form>
                        <table width="100%" class="rma-summary-head rma-summary-table" cellspacing="3" border="1">
                            <thead>
                                <tr>
                                    <th colspan="6" class="rma-summerry">Current RMA/Claim Summary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" style="padding: 10px 5px; font-weight: bold;">Total: 1</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="th-background"></th>
                                    <th class="th-background">RMA #</th>
                                    <th class="th-background">Refund #</th>
                                    <th class="th-background">Reason</th>
                                    <th class="th-background">RMA Creation Date</th>
                                    <th class="th-background">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a style="color: #1A1BCF;" href="#">RMA-595593</a>
                                    </td>
                                    <td>-</td>
                                    <td>No Longer Need or Wanted - Opened</td>
                                    <td>6/18/2017</td>
                                    <td>Accepted</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="push-30-t">
                        <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold; display: block;" href="check_status">Return to RMA Search</a>
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
