<!doctype html>
<html>

    <head>
        <title> Create and Store the QR Code </title>
        
        <script type = "text/javascript" src = "jquery.js"></script>
        <script type = "text/javascript">
             function submitForm()
                {
                    
                    var itemValue = document.getElementById("itemNumber").value;
                    var lotValue = document.getElementById("lotNumber").value;
                    var expValue = document.getElementById("expiryDate").value;
                    var batchValue = document.getElementById("batchNumber").value;
                    
                    var finalString = itemValue + "," +lotValue + "," + expValue + "," + batchValue;
                    
                    
                }

        </script>

    </head>

    <body>
        <form action = "" method="post">
         <div id = "item_num">
                <label for  = "itemNumber">ITEM NUMBER: </label>
                <input type = "text" id = "itemNumber" name  = "itemNumber">
            </div>
            
            <div id = "lot_num">
                <label for  = "lotNumber">LOT NUMBER: </label>
                <input type = "text" id = "lotNumber" name = "lotNumber">
            </div>
            
            <div id = "exp_date">
                <label for  = "expiryDate">EXPIRATION DATE: </label>
                <input type = "text" id = "expiryDate" name = "expiryDate">
            </div>
            
            <div id = "batch_num">
                <label for  = "batchNumber">BATCH NUMBER: </label>
                <input type = "text" id = "batchNumber" name = "batchNumber" >
            </div>
            
            <div id = "submit_btn">
                <button type="submit" onclick = "submitForm()">CREATE &amp; STORE</button>
            </div>
        </form>
        <?php
            
            
            $item = $_POST['itemNumber'];
            $lot = $_POST['lotNumber'];
            $exp = $_POST['expiryDate'];
            $batch = $_POST['batchNumber'];
            
            
            
            
            echo '<img src="qrCode.php?item1='.$item.'&lot1='.$lot.'&exp1='.$exp.'&batch1='.$batch.'"/>';
            
        ?>
        
        <p>Item Number: </p>
        <p>Lot Number: </p>
        <p>Expiry Date: </p>
        <p>Batch Number:</p>
        
        
        
        
            
        
        

    </body>
</html>