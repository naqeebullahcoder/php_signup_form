<!DOCTYPE html>
<html>
<head>
	    <title> Sign Up Form </title>
	    <link rel="stylesheet" a href="style.css">
</head>
<body>
      <div class="login">
          <div class="form">

            <form name="f1" action = "connection.php" onsubmit = "return validation()" method = "POST" class="login-form" >
              <span class="material-icons">Sign Up</span><br>
              <input type="text" id="firstname" name="firstname" placeholder="First Name"  required/>
              <input type="text" id="lastname" name="lastname" placeholder="Last Name"  required/>
              <input type="text" id="email" name="email" placeholder="Email"  required/>
              <input type="password" id="password" name="password" placeholder="password" required />
              <button type= "submit " name="submit">Submit</button>
            </form>  

        </div>
    </div> 
   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>