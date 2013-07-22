<?php
include('templates/header.html');
?>
        <form action="" method="POST">
          <div data-role="fieldcontain">
              <input name="" id="textinput1" placeholder="Username" value="" type="text">
          </div>
          <div data-role="fieldcontain">
              <input name="" id="textinput2" placeholder="Password" value="" type="password">
          </div>
          <input value="Login" type="submit" />
          <a data-role="button" href="#page1">
              Forgot Password
          </a>
          <div class='tc'><a href='mailto:support@rigseye.com'>support@rigseye.com</a></div>
        </form>
<?php
include('templates/footer.html');
?>