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

<body><center>
    <h1>USERS DETAILS</h1>
    <table><tr>
        <th>NAME</th>
        
        <th>PHARMACY_ID</th>
        
        <th>PASSWORD</th>
        
        <th>EMAIL_ID</th>
        
        <th>GENDER</th>
        
        <th>PHONE_NO</th>
        
        </tr>
        <?PHP
        
    
        $conn= new mysqli('localhost','root','','pharmacy');
       
$a= $conn-> query("select * from users");
       
       if($a->num_rows > 0)
        {
            while($r=$a-> fetch_assoc())
            {
                echo "<tr><td>".$r["Name"]."</td><td>".$r["Pharmacy_id"]."</td><td>".$r["Password"]."</td><td>".$r["Email_id"]."</td><td>".$r["Gender"]."</td><td>".$r["Phone_no"]."</td></tr>";
            }
        }
        ?>
              
        
    </table> <br><br>
    
    <a href="adminmenu.html"><button style=" width: 80px; background-color: antiquewhite; border-radius: 20px; border: 1px solid black;box-shadow: 5px 5px 10px #888888;">BACK</button></a> </center>
    </body></html>