<?php

            include('phpqrcode/qrlib.php');
            
                
                $qrData = $_GET['item1'].",".$_GET['lot1'].",".$_GET['exp1'].",".$_GET['batch1'];
                QRcode::png($qrData);    
                      
            
/*
            $qr = new QrCode('this is awesome');

            $qr->setSize(100);

            $image = $qr->writeString();



            //header('Content-Type: '.$qr->getContentType());

            echo $image;

*/

        ?>
        