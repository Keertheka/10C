<!DOCTYPE html>
    <html>
    <head>
        <title>
            Interests
        </title>
    </head>
    <style>
        *{
 margin:0;
 padding: 0;
 outline: 0;
}
body{
    background-image:url(s.jpg);
            background-repeat:no-repeat;
            background-size: 100% 1000px;
}
.filter{
 position: absolute;
 left: 0;
 top: 0;
 bottom: 0;
 right: 0;
 z-index: 1;
 background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
opacity: .7;
}
table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
}
th{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
    </style>
    <body>
        
        <TABLE BORDER="1">
            <TR>
            <TH>Interest</TH>
            <TH>Total no.of students</TH>
            </TR>
            <TR>
            <TD>English club</TD>
            <TD><?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT count(id) AS total FROM activity WHERE interest='English'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></TD>
</TR>
           <TR>
             <TD>NSS</TD>
            <TD><?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT count(id) AS total FROM activity WHERE interest='NSS'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></TD>
</TR>
            <TR>
            <TD>NCC</TD>
            <TD><?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT count(id) AS total FROM activity WHERE interest='NCC'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></TD>
</TR>
            <TR>
            <TD>Sonata</TD>
            <TD><?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT count(id) AS total FROM activity WHERE interest='Sonata'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></TD>
</TR>
            <TR>
            <TD>Sonaria</TD>
            <TD><?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT count(id) AS total FROM activity WHERE interest='Sonaria'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></TD>
</TR>
            </TABLE>
            
            <a href="Placement.html">Previous page...</a>
    </body>
</html>