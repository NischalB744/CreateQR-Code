<!doctype html>
<html>

    <head>
        <title> Create and Store the QR Code </title>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="pageStyle.css">
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        
        <script type = "text/javascript" src = "js/jquery.js"></script>
        
        <script type="text/javascript">
        
            
            document.addEventListener("DOMContentLoaded", function(event) { 
 
            var minYear = new Date().getFullYear(),
                maxYear = minYear + 50,
                selectYear = document.getElementById("expiryYear"),
                minMonth = 1,
                maxMonth = 12,
                selectMonth = document.getElementById("expiryMonth"),
                minDate = 1,
                maxDate = 31,
                selectDate = document.getElementById("expiryDate");
            
                for(var a = minYear; a<=maxYear; a++){
                    
                    var optYear = document.createElement("option");
                    optYear.value = a;
                    optYear.innerHTML = a;
                    selectYear.appendChild(optYear);
                    
                }
                
                for(var i = minMonth; i<=maxMonth; i++)
                    {
                        var optMonth = document.createElement("option");
                        if(i === 1){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "01    -    January"; 
                            }
                        else if(i === 2){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "02    -    February";
                            }
                        else if(i === 3){
                                optMonth.value = ("0" + i).slice(-2);;
                                optMonth.innerHTML = "03    -    March";
                            }
                        else if(i === 4){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "04    -    April";
                            }
                        else if(i === 5){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "05    -    May";
                            }
                        else if(i === 6) {
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "06    -    June";
                            }
                        else if(i === 7){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "07    -    July";
                            }
                        else if(i === 8){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "08    -    August";
                            }
                        else if(i === 9){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "09    -    September";
                            }
                        else if(i === 10){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "10    -    October";
                            }
                        else if(i === 11){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "11    -    November";
                            }
                        else if(i === 12){
                                optMonth.value = ("0" + i).slice(-2);
                                optMonth.innerHTML = "12    -    December";
                            }
                        
                                selectMonth.appendChild(optMonth);
                    }
                
                
                    for(var a = minDate; a<=maxDate; a++){

                        var optDate = document.createElement("option");
                        if(a >=0 && a <10)
                            {
                                optDate.value = ("0" + a).slice(-2);
                                optDate.innerHTML = ("0" +a).slice(-2);
                            }
                        else
                        {
                            optDate.value = a;
                            optDate.innerHTML = a;
                        }
                        
                        
                        selectDate.appendChild(optDate);

                    }
                selectDate.value ="";

        });

            
            function printSearchSuccess()
            {
                document.getElementById("databaseLabel").innerHTML = "";
                var successDiv = document.createElement("div");
                var successMsg = document.createTextNode("The item was found in the database.");
                successDiv.appendChild(successMsg);
                successDiv.setAttribute("class","alert alert-success");
                successDiv.setAttribute("role","alert");
                document.getElementById("feedbackContainer").appendChild(successDiv);
            }
            
            
            function printSearchFail()
            {
                
                document.getElementById("databaseLabel").innerHTML = "";
                var successDiv = document.createElement("div");
                var successMsg = document.createTextNode("No Such Item Exists on the database.");
                successDiv.appendChild(successMsg);
                successDiv.setAttribute("class","alert alert-danger");
                successDiv.setAttribute("role","alert");
                document.getElementById("feedbackContainer").appendChild(successDiv);
               
            }
            
            function printLabelSuccess()
            {
                document.getElementById("databaseLabel").innerHTML = "";
                var successDiv = document.createElement("div");
                var successMsg = document.createTextNode("The item was successfully stored in the database.");
                successDiv.appendChild(successMsg);
                successDiv.setAttribute("class","alert alert-success");
                successDiv.setAttribute("role","alert");
                document.getElementById("feedbackContainer").appendChild(successDiv);
            }
            
            
            function printLabelFail()
            {
                
                document.getElementById("databaseLabel").innerHTML = "";
                var successDiv = document.createElement("div");
                var successMsg = document.createTextNode("Error entering the item in the database.");
                successDiv.appendChild(successMsg);
                successDiv.setAttribute("class","alert alert-danger");
                successDiv.setAttribute("role","alert");
                document.getElementById("feedbackContainer").appendChild(successDiv);
               
            }
            
            function clearFields()
            {
                document.getElementById("itemNumber").value = "";
                document.getElementById("lotNumber").value = "";
                document.getElementById("expiryDate").value = "";
                document.getElementById("batchNumber").value = "";
                
            }
            
            function printQR()
            {
                window.print();
                
            }
            
            function checkLength()
            {
                var myYear = document.getElementById("expiryYear");
                if(myYear.value.length != 4)
                    {
                        myYear.setAttribute("data-toggle", "popver");
                        myYear.setAttribute("data-trigger", "hover");
                        myYear.setAttribute("data-content", "Please Enter the year in YYYY Format."); 
                    }
            }
           
        
        </script>
        
        
    </head>
    
    

    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light myNavBar example-screen" style = "background:#539AC6;">
          <a class="navbar-brand text-white" href="#"><img src = "image/logo.png"></a>

                <h1 id = "pageHeading" class = "display-3 col col-sm-12">AOSS QR Storage System</h1>
          
        </nav>
        <div id = "feedbackContainer"  class = "example-screen">
                <div id ="databaseLabel">
                </div>
       </div>
        <div class = "row" id = "mainColumns">
            <div class = "col-5 container example-screen" id = "formColumn">
                <form action = "" method="post">
                 <div class = "form-group row myFields" id = "item_num">
                        <label for  = "itemNumber" class="col-sm-2 col-form-label myLabels">ITEM #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control" id = "itemNumber" name  = "itemNumber" oninput="this.value = this.value.toUpperCase()" autofocus = "autofocus" required = "required">
                        </div>
                </div>

                    <div class = "form-group row myFields" id = "lot_num">
                        <label for  = "lotNumber" class="col-sm-2 col-form-label myLabels">LOT #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control" id = "lotNumber" name = "lotNumber" oninput="this.value = this.value.toUpperCase()" required = "required">
                        </div>
                    </div>
                    
                    <fieldset>
                        <legend >EXPIRY DATE:</legend>
                        <div class = "form-group row myFields" id = "exp_date">

                            <label for  = "expiryYear" class="col-sm-2 col-form-label myLabels">YEAR</label>
                            <div class = "col-10">
                                <select class = "form-control" id = "expiryYear" name = "expiryYear" required = "required"></select>
                            </div>
                            <label for  = "expiryMonth" class="col-sm-2 col-form-label myLabels">MONTH</label>
                            <div class = "col-10">
                                <select class = "form-control" id = "expiryMonth" name = "expiryMonth" required = "required"></select>
                            </div>
                            <label for  = "expiryDate" class="col-sm-2 col-form-label myLabels">DATE</label>
                            <div class = "col-10">
                                <select class = "form-control" id = "expiryDate" name = "expiryDate" ></select>
                            </div>
                            
                            
                        </div>
                    </fieldset>

                    <div class = "form-group row myFields" id = "batch_num">
                        <label for  = "batchNumber" class="col-sm-2 col-form-label myLabels">BATCH #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control"id = "batchNumber" name = "batchNumber" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>

                    <div class = "container" id = "buttonContainer">
                        <button type = "submit" name = "createBtn" class="btn btn-success example-screen myBtn">CREATE</button>
                        <button type = "submit" name = "searchBtn" class="btn btn-warning example-screen myBtn">SEARCH</button>
                        <button class="btn btn-primary example-screen myBtn" onclick="clearFields();">CLEAR</button>
                    </div>
                </form>
            </div>
            
            


            <div class = " col-5 container example-print" id = "infoColumn">
                <div class = "container" id = "qrContainer">
                    <?php
                        
                        
                        error_reporting(0);
                        if($_POST['expiryDate'] == '')
                        {
                            $exp = $_POST['expiryMonth'].'/'.$_POST['expiryYear'];
                        }
                        
                        else
                        {
                            $exp = $_POST['expiryMonth'].'/'.$_POST['expiryDate'].'/'.$_POST['expiryYear'];
                        }
                        
                        $item = $_POST['itemNumber'];
                        $lot = $_POST['lotNumber'];
                        $batch = $_POST['batchNumber'];
                        $barcode = $item.",".$lot.",".$exp.",".$batch;
                    
                    /*
                    //----------------------------------------------------------------------------------------------------------------------------------------
                    //              CREATE FUNCTION
                    //----------------------------------------------------------------------------------------------------------------------------------------
                    */
                        
                    if(isset($_POST['createBtn']))
                    {
                    
                        if(($item == '')||($lot == '')||($exp == ''))
                        {
                            // Do Nothing (Is taken care by the HTML Itself)
                        }
                        else
                        {
                            $mysqli = new mysqli('127.0.0.1','root','','test');
                            if ($mysqli->connect_error)
                            {
                                die('Could not connect to database!');
                            }   



                            $statement = $mysqli->prepare("INSERT INTO barcodetest VALUES (?, ?, ?, ?, ?)");

                            $statement->bind_param('sssss',$barcode,$item,$lot,$exp,$batch);

                            $success = $statement->execute();



                            if($success) 
                            {

                                echo '<script>';
                                echo 'printLabelSuccess()';
                                echo '</script>';
                                echo '<img width="150" height = "150" src="qrcode.php?item1='.$item.'&lot1='.$lot.'&exp1='.$exp.'&batch1='.$batch.'"/>'; 
                                echo "</br>";
                                echo "</br>";
                                echo "<div id = 'qrInfoDiv'>";
                                echo "Item #: ".$item."</br>";
                                echo "Lot #: ".$lot."</br>";
                                echo "Expiry Date: ".$exp."</br>";
                                
                                if(!($batch == ''))
                                {
                                    echo "Batch #: ".$batch."</br>";
                                }
                                echo "</div>";
                                echo "<input type='submit' class = 'btn btn-primary example-screen myBtn' id = 'myExitBtn' name='submit' value='PRINT' onclick = 'window.print()'>";
                                

                            }
                            else
                            {
                                echo '<script>';
                                echo 'printLabelFail()';
                                echo '</script>';
                            }

                        }
                    }
                    
                    /*
                    //----------------------------------------------------------------------------------------------------------------------------------------
                    //              SEARCH FUNCTION
                    //----------------------------------------------------------------------------------------------------------------------------------------
                    */
                    
                    else if(isset($_POST['searchBtn']))
                    {
                        if(($item == '')||($lot == '')||($exp == ''))
                        {
                            // Do Nothing (Is taken care by the HTML Itself)
                        }
                        else
                        {
                            $mysqli = new mysqli('127.0.0.1','root','','test');
                            if ($mysqli->connect_error)
                            {
                                die('Could not connect to database!');
                            }   



                            $statement = $mysqli->prepare("SELECT itemno,lotno,expdate,batchno FROM barcodetest WHERE barcode=?");

                            $statement->bind_param('s',$barcode);

                            $success = $statement->execute();
                            
                            $statement->bind_result($dbItemno,$dbLotno,$dbExpdate,$dbBatchno);

                            $row = $statement->fetch();
                            

                            if($row) 
                            {

                                echo '<script>';
                                echo 'printSearchSuccess()';
                                echo '</script>';
                                echo '<img width="150" height = "150" src="qrcode.php?item1='.$dbItemno.'&lot1='.$dbLotno.'&exp1='.$dbExpdate.'&batch1='.$dbBatchno.'"/>'; 
                                echo "</br>";
                                echo "</br>";
                                echo "<div id = 'qrInfoDiv'>";
                                echo "Item #: ".$dbItemno."</br>";
                                echo "Lot #: ".$dbLotno."</br>";
                                echo "Expiry Date: ".$dbExpdate."</br>";
                                
                                if(!($batch == ''))
                                {
                                    echo "Batch #: ".$dbBatchno."</br>";
                                }
                                echo "</div>";
                                echo "<input type='submit' class = 'btn btn-primary example-screen' id = 'myExitBtn' name='submit' value='PRINT' onclick = 'window.print()'>";
                                

                            }
                            else
                            {
                                echo '<script>';
                                echo 'printSearchFail()';
                                echo '</script>';
                            }

                        }
                    }

                    ?>
                
                </div>
            </div>
            
        </div>
        
        
    </body>
    
     <footer id = "myFooter">
    </footer>
</html>