<!doctype html>
<html>

    <head>
        <title> Create and Store the QR Code </title>

        <script type = "text/javascript">
             function displayImage()
                {
                    //var myQRCode = document.createElement("img");
                    //myQRCode.setAttribute("src",encodeValue);
                    //document.getElementById("QrDiv").appendChild(myQRCode);
                    alert("hey");
                    
                }

        </script>

    </head>

    <body>
    
        <form action="qrcode.php" method="post">
            
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
                <button type="submit">CREATE &amp; STORE</button>
            </div>
        
        </form>

        <div id = "QrDiv">
            <p>HERE IS THE IMAGE:</p>
        </div>

    </body>
</html>