<?php
include('configuration.php');
?>

<html lang="en">
<head>
    
    <title>HTML FORMS</title>
    <script>
function validateForm() {
var name = document.forms["FORM"]["username"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
 var email = document.forms["RegForm"]["email"].value;
 if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@")<=0)                
    { 
        window.alert("@ invalid position"); 
        email.focus(); 
        return false; 
    } 
   
    if ((email.value.charAt(email.value.length-4) !='.')&&(email.value.charAt(email.value.length-3)!='.'))                 
    { 
        window.alert(". invalid position"); 
        email.focus(); 
        return false; 
    } 
var contact = document.forms["FORM"]["contact"].value;
  if (contact.length!=10) {
    alert("length must be 10");
    return false;
  }
  
}
</script>
 
</head>
<body>
    <form method="POST" name="FORM" action="addQ2.php" onsubmit="return validateForm()" >
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required> <br><br>
    
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required> <br><br>
   Contact* <input type="text" name="contact" placeholder="+91 0000000000" required> <br><br>
    Gender <br> Male <input type="radio" name="gender" value="Male" > <br>
     Female <input type="radio" name="gender" value="Female" > <br>
     Other <input type="radio" name="gender" value="Other" > <br><br>
     City <select name="city" required>
     <option>Select City</option>
    <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Nainital">Nainital</option>
        <option value="Chennai">Chennai</option>
        <option value="Pune">Pune</option>
        <option value="Banglore">Banglore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
     </select> <br> <br>
     <input type="Submit" value="Cilck Here to Submit Your Data" name="submit">
    </form>
</body>
</html>