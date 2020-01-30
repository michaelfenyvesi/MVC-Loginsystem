<?php   require APPROOT . '/views/inc/header.php';?>
<div id="container">
    <div id="box">
        <h1 class="ueberschrift"><?php echo $data['title']; ?></h1>
        <p id="p">  <?php echo $data['description']; ?> <a class="link" href="<?php echo URLROOT; ?>/users/login">login</a></p>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>