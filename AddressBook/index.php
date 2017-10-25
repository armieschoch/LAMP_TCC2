<html>
<title>Address Book</title>
<head>Address Book</head>
<body>
    <div id="addressBook">
        <form action="create.php">
            <input type="submit" value="Create" />
        </form>
<table border="2">
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
            echo "<input type='submit' value='Update' />";
            echo "</form>";
            echo "</td>";

            echo "<td><form method='post' action='delete.php'>";
            echo "<input type='hidden' name='id' value='" .$contact->getid() . "'/>";
            echo "<input type='submit' value='Delete' />";
            echo "</form>";
            echo "</td>";
            echo "</tr>";

          
        }
?>
    </div>
</table>


</body>

</html>