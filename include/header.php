
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="footer.css">
    <title>menu</title>
    <style type="text/css">
*{
    margin: 0px;
    padding: 0px;
     box-sizing: border-box;
     font-family: sans-serif;
}



	body{
    margin: 0;
    font-family: sans-serif;

}

header{
    width: 100%;
    background: #4e94ab;
}

#btn-menu{
    display: none;

}

header label{
    display: none;
    width: 30px;
    height:30px;
    padding: 10px;
    border-right:1px solid #fff;
}

#btn-menu{
    display: none;
}

header label:hover{
    cursor: pointer;
    background:  rgba(201, 26, 26, 0.5);
}
.menu ul {
margin: 0;
list-style: none;
padding: 0;
display: flex;
justify-content: center;
}
.menu li {
text-align: center;
flex-grow: 1;
border-right: 2px solid white;
transition: all 0.5s;
}

.menu li:hover{
background: rgba(0,0,0,0.3);
}

.menu li a {
display: block;
padding: 15px 20px;
color: #fff;
text-decoration: none;
}

@media (max-width:768px){
header label{
display:block
}
.menu{
position: absolute;
background: #4E94ab;
width: 70%;
margin: -70%;
}
.menu ul{
flex-direction: column;

}
.menu li {
border-top: 3px solid white;
}
}
#btn-menu:checked ~ .menu {
margin: 0;
}
*{
font-family: sans-serif;
border-radius: 5px;
}
.index{
background: url('2.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;

}
.demo {

position: absolute;

border: 1px solid black;
justify-content: space-around;
border-radius: 60px;
height: 750px;
position: center;
width: 580px;  

left: 50px;

}
.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
   background: black; 
}
.colum3 label {
    font-size: 12px;
color: white;
}
h1 {
  color: white;
}



  </style>
</head>
<body>
    <header>

    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img src="5.png" alt="" width="30">></label>

    <nav class="menu">
        <ul>
            <li><a href="inicio.php">inicio</a></li>
            <li><a href="servicios.php">servicios</a></li>
            <li><a href="producto.php">productos</a></li>
            <li><a href="notas.php">notas</a></li>
            <li><a href="contactanos.php">contactanos</a></li>
        </ul>
    </nav>

    </header>







