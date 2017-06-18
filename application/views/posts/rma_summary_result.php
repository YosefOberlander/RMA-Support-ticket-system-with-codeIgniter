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
            </article>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
       $("body").addClass("rma-body");
    });
</script>
