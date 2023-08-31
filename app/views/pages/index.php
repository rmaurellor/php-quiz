<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-l-3"></div>
    <div id="pages-index-box-quiz" class="col-l-6">
        <div class="row">
            <div class="col-l-3"></div>
            <div class="col-l-6" style="text-align:center;">encuestados</div>
            <div class="col-l-3"></div>
        </div>
        <div class="row">
            <div id="pages-index-box-admin" class="col-l-5" style="text-align:center;"><a class="nav-link" href="<?= URLROOT ?>/questions/create">Administrador</a></div>
            <div class="col-l-2"></div>
            <div id="pages-index-box-user" class="col-l-5" style="text-align:center;"><a class="nav-link" href="<?= URLROOT ?>/">Usuario</a></div>
        </div>
    </div>
    <div class="col-l-3"></div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>