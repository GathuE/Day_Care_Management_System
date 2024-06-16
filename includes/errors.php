<div class="error_box">
    <!-- success alert -->
    <?php if (isset($_REQUEST['s'])) {?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $_REQUEST['s']; ?>
        </div>
    <?php } ?>
    <!-- success alert -->

    <!-- warning alert -->
    <?php if (isset($_REQUEST['w'])) {?>
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $_REQUEST['w']; ?>
        </div>
    <?php } ?>
    <!-- warning alert -->

    <!-- danger alert -->
    <?php if (isset($_REQUEST['e'])) {?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $_REQUEST['e']; ?> 
        </div>
    <?php } ?>
    <!-- danger alert -->
</div>