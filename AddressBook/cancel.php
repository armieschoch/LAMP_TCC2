<?php
require_once "addressbook.php";

$id = $_POST["id"];

$addressbook = new AddressBook();

$addressbook->deleteContact($id);
header("Location: index.php");

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
    <div id="addressBook" class ="container-fluid card">
        <div style="width: 40rem;">
            
        <div class="card-body">
 
        <div class="card-header">
        <form action="create.php">
            <input class="btn btn-success btn-outline-success btn-lg" type="submit" value="Create" />
            
        </form>
        </div>
        <div class="card">
  <div class="card-body">
<table class="table table-dark table-striped">
    <?php
        require_once "addressbook.php";
        $addressbook = new AddressBook();
        $all_contacts = $addressbook->getAllContacts();
        
        foreach ($all_contacts as $contact)
        {
            echo "<tr>";
            echo "<td>";
            echo $contact->prettyPrint();
            echo "</td>";
            
            echo "<td><form method='post' action='update.php'>";
            echo "<input type='hidden' name='id' value='" .$contact->getid() . "'/>";
            echo "<input type='submit' value='Update' class='btn-warning' />";
            echo "</form>";
            echo "</td>";

            echo "<td><form method='post' action='delete.php'>";
            echo "<input type='hidden' name='id' value='" .$contact->getid() . "'/>";
            echo "<input type='submit' value='Delete' class= 'btn-danger'/>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";

          
        }
?>
    </div>
</table>
</div>
</div>
</div>

</body>

</html>