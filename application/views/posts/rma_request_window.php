<?php defined('BASEPATH') OR exit('No direct access allowed'); ?>

<div id="pageContentContainer" class="a-container only-printable-section">
    <div class="do-not-ref-back hidden-print">
        <div class="bs-callout bs-callout-danger">
            <h4>Warning!</h4>
            <p>
                Please do not press the <strong>BACK</strong> button of you browser
            </p>
            <a type="button" class="btn btn-default" href="<?php echo base_url(); ?>check_status">Search to RMA Search</a>
        </div>
    </div>
    <div class="a-section page-break-avoid">
        <h3>Return Authorization Slip</h3>
        <div class="a-section">
            <span>
                Place this barcode and the item description inside your return package
            </span>
        </div>
        <hr class="a-divider-normal horizontal-cut-line">
        <div class="a-section a-text-center">
            <!-- dynamic-barcode-image -->
            <div class="">
                <img src='<?php echo $barcode; ?>'>
            </div>
            <img src="https://s19.postimg.org/xuo3x9ufn/Dvjrq_DPQRRMA.gif" />
        </div>
        <div class="a-section_no_Mb">
            <?php foreach ($results as $val) { ?>
            <table class="a-bordered a-horizontal-strips a-size-base orc-auto-width-and-side-margin">
                <tbody>
                    <tr>
                        <th>Item Description</th>
                        <th class="fixed-width">Quantity</th>
                    </tr>
                    <tr>
                        <td><?php echo $val['product_name']; ?></td>
                        <td class="fixed-width"><?php echo $val['quantity']; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $("body").addClass("rma-body");
</script>