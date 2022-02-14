
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Regestration form</title>
    
    <link rel="stylesheet" href="librabry.css">
    <!-- jquer and css link -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- boostrapcdn link -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    
    
    <div class="container">
    <h1 style="text-align: center;">signup form</h1>
    <!-- <h1 class="text-center bg-dark text-white">signup form</h1> -->
    <div  id="success" class="success" style="text-align: center; color: white; font-weight: bold; background-color:green;"> </div>
    <div>
        
    </div>
   <?php 
    if(isset($_SESSION['status']))
    {
        ?> 
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="message">
  <strong>Hey!</strong> <?php echo $_SESSION['status'];?>

  <button type="button" class="btn-open" data-bs-dismiss="alert" aria-label="close"></button>
</div>
        <?php
        
        unset($_SESSION['status']);
    }
    ?>



    <form  id ="frm" name="reg"   method="post" enctype="multipart/form-data" style="background-color: pink;">
        <div class="row">
            <div class="col">
        <label class="form-label">first name</label>
        
        <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="enter first name">
        <p id="f" class="error"></p>
    </div>
        <br>
        <div class="col">
        <label class="form-label">last name</label>
        <input type="text" name="lastname" id="lastname"  class="form-control"  placeholder=" enter last name">
        <p id="l" class="error"></p>
    </div>
</div>

        
        <div >
        <label class="form-label">email</label><br>
        <input type="email" name="email" id="email" class="form-control"  placeholder=" enter email">
        <p id="e" class="error"></p>
    </div>
        
        <div class="row" >
            <div class="col">
        <label class="form-label">password</label><br>
        <input type="password" name="password" id="password" class="form-control"  placeholder="enter password">
        <p id="p" class="error"></p>
    </div>
        
        <div class="col">
        <label class="form-label">confirm password</label><br>
        <input type="password" name="conpass" id="conpass" class="form-control"  placeholder="enter password">
        <p id="c" class="error"></p>
    </div>
</div>
        <br>
        <div>
        <label class="form-label">address</label><br>
        <textarea id="address" name="address" class="form-control"  placeholder="enter the address"></textarea>
        <p id="a" class="error"></p>
    </div>
        <br>
        <div class="row">
            <div class="col">
        <label class="form-label">gender</label>
        
        <input type="radio" class="gender" id="gender1" name="gender" value="male">male
        <input type="radio" class="gender" id="gender2" name="gender" value="female">female
        <!-- <p id="g" class="error"></p> -->
        <label for="gender" class="error"></label>
    </div>

    <div class="col">
        <label class="form-label">city</label>
        <select id="city" name="city"   >
        <option value="select">select city</option>
        <option value ="surat" >surat</option>
        <option value="rajkot">rajkot</option>

    
    </select>
    <p id="ci" class="error"></p>
</div>
        
        <div class="col">
        <label class="form-label">hobbies</label>
        <input type="checkbox" name="hobbies[]" id="jk1" value="reading" class="jk" placeholder="enter the hobbies">reading
        
        <input type="checkbox" name="hobbies[]" id="jk2" value="walking" class="jk"  placeholder="enter the hobbies">walking
        
        <input type="checkbox" name="hobbies[]" id="jk3" value="learning"class="jk" placeholder="enter the hobbies">learning
        <!-- <p id="jk" class="error"></p> -->

        <label for="hobbies[]" class="error"></label>
    </div>

<div class="col">
    <input type="file" name="file" id="file" >
    <!-- <a href="prec.php" >abc</a> -->
    <img src="#" id="imgPreview" height=100px width=100px  >
    <p  id="fi" class="error"></p>
</div>
</div>
<br>
<div >
    <input type="checkbox" name="checkbox" class="check"id="checkbox">email me
    <br>
</div>
<div class="button">
<button  style="margin-left: 600px;"type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">submit</button>



 </div>
</div>

    </form>
    
<p id="zz" class="error"></p>
    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- ajax link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="js/valid_library.js">
 
</script>

<!-- valide library link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>


</body>

</html>






