<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
    <div class="col-md-5 p-lg-5 mx-auto "> 

    <img src="./images/win.jpg" alt="">

      <h1 class="display-4 fw-normal">Win with my Company.</h1>
      <p class="lead fw-normal">Remaining to open registration.</p> 
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">Withdraw to win... .</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>

<div class="container"></div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Rule Number 1: .........</li>
  <li class="list-group-item">Rule Number 2: .........</li>
  <li class="list-group-item">Rule Number 3: .........</li>
  <li class="list-group-item">Rule Number 4: .........</li>
  <li class="list-group-item">Rule Number 5: .........</li>
</ul>

</div>
 </div>

 <div class="position-relative text-center  ">
    <div class="col-md-5 p-lg-5 mx-auto my-5"> 

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <h3>Please enter your Information:</h3>

  <div class="mb-3">
    <label for="firstName"  class="form-label">First Name</label>
    <input type="text" name="firstName" id="firstName" class="form-control"  value="<?php echo $firstName ?>" >
    <div  class="form-text error"> <?php echo $errors['firstNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input type="text" name="lastName" id="lastName" class="form-control"  value="<?php echo $lastName ?>" >
    <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" id="email"  class="form-control"  value="<?php echo $email ?>" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  
 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

 </div>

 <div class="d-grid gab-2 col-6 mx-auto my-5"> 
      <button id="winner" type="button" class="btn btn-primary"> Choose the Winner</button>     
 </div> 
  
<div id="cards" class="row mb-5 pb-5">
 
<?php foreach($users as $user): ?>

    <div class="col-sm-6">
      <div class="card my-2 bg-light">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']). ' ' .htmlspecialchars($user['lastName']); ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
        </div>
      </div>
    </div>

<?php endforeach; ?>
</div>

<?php include_once './parts/footer.php'; ?>
