<?php
    interface IDBConnectable
    {
        function connectToDatabase();
        function disconnectFromDatabase();
     
    }

?>