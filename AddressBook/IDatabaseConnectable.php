<?php
    interface IDatabaseConnectable
    {
        function connectToDatabase();
        function disconnectFromDatabase();
     
    }

?>