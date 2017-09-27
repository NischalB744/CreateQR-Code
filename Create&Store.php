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
                var successMsg = document.createTextNode("Error entering the item in the database. Could be duplicate entry or an invalid entry. Please try again or check the database.");
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
            
           
        
        </script>
        
        
    </head>
    
    

    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light myNavBar example-screen" style = "background:#539AC6;">
          <a class="navbar-brand text-white" href="#"><img src = "image/logo.png"></a>

                <h1 id = "pageHeading" class = "display-3 col col-sm-12">AOSS QR Storage System</h1>
          
        </nav>
        <div class = "row" id = "mainColumns">
            <div class = "col-6 container example-screen" id = "formColumn">
                <form action = "" method="post">
                 <div class = "form-group row myFields" id = "item_num">
                        <label for  = "itemNumber" class="col-sm-2 col-form-label myLabels">ITEM #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control" id = "itemNumber" name  = "itemNumber" required = "required">
                        </div>
                </div>

                    <div class = "form-group row myFields" id = "lot_num">
                        <label for  = "lotNumber" class="col-sm-2 col-form-label myLabels">LOT #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control" id = "lotNumber" name = "lotNumber" required = "required">
                        </div>
                    </div>

                    <div class = "form-group row myFields" id = "exp_date">
                        <label for  = "expiryDate" class="col-sm-2 col-form-label myLabels">EXPIRY DATE: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control" id = "expiryDate" name = "expiryDate" required = "required">
                        </div>
                    </div>

                    <div class = "form-group row myFields" id = "batch_num">
                        <label for  = "batchNumber" class="col-sm-2 col-form-label myLabels">BATCH #: </label>
                        <div class = "col-10">
                            <input type = "text" class = "form-control"id = "batchNumber" name = "batchNumber" >
                        </div>
                    </div>

                    <div class = "container" id = "buttonContainer">
                        <button type = "submit" class="btn btn-success example-screen myBtn">CREATE &amp; STORE</button>
                        <button type = "submit" class="btn btn-warning example-screen myBtn">SEARCH</button>
                        <button class="btn btn-primary example-screen myBtn" onclick="clearFields();">CLEAR</button>
                    </div>
                </form>
            </div>



            <div class = " col-5 container example-print" id = "infoColumn">
                <div class = "container" id = "qrContainer">
                    <?php

                        error_reporting(0);

                        $item = $_POST['itemNumber'];
                        $lot = $_POST['lotNumber'];
                        $exp = $_POST['expiryDate'];
                        $batch = $_POST['batchNumber'];
                        $barcode = $item.",".$lot.",".$exp.",".$batch;

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
                                echo '<img width="150" height = "150" src="qrCode.php?item1='.$item.'&lot1='.$lot.'&exp1='.$exp.'&batch1='.$batch.'"/>'; 
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
                                echo "<input type='submit' class = 'btn btn-primary example-screen' id = 'myExitBtn' name='submit' value='PRINT' onclick = 'window.print()'>";
                                

                            }
                            else
                            {
                                echo '<script>';
                                echo 'printLabelFail()';
                                echo '</script>';
                            }

                        }

                    ?>
                
                </div>
            </div>
        </div>
        <div id = "feedbackContainer"  class = "example-screen">
            <div id ="databaseLabel">
                
            </div>
        </div>
        
        
    </body>
    
     <footer>
         <div id = "exitContainer">
                   <button type = "submit" class="btn btn-danger example-screen myBtn" onclick="self.close()">EXIT</button>
        </div>  
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 id = "pageHeading" class = "display-3 col col-sm-12"></h1>
        </nav>
    </footer>
</html>