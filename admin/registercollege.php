<?php
include('includes/header.php');
?>
<style>

.section {
  background-image: linear-gradient(rgba(0,0,50,0.6),rgba(0,0,50,0.4)), url(assets/dist/img/ap.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  min-height: 100vh; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  margin: 50px auto;
  max-width: 600px;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 10px;
  text-align: center;
  box-shadow:0 2px 3px rgba(0,0,0,1);
}
.form-group {
  margin-bottom: 20px;
}
h5{
  text-decoration: underline;
  font-size: 26px;
  font-weight: bold;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 30px;
  border-radius: 3px;
  border: 1px solid #ccc;
  background-color: #E5E4E2;
}

.button1 {
  /* border-radius: 10px; */
  width: 40%;
  padding: 18px;
  background-color: #3457D5;
  color: white;
  border: none;
  border-radius: 33px;
  cursor: pointer;
  margin-top:20px;
}
.button1:hover {
  background-color: green;
}
</style>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                    <div class="card-header">
                        <h5>Sign Up </h5>
                    </div>
                        <form action="logincode.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="College Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="collegeid" class="form-control" placeholder="College Id">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <hr>
                            <div class="form-group">
                            <button type="submit" name="log_btn" class="btn btn-primary button1">Create an account</button>
                            <p>Already have an account? <a href="clogin.php">Log in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/script.php');
?>
