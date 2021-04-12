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


<body><center><h1>COMPANY DETAILS</h1>
    <table><tr>
        <th>Company_Id</th>
        <th>Company_Name</th>
        <th>Company_Location</th>
        <th>Phone_No</th></tr>
        <?PHP
        
    
        $conn= new mysqli('localhost','root','','pharmacy');
       
$a= $conn-> query("select * from companytable");
       
       if($a->num_rows > 0)
        {
            while($r=$a-> fetch_assoc())
            {
             echo "<tr><td>".$r["company_id"]."</td><td>".$r["company_name"]."</td><td>".$r["company_location"]."</td><td>".$r["ph_no"]."</td></tr>";
            }
        }
        ?>
              
        
    </table><br><br> 
     <a href="addcompany.html"><button>New Company</button></a><br><br>
     <a href="adminmenu.html"><button style=" width: 80px; background-color: antiquewhite; border-radius: 20px; border: 1px solid black;box-shadow: 5px 5px 10px #888888;">BACK</button></a> </center>
    </body></html>