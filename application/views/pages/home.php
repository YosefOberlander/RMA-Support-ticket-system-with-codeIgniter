<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- adding header later -->
</div>
<div class="rma-content rma-center pads-30-t-b">
    <div class="rma-page-title-container">
        <h1 class="rma-page-title">Return RMA</h1>
    </div>
    <p class="main-rma-page center">
        <a href="verify-compliance" class="IconLink push-60-t">
            <img src="<?= base_url('assets/icons/images/rmaIcon_1.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_1_hover.png') ?>" class="IconHover" />
            <span class="title1">Verify Compliance</span>
            <span class="title2">Check return requirements before submitting your RMA request</span>
        </a>
        <a href="request-rma" class="IconLink push-60-t">
            <img src="<?= base_url('assets/icons/images/rmaIcon_2.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_2_hover.png') ?>" class="IconHover" />
            <span class="title1">Request RMA</span>
            <span class="title2">To return an item, request an RMA by completing out online form</span>
        </a>
        <a href="check-status" class="IconLink push-60-t">
            <img src="<?= base_url('assets/icons/images/rmaIcon_3.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_3_hover.png') ?>" class="IconHover" />
            <span class="title1">Check Status</span>
            <span class="title2">View the status of previously submitted returns or refunds</span>
        </a>
    </p>
    <p class="main-rma-page center">
        <a href="view-history" class="IconLink">
            <img src="<?= base_url('assets/icons/images/rmaIcon_4.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_4_hover.png') ?>" class="IconHover" />
            <span class="title1">View History</span>
            <span class="title2">View invoice and refund history by SKU</span>
        </a>
        <a href="request-claim" class="IconLink">
            <img src="<?= base_url('assets/icons/images/rmaIcon_5.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_5_hover.png') ?>" class="IconHover" />
            <span class="title1">Request Claim</span>
            <span class="title2">For claim, shortages, lost shipments, pricing discrepancies, etc...</span>
        </a>
        <a href="return-information" class="IconLink">
            <img src="<?= base_url('assets/icons/images/rmaIcon_6.png') ?>" class="IconReg" />
            <img src="<?= base_url('assets/icons/images/rmaIcon_6_hover.png') ?>" class="IconHover" />
            <span class="title1">Return Information</span>
            <span class="title2">Looking for more information?</span>
        </a>
    </p>
</div>
<script>
    $(document).ready(function () {
        $("body").addClass('rma-body');
    });
</script>