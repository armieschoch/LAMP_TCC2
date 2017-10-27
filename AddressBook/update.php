<?php
require_once "addressbook.php";

$id = $_POST["id"];

$addressbook = new AddressBook();

$updateContact = $addressbook->getContactById($id);

// header("Location: index.php");

?>

<html>
<title>Address Book</title>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <div id="UpdateContact" class="card">

    <div class="card-body">
   
       <form method="POST" action="doUpdate.php">

       <div class="form-group">
        
            <input type="hidden" name="id" value='<?php echo $id; ?>'></input>

            <div class="form-row">
            <div class="col-4" id="person">
            First name:
            <input class = "form-control" type="text" name="firstName" value='<?php echo $updateContact->getPerson()->getfirstName(); ?>'></input>
            </div>

                <div class="col-4">
                Last name:
                <input class = "form-control" type="text" name="lastName" value='<?php echo $updateContact->getPerson()->getlastName(); ?>'></input>
         </div> 
         </div>
         </div>

         <div class="form-group" id="address">
            <div class="form-row">
        
            <div class="col-8">
            Street:
            <input class = "form-control" type="text" name="street" 
            value='<?php echo $updateContact->getAddress()->getStreet(); ?>'></input>
            </div>
            </div>

        <div class="form-row">

            <div class="col-4">
            City:
            <input class = "form-control" type="text" name="city" 
            value='<?php echo $updateContact->getAddress()->getCity(); ?>'></input>
            </div>
       
        <div class="col-2">
            State:
            <input class = "form-control" type="text" name="state" 
            value='<?php echo $updateContact->getAddress()->getState(); ?>'></input>
        </div>
       

        <div class="col-2">
            Zip:
            <input class = "form-control" type="text" name="zip" 
            value='<?php echo $updateContact->getAddress()->getZip(); ?>'></input>
     </div>
      </div>
    
      <div class="form-group">
        <div class="form-row">
       
        <div class="col-4" id = "contact">
            Phone number:
            <input class = "form-control" type="text" name="phoneNumber" 
            value='<?php echo $updateContact->getPhoneNumber(); ?>'></input>
       </div>
       
        <div class="col-4">
            Email:
            <input class = "form-control" type="text" name="email" 
            value='<?php echo $updateContact->getEmail(); ?>'></input>
        </div>

      </div>
      </div>

      <div class="form-group">
            <div class="form-row">

            <div class="col-4">
            Contact Type:
            <input type="text" name="contactType" value='<?php echo $updateContact->getType(); ?>'></input>
           
            </div></div></div>
       
            <div class="form-group">
            <div class="form-row">

                <div class="col-8">

                Note:
                <textarea rows="3" class ="form-control" type="text" name="note"><?php echo $updateContact->getNote(); ?></textarea>
     </div>
    
                <div class="col-8">
                Comment:
                <textarea rows="3"type="text" name="comment" class ="form-control" 
                ><?php echo $updateContact->getComment(); ?></textarea> </div>     
      </div>
      </div>          
                
                
<input type="submit" value="UPDATE" class='btn-warning'>
</form>
<form>
<input type="submit" value="CANCEL">
</form>
      
    </div>
    </div>
  
</body>

</html>