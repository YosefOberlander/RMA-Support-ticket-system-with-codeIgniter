<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert content later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-main-container">
        <article id="rma-success-container">
            <header class="rma-page-title-container">
                <h1 class="rma-page-title"><?= $title ?></h1>
            </header>
            <!-- rma page header -->
            <div class="rma-content-content">
                <h1 class="bblue-title">Verify RMA/Claim Request Information</h1>
            </div>
            <br />
            <table width="100%" class="rma_success_table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Reference Number</th>
                        <th>Request Date</th>
                        <th>Request Product Name</th>
                        <th>Status</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>62463002</td>
                        <td>6/15/2017</td>
                        <td>Asus VE278H 27" LED Monitor</td>
                        <td>Pending</td>
                        <td>Damaged Product</td>
                    </tr>
                </tbody>
            </table>
            <p class="push-20-t very-rma-under-table-p">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
            </p>
        </article>
    </div>
</div>

<script>
    $("body").addClass("rma-body");
</script>