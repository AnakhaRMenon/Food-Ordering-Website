<?php       
include "connection.php";    
    
if(isset($_GET['Email_ID'])){    
$sql = "delete from UserLogin where Email_ID = '".$_GET['Email_ID']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from UserLogin";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "2" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Name</td>    
                <td>Email_ID</td>    
                <td>Password</td>    
                <td>State</td>    
                <td>Messages</td>       
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>   