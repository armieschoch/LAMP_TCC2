<html>
<title>Address Book</title>
<head>Add New Address Book Entry</head>
<body>
    <div id="createNewContact">
    <br/>
       <form method="POST" action="doCreate.php">
       First name:
       <input type="text" name="firstName"></input>
<br/>
       Last name:
       <input type="text" name="lastName"></input>
       <br/>
       Phone number:
       <input type="text" name="phoneNumber"></input>
       <br/>
       Email:
       <input type="text" name="email"></input>
       <br/>
       Street:
       <input type="text" name="street"></input>
       <br/>
       City:
       <input type="text" name="city"></input>
       <br/>
       State:
       <input type="text" name="state"></input>
       <br/>
       Zip:
       <input type="text" name="zip"></input>
       <br/>
       Contact Type:
       <input type="text" name="contactType"></input>
       <br/>
       Note:
       <input type="text" name="note"></input>
       <br/>
       Comment:
       <input type="text" name="comment"></input>
 <br />
<input type="submit" value="CREATE">
</form>
      

    </div>
</body>

</html>