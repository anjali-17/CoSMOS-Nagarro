<!DOCTYPE html>
<!-- saved from url=(0028)http://localhost/booking.php -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap Example</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../canvasjs.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style type="text/css">
        .container {
            font-size: 15px;
        }

        body {
            padding-top: 70px;
        }

        .card {
            width: 1200px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            text-align: left;
        }

        .set {
            margin-bottom: 20px;
        }
    </style>


</head>

<body>

        <h2>Booking History</h2>

        <?php
        session_start();

        include_once("class.Database.php");

        $databasename = 'mydb';
        $collname = 'bookings';
        $database = new dataBase();
        $database->getBookingConnnection($databasename,$collname);

        $cursor = $_SESSION["booking_collection"]->find(array('uname'=>'mkp'),array("_id"=>false));
        foreach ($cursor as $document){
        echo"
        <div class='container card set'>
            <table class='table'>

                <tr>
                    <td class='col-sm-5'><b>Title</b></td>
                    <td class='col-sm-5'>".$document['title']."</td>

                </tr>
                <tr>
                    <td class='col-sm-6'><b>Type</b></td>
                    <td class='col-sm-6'>".$document['type']."</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Location</b></td>
                    <td class='col-sm-8'>".$document['destination']."</td>
                </tr>
                <tr>
                    <td class='col-sm-6'><b>Date Booked</b></td>
                    <td class='col-sm-6'>".$document['date']."</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Total Seats</b></td>
                    <td class='col-sm-8'>".$document['seats']."</td>
                </tr>
            </table>
        </div>";
    }
    ?>


  <!--       <div class="container card set">
            <table class="table">
                <tr>
                    <td class="col-sm-5"><b>Title</b></td>
                    <td class="col-sm-5">avn</td>

                </tr>
                <tr>
                    <td class="col-sm-6"><b>Type</b></td>
                    <td class="col-sm-6">Event</td>
                </tr>
                <tr>
                    <td class="col-sm-4"><b>Location</b></td>
                    <td class="col-sm-8">Ranchi</td>
                </tr>
                <tr>
                    <td class="col-sm-6"><b>Date Booked</b></td>
                    <td class="col-sm-6">20 Jan</td>
                </tr>
                <tr>
                    <td class="col-sm-4"><b>Total Seats</b></td>
                    <td class="col-sm-8">1</td>
                </tr>
            </table>
        </div>







 

        <div class="container card set">
            <table class="table">
                <tr>
                    <td class="col-sm-5"><b>Title</b></td>
                    <td class="col-sm-5">Ramada</td>

                </tr>
                <tr>
                    <td class="col-sm-6"><b>Type</b></td>
                    <td class="col-sm-6">Restaurant</td>
                </tr>
                <tr>
                    <td class="col-sm-4"><b>Location</b></td>
                    <td class="col-sm-8">Jaipur</td>
                </tr>
                <tr>
                    <td class="col-sm-6"><b>Date Booked</b></td>
                    <td class="col-sm-6">29 Feb</td>
                </tr>
                <tr>
                    <td class="col-sm-4"><b>Total Seats</b></td>
                    <td class="col-sm-8">4</td>
                </tr>
            </table>
        </div> -->

</body>

</html>
