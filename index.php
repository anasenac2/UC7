<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/home.css" rel="stylesheet" type="text/css">
    <link href="style/cardapio.css" rel="stylesheet" type="text/css">
    <link href="style/cardapio2.css" rel="stylesheet" type="text/css">
    <link href="style/sobre.css" rel="stylesheet" type="text/css">
    <link href="style/footer.css" rel="stylesheet" type="text/css">
    <script src="js/script.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Brigaderia Ali</title>
</head>

<body>
    <header>
        <div class="row flex-nowrap align-items-center">
            <div class="col-4 text-center pb-2">
                <a  class="logo" href="#inicio">
                    <img id="nav_logo"  class="rounded-circle" src="img/brigaderia.png">
                </a>
            </div>
            <div class="col-8 d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg nav-underline">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" style="color: #fd74ec;" href="?page=index">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#cardapio" >Cardápio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sobre">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?page=listar">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   

    <?php 
                    include("config.php");
                    switch(@$_REQUEST["page"]) {
                        case "cadastrar":
                            include("cadastrar.php");
                        break;
                        case "editar":
                            include("editar.php");
                        break;
                        case "listar":
                            include("listar.php");
                        break;
                        case "salvar":
                            include("salvar.php");
                        break;
                        default:
                        include("destaque.php");
                    }
                ?>
                <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>

</html>