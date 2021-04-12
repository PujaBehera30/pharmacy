<html>
<head><style>
    h1{
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


<body><center><h1>MEDICINE DETAILS</h1>
    <table><tr>
        <th>Medicine_Id</th>
        <th>Medicine_Name</th>
        <th>Company_Id</th></tr>
        
        <?PHP
        
    
        $conn= new mysqli('localhost','root','','pharmacy');
       
$a= $conn-> query("select * from medicinetable");
       
       if($a->num_rows > 0)
        {
            while($r=$a-> fetch_assoc())
            {
                echo "<tr><td>".$r["Medicine_id"]."</td><td>".$r["Medicine_name"]."</td><td>".$r["company_id"]."</td></tr>";
            }
        }
        ?>
              
        
    </table><br><br> 
    <a href="addmedicine.html"><button>New Medicine</button></a><br><br>
     <a href="adminmenu.html"><button style=" width: 80px; background-color: antiquewhite; border-radius: 20px; border: 1px solid black;box-shadow: 5px 5px 10px #888888;">BACK</button></a> </center>
    </body></html>