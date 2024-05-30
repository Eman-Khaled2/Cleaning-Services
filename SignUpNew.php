




<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="/Styles/NewSign.css" />
   <script>// Get the input field and button
       const nameInput = document.getElementById("name");
       const submitButton = document.getElementById("submit");

       // Define the regular expression for only letters
       const lettersOnlyRegex = /^[A-Za-z]+$/;

       // Add an event listener to the button to validate user input
       submitButton.addEventListener("click", function() {
           const name = nameInput.value;

           if (!lettersOnlyRegex.test(name)) {
               nameInput.style.display = "block";
           }
       });
   </script>


</head>
<body>
<section class="container">
    <h1><b>Registration Form</b></h1>

    <form action="" class="form" method="post">


        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text"  name="Name" id="name" placeholder="Enter full name"  required/>

            <p class="error" ></p>

        </div>



        <div class="column">

            <div class="input-box">
                <input type="text"  name="mail" placeholder="Enter email address" required />
                <p class="error" style="width: 185px"></p>

            </div>


            <div class="input-box">
                <input type="text" name="phone" placeholder="Enter Phone" required />
                <p class="error" style="width: 185px"></p>

            </div>



        </div>

        <div class="input-box">
            <input type="password" name="password"  placeholder="Enter Password" required />
            <p class="error"> </p>
            <p class="error"> </p>
        </div>

        <div class="input-box">
            <input type="password"  name="confirmPass" placeholder="Confirm Password" required />

        </div>
        <p class="error"></p>



        <div class="input-box address">
            <div class="column">
                <div class="select-box" >
                    <select  name="city" id="city" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                        <option hidden>City</option>
                        <option>Nablus</option>
                        <option>Hebron</option>
                        <option>Ramallah</option>
                        <option>Bethlehem</option>
                    </select>
                </div>
                <div class="select-box">
                    <select name="street"   id="genDropdown" >
                        <option hidden>Street</option>

                    </select>
                </div>
            </div>

        </div>
        <div style="margin-top: 10px ; margin-left: 45px">
            <input style="margin-left: 17px " type="radio" value="P" id="radioOne" name="account" required />
            <label  style="font-size: 20px" for="radioOne" class="radio" chec>Personal</label>
            <input style="margin-left: 45px "type="radio" value="C" id="radioTwo" name="account" required/>
            <label style="font-size: 20px "for="radioTwo" class="radio">Company</label>

        </div>



        <button  id="submit" name="submit">Submit</button>
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
</section>

</div>
<p class="paragraph" style="font-size: 25px ;font-family: Andalus ; padding: 20px">
    Do you want a house that radiates cleanliness, do you want to maintain your house before and after the winter season, are you an employee and do not have enough time to clean the house, the solution is Eva Company.<br><br>

    Eva Company is fully prepared for the maintenance and cleaning of companies, homes, private and public institutions, garden maintenance, high-quality services from A to Z.


</p>
</div>

</body>
</html>


