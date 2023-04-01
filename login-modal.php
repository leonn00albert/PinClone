

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="login-container">
      <h2>Welcome to PinClone</h2>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Log in</button>
    <p>OR</p>
    <button class="github-button" type="submit"> <i class="fa fa-github" aria-hidden="true"></i> Continue with Github </button>
  </div>
<?php include("github-login.php");?>
  </div>

</div>