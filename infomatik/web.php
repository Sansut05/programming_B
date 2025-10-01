<html>
<head>
<link rel="stylesheet" href="myCSS.css">
<title>Test Page</title>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"
?>
    <style>
        
    </style>
</head>



<body>


<table class="overskrift" width=100%>
    <tr align="center">
        <td align="center">Mit Portfolio</td>
    </tr>
</table>
<table class="underOverskrift" width=100%>
    <tr align="center">
        <td align="center">Viggo Bengtson</td>
    </tr>
</table>

<table class="usynligtabel">
    <tr>
        <td></td>
    </tr>
</table>
<table class="testtabel" id=tabel2 align="center">
    <tr>
        <th width=33%>Emne</th>
        <th width=33%>Projekt</th>
        <th width=33%>Dato</th>
    </tr>
    <tr>
        <td>Emne 1</th>
        <td>Machine Learning</th>
        <td>--/--/----</th>
        
    </tr>
    <tr>
        <td>Emne 2</th>
        <td>Game Design</th>
        <td>--/--/----</th>
        
    </tr>
    <tr>
        <td>Emne 3</th>
        <td>Det Her</th>
        <td>--/--/----</th>
        
    </tr>
</table>
</body>
</html>