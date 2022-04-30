<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Leads</title>
</head>
<body>
<header>
        <div class ="container">
            <div class="logo">
                <h1>PAINEL <br><font color="#0094ff"><b >ADMINISTRATIVO</b></font></h1>
            </div>
            <nav class="menu">
                <ul>
                    <li> <a href="#">Inicio</a></li>
                    <li> <a href="https://www.linkedin.com/in/orafinhasilva/">Sobre</a></li>
                    <li> <a href="https://www.linkedin.com/in/orafinhasilva/">Contato</a></li>
                </ul>
             </nav>
    
        </div>
    </div>
      
    </header>
    <div class="sub">
        <marquee direction="left" width="450" height="350" behavior="alternate">

        <div id="data_atual"></p>
<script>
texto = "Data atual: ";
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("data_atual").innerHTML = texto  +  day + "/" + month + "/" + year;
</script>

        </marquee> 
    </div>
