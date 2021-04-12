<html>
<head><style>
    h1{
        text-align: center;
        background-color: darkcyan;
        color: lightcyan;
        font-size: 80px;
        font-family: sans-serif
    }
        th{
            width:600px;
                   background-color: darkcyan;
        color: lightcyan;
        font-size: 30px;
        }
    td{
        text-align: center;
        font-size: 20px;
        
    }
    button{
        width:200px;
        height: 40px;
        border-radius: 15px;
        border: 1px solid black;
        background-color: greenyellow
    }
    
    </style></head>


<body style= text-align: center><h1>PHARMACY DETAILS</h1><center>
    <table><tr>
        <th>Pharmacy ID</th>
        <th>Pharmacy_Name</th>
        <th>Pharmacy_Location</th>
        <th>Phone_Number</th></tr>
        
        <?PHP
        
    
        $conn= new mysqli('localhost','root','','pharmacy');
       
        $a= $conn-> query("select * from pharmacy");
       
       if($a->num_rows > 0)
        {
            while($r=$a-> fetch_assoc())
            {
                echo "<tr><td>".$r["pharmacy_id"]."</td><td>".$r["pharmacy_name"]."</td><td>".$r["pharmacy_loc"]."</td><td>".$r["ph_no"]."</td></tr>";
            }
        }
        ?>
              
        
    </table> <br><br>
     <a href="addpharmacy.html"><button>New Pharmacy</button></a><br><br>
     <a href="adminmenu.html"><button style=" width: 80px; background-color: antiquewhite; border-radius: 20px; border: 1px solid black;box-shadow: 5px 5px 10px #888888;">BACK</button></a></center> 
    </body></html>