<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert content later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-main-content">
        <div class="rma-content-area">
            <article id="rma-request-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title"><?= $title ?></h1>
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
