<html>
<head>Feedback Customer</head>
<body>
        <h1>Feedback Customer</h1>
<?php
    if(isset($_GET['submit'])){
        echo"<table border=1>
        <tr><td>Name</td><td>:".$_GET['full_name']."</td></tr>
        <tr><td>Message</td><td>:</td></tr>
        <tr><td colspan=2>".$_GET['pesan']."</td></tr>
    </table>";
    }else{
        echo"<h2>Halaman ini tidak bisa dipanggil secara langsung</h2>";
    }
?>

</body>
</html>