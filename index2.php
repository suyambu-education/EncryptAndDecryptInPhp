<?php
if(isset($_POST['submitEnCry'])){
    $EnCryVal=$_POST['enCry'];
}
if(isset($_POST['submitdeCry'])){
    $DeCryVal=$_POST['deCry'];
}

?>
<!DOCTYPE>
<html>
<head>
<title>EnCry&&DeCry</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="col-lg-12"><div class="col-lg-6"><h4> Enter  The Message What  What You Want enCry : </h4></div><div>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="col-lg-12">
        <div class="col-lg-6">
        <textarea name="enCry" class="form-control" id="enCry" cols="30" rows="4"></textarea>
        </div>
        <div class="col-lg-2">
        <button name="submitEnCry"> EnCryPt  </button>
        </div>
        
       
        </div>
        
        </form>

        <div class="col-lg-12">
        <div class="col-lg-5" style=""> 
        <?php
        if(!empty($EnCryVal)) { ?>

       <p> <?php echo "Your Encrypted Value :".base64_encode($EnCryVal); ?></p>

       <?php }
         
        ?>
       </div>
        <div>

<br>
<br>
<br>

        <div class="col-lg-12"><h4> Enter  The Message What  What You Want to deCry : </h4><div>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="dec">
        <div class="col-lg-12">
        <div class="col-lg-7">
        <textarea name="deCry" class="form-control" id="enCry"  cols="30" rows="4" style="margin-left: -25px; width: 622px;"></textarea>
        </div>
        <div class="col-lg-2">
        <button name="submitdeCry"> DeCryPt  </button>
        </div>
        
       
        </div>
        
        </form>

        <div>
        <?php
        if(!empty($DeCryVal)) { ?>
            <p> <?php echo "Your Encrypted Value :".base64_decode($DeCryVal); ?></p>
       <?php }
        ?>

        </div>



</body>
</html>