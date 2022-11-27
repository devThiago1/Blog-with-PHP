<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"
    >
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- TITLE -->
    <title>Blog/Thiago Calmon</title>
</head>
<body>
    <!-- NAVBAR -->
    <?php include ('./components/nav.php'); ?>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide1.jpg" class="d-block w-100 opacity-60">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.jpg" class="d-block w-100 opacity-60" >
            </div>
            <div class="carousel-item">
                <img src="images/slide3.jpg" class="d-block w-100 opacity-60" >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>   
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">DESTAQUE</h5>
                            <p class="card-text">Chefe quebrou os servidores com um pouco de descuido de digitação, 
                                deixando os técnicos para resolver o problema no final do domingo</p>
                        </div>
                    </div>
                </div>
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Google e Microsoft adicionam mais energia renovável para datacenters</h5>
                            <p class="card-text">Ambos anunciam acordos de compra de energia verde para CDs do Reino Unido e da Irlanda, 
                                enquanto as preocupações europeias com a energia continuam</p>
                        </div>
                    </div>
                </div>
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A UE ainda está se preparando para o financiamento da European Chips Act</h5>
                            <p class="card-text">Os líderes dão apoio unânime ao desbloqueio de € 43 bilhões - 
                                mas a indústria diz que não é nada</p>
                        </div>
                    </div>
                </div>
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MariaDB compra especialista geoespacial CubeWerx</h5>
                            <p class="card-text">Longa lista de contribuições de padrões abertos faz parte da 
                                jornada para a pilha GIS baseada em REST, dizem as empresas</p>
                        </div>
                    </div>
                </div>
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Oracle e IBM estão perdendo terreno para bancos de dados locais na China, diz IDC</h5>
                            <p class="card-text">Um mercado em queda na marcha da China em direção à autossuficiência tecnológica, 
                                um bazilhão a mais pela frente.</p>
                        </div>
                    </div>
                </div>
                <div class="col gy-5">
                    <div class="card">
                        <img src="images/card7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">As pessoas ainda parecem pensar que seus carros sofisticados são totalmente autônomos</h5>
                            <p class="card-text">Isso ocorre apesar de um histórico de software de assistência envolvido em falhas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- FOOTER -->
    <?php include ('./components/footer.php'); ?>
</body>
</html>