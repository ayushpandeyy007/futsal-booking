<?php 
if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success" style="color:green;">
        <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
        ?>
    </div>
    
<?php } ?>

<?php if (isset($errors)){ 
    foreach ($errors as $error) {  ?>
    <div class="alert alert-danger" style="color:red;">
        <?php echo $error;  ?>
    </div>
<?php } } ?>