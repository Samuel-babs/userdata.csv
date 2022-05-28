<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
</head>
<body>
   <form action="user_data.php" method="POST">

       <label for="first name">
          First Name: <input type="text" name="first name"></input>
        </label> &nbsp; &nbsp; &nbsp; &nbsp;
       
        <label for="Last name">
          Last Name: <input type="text" name="last name"></input>
        </label>
        &nbsp; <br>
        
        <label for="email">
          Email: &nbsp; &nbsp; &nbsp; &nbsp; <input type="email" name="email"></input><br>
          &nbsp;
         
        <label for="D.O.B">
          D.O.B &nbsp; &nbsp; &nbsp; <input type="text" name="D.O.B"></input>
        </label>
            
        <label for="country">
           &nbsp; &nbsp; 
           &nbsp;&nbsp;
        
           Country: &nbsp; &nbsp; &nbsp;
           <input type="text" contenteditable="true" ("Input Country") name="country"></input>
        </label><br> &nbsp; 
            
        <label for="Gender">
            Gender &nbsp; &nbsp; <select id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Trans">Trans</option>
                <option value="others"><p contentEditable="true">Others</p></option> 
        
            </select>
        </label> &nbsp; &nbsp;
        
        <br><br>
       &nbsp; <button type="submit">submit</button>
    </form>   
<?php
HELLO: print_r($_POST);
?>
</body>
</html>