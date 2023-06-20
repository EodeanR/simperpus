<?php include_once(dirname(__FILE__) . '/header.php'); ?>

<div class="container-fluid px-0 home">
    <div id="sidebar" class="sidebar">
        <?php include_once(dirname(__FILE__) . '/sidebar.php'); ?>
    </div>
    <div id="content" class="content">
        <?= $this->renderSection('content') ?>
    </div>
</div>

<?php include_once(dirname(__FILE__) . '/footer.php'); ?>