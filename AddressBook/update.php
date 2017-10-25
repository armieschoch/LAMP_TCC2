<?php
require_once "addressbook.php";

$id = $_POST["id"];

$addressbook = new AddressBook();

$updateContact = $addressbook->getContactById($id);

// header("Location: index.php");

?>

<html>
<title>Address Book</title>
<head>Update Address Book</head>
<body>
    <div id="UpdateContact">
    <br/>
       <form method="POST" action="doUpdate.php">

      <input type="hidden" name="id" value='<?php echo $id; ?>'></input>

       First name:
       <input type="text" name="firstName" value='<?php echo $updateContact->getPerson()->getfirstName(); ?>'></input>
<br/>
       Last name:
       <input type="text" name="lastName" value='<?php echo $updateContact->getPerson()->getlastName(); ?>'></input>
       <br/>
       Phone number:
       <input type="text" name="phoneNumber" value='<?php echo $updateContact->getPhoneNumber(); ?>'></input>
       <br/>
       Email:
       <input type="text" name="email" value='<?php echo $updateContact->getEmail(); ?>'></input>
       <br/>
       Street:
       <input type="text" name="street" value='<?php echo $updateContact->getAddress()->getStreet(); ?>'></input>
       <br/>
       City:
       <input type="text" name="city" value='<?php echo $updateContact->getAddress()->getCity(); ?>'></input>
       <br/>
       State:
       <input type="text" name="state" value='<?php echo $updateContact->getAddress()->getState(); ?>'></input>
       <br/>
       Zip:
       <input type="text" name="zip" value='<?php echo $updateContact->getAddress()->getZip(); ?>'></input>
       <br/>
       Contact Type:
       <input type="text" name="contactType" value='<?php echo $updateContact->getType(); ?>'></input>
       <br/>
       Note:
       <input type="text" name="note" value='<?php echo $updateContact->getNote(); ?>'></input>
       <br/>
       Comment:
       <input type="text" name="comment" value='<?php echo $updateContact->getComment(); ?>'></input>
 <br />
<input type="submit" value="UPDATE">
</form>
<form>
<input type="submit" value="CANCEL">
</form>
      

    </div>
</body>

</html>