<?php
session_start();
if (empty($_SESSION)) {
    echo "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/r.webp" type="images.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema de Controle Clínico</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    /* Fundo e Layout Geral */
    body {
        background-image: url('4.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        font-family: 'Arial', sans-serif;
        display: flex;
        flex-direction: column;
    }
/* Rodapé com botão fixo */
.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    background-color: #fff; /* Cor de fundo preta para combinar com a navbar */
    padding: 10px 0;
}

.footer a {
    color: #fff;
    padding: 0.5rem 2rem;
    border-radius: 10px;

}



 /* Navbar Personalizada */
nav.navbar {
    background-color: #000; /* Cor de fundo preta */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.navbar-brand {
    color: #000 !important; /* Cor branca para a marca SCC */
    font-weight: bold;
}

.nav-link {
    color: #000 !important; /* Cor branca para os links */
}

.nav-link:hover {
    color: #000 !important; /* Cor azul para o hover */
}

.navbar-nav .nav-item .nav-link.active {
    color: #000 !important; /* Cor azul para o item ativo */
}

.navbar-nav .nav-item.dropdown .nav-link.dropdown-toggle {
    color: #000 !important; /* Cor branca para o link dropdown */
}

.navbar-nav .dropdown-menu .dropdown-item {
    color: #000 !important; /* Cor preta para os itens do dropdown */
}

/* Responsividade */
@media (max-width: 768px) {
    .navbar-collapse {
        background-color: #2196F3; /* Cor de fundo azul na navbar em dispositivos móveis */
    }

    .nav-link {
        margin-bottom: 1rem;
    }

    .footer a {
        font-size: 0.9rem;
        padding: 0.5rem 1.5rem;
    }
}


    /* Responsividade */
    @media (max-width: 768px) {
        .dashboard-card {
            padding: 1.5rem;
            margin: 1rem;
        }

        .card-header {
            font-size: 1.5rem;
        }

        .btn-primary {
            padding: 0.75rem 1.2rem;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-collapse {
            background-color: #2196F3;
        }

        .nav-link {
            margin-bottom: 1rem;
        }

        .footer a {
            font-size: 0.9rem;
            padding: 0.5rem 1.5rem;
        }
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">SCC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa-solid fa-house"></i> Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user-doctor"></i> Médico 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-medico"><i class="fa-solid fa-calendar-plus"></i> Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-medico"><i class="fa-solid fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Paciente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-paciente"><i class="fa-solid fa-calendar-plus"></i> Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-paciente"><i class="fa-solid fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-calendar-check"></i> Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-consulta"><i class="fa-solid fa-calendar-plus"></i> Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-consulta"><i class="fa-solid fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <?php 
            echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>
                </form>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <?php
                include('config.php');
                switch (@$_REQUEST['page']) {
                    case 'cadastrar-medico':
                        include('cadastrar-medico.php');
                        break;
                    case 'editar-medico':
                        include('editar-medico.php');
                        break;
                    case 'listar-medico':
                        include('listar-medico.php');
                        break;
                    case 'salvar-medico':
                        include('salvar-medico.php');
                        break;
                    case 'cadastrar-paciente':
                        include('cadastrar-paciente.php');
                        break;
                    case 'editar-paciente':
                        include('editar-paciente.php');
                        break;
                    case 'listar-paciente':
                        include('listar-paciente.php');
                        break;
                    case 'salvar-paciente':
                        include('salvar-paciente.php');
                        break;
                    case 'cadastrar-consulta':
                        include('cadastrar-consulta.php');
                        break;
                    case 'editar-consulta':
                        include('editar-consulta.php');
                        break;
                    case 'listar-consulta':
                        include('listar-consulta.php');
                        break;
                    case 'salvar-consulta':
                        include('salvar-consulta.php');
                        break;
                    default:
                        include('home.php');
                }
                ?>
            </div>
        </div>
    </div>


    

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
