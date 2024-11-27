<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/r.webp" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh+oOVwVF4tpIr+RxEQhxROYVqLTa1RIbnfCe59XIcW3gGNFMAyT5AykVcUp<\ctrl61>wM4d/381fQ4DXw"  
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f4f7fa;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #ffffff;
            border-radius: 8px;
            padding: 3rem;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container h3 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: #3d4a6a;
        }

        .form-control {
            border-radius: 25px;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1.25rem;
            font-size: 1rem;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            font-size: 0.875rem;
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-top: 1rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .login-container {
                padding: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h3><i class="fa-regular fa-hospital" style="color: #007bff;"></i> Sistema Clínico</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu usuário">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
