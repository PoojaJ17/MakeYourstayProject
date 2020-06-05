<html>
    <head>
    <title>Make Your Stay</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"rel="stylesheet"type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/page2.css">
    </head>
    <body >
        <div id="main">
    <nav id="navid">
        <img src="img/logo2.jpg" class="av" width="100" height="90" >
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="contact1.php">Contacts</a></li>
            <li><a href="accomo.php">Accomodation</a></li>
            <li><a href="#">Login/Register</a></li>
        </ul>
    </nav>
        </div>
         <div class="row">
        <div class="blocknew">
             <form action="" method="post">
            <input type="text"id="place" placeholder="Destination">
            <input type="text"id="dt1" placeholder="Deparch Date">
            <input type="text"id="dt2" placeholder="Return Date">
            <select id="seat">
                <option>Guest</option>
                <option value="1">Person 1</option>
                <option value="2">Person 2</option>
                <option value="3">Person 3</option>
            </select>
                  <input type="submit" id="button" value="Search">              

        </form>
        </div>
       
        <script type="text/javascript">
            $(document).ready(function () {

    $("#dt1").datepicker({
        dateFormat: "dd-M-yy",
        timePicker: true,
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 30);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "dd-M-yy"
    });
});
        </script>  
     </div>
 
    </body>
</html>