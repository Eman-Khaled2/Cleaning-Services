

<?php
/*

if(isset($_POST) &!empty($_POST) ){
    if (isset($_POST['submit']) && empty($_POST['Name'])) {
        $NameError = "Please enter your name.";
    }
    if (isset($_POST['submit']) && empty($_POST['mail'])) {
        $EmailError = "Please enter your email.";
    }
    if (isset($_POST['submit']) && empty($_POST['city'])) {
        $CityError = "Please enter your city.";
    }
    if (isset($_POST['submit']) && empty($_POST['street'])) {
        $StreetError = "Please enter your street.";
    }
    if (isset($_POST['submit']) && empty($_POST['password'])) {
        $PassError = "Please enter your password.";
    }
    if (isset($_POST['submit']) && empty($_POST['confirmPass'])) {
        $ConfPassError = "Please confirm your password.";
    }
    if (isset($_POST['submit']) && empty($_POST['account'])) {
        $AccountError = " choose personal or company.";
    }


}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/Styles/froLogIn.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="inside-body">


<div class="container" >
  <div class="wrapper" style="margin-top: -130px ; height: 830px ;">
    <div style="font-size: 46px" class="title"><span><br><br>SignUp Form</span></div>

    <form   action="" method="post">
    <div class="row">

        <i class="fas fa-user"></i>
        <input type="text"  name="Name" " placeholder="<?php if(!empty($NameError)) echo htmlspecialchars($NameError); else echo 'Name'; ?>"/>


      </div>

      <div class="row">
        <i class="fas fa-user"></i>
        <input type="email" placeholder="Email"  name="mail " placeholder="<?php if(!empty($EmailError)) echo htmlspecialchars($EmailError); else echo 'Email'; ?>""/>

      </div>
      <div class="row">
      <i class="fa fa-home fa-fw" ></i>
        <select name="city"   style="width: 88% ; height: 100% ; margin-left: 45px" id="city" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);
 " placeholder="<?php if(!empty($CityError)) echo htmlspecialchars($CityError); else echo 'City'; ?>"" >
          <option >  </option>
          <option >Nablus</option>
          <option >Hebron</option>
          <option >Ramallah</option>
          <option >Bethlehem</option>
        </select>
      </div>


      <div class="row">
        <i class="fa fa-home fa-fw" ></i>
        <select name="street"   style="width: 88% ; height: 100% ; margin-left: 45px" id="genDropdown" " placeholder="<?php if(!empty($StreetError)) echo htmlspecialchars($StreetError); else echo 'Street'; ?>" >
          <option >  </option>

        </select>


      </div>



      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password"  name="password" " placeholder="<?php if(!empty($PassError)) echo htmlspecialchars($PassError); else echo 'Password'; ?>"/>


      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Confirm Password" name="confirmPass" " placeholder="<?php if(!empty($ConfPassError)) echo htmlspecialchars($ConfPassError); else echo 'Confirm password'; ?>" />

      </div>
      <div class="pass">

        <div class="some-class"  >
          <input style="margin-left: 17px " type="radio" value="P" id="radioOne" name="account" />
          <label  style="font-size: 20px" for="radioOne" class="radio" chec>Personal</label>
          <input style="margin-left: 45px "type="radio" value="C" id="radioTwo" name="account" />
          <label style="font-size: 20px "for="radioTwo" class="radio">Company</label>
        </div><br>

        <?php
if(isset($AccountError)&!empty($AccountError)){
    echo $AccountError;}
?>


      </div>
      <div class="row button">
        <input type="submit" value="SignUp" name="submit">
      </div>
      <div class="signup-link"> <a href="/Frame/LogInUser.html" >return to logIn</a></div>


      <script>
        function doHTML(list){
          let string ="";
          let index = 0;
          list.forEach(element => {
            string += `<option>${element}</option>`;

          });
          return string;
        }
        function dynamicdropdown(city){
          let streetN = ["Rafidya", "Ma'amoon","Makhfiyya" , "Till"];
          let streetH = ["44_Street", "Nablus"];
          let streetB = ["beethlehem", "16_Street"];
          let streetR = ["manara", "15_Street"];
          let genDropdown = document.getElementById("genDropdown");
          if(city=="Nablus"){
            genDropdown.innerHTML = doHTML(streetN);
          }
          if(city=="Hebron"){
            genDropdown.innerHTML = doHTML(streetH);
          }
          if(city=="Ramallah"){
            genDropdown.innerHTML = doHTML(streetR);
          }
          if(city=="Bethlehem"){
            genDropdown.innerHTML = doHTML(streetB);
          }

        }
      </script>


    </form>
  </div>
</div>
  <p class="paragraph" style="font-size: 25px ;font-family: Andalus ; padding: 20px">
    Do you want a house that radiates cleanliness, do you want to maintain your house before and after the winter season, are you an employee and do not have enough time to clean the house, the solution is Eva Company.<br><br>

    Eva Company is fully prepared for the maintenance and cleaning of companies, homes, private and public institutions, garden maintenance, high-quality services from A to Z.


  </p>
</div>

</body>
</html>


?>*/