<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema | Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h3><b>Sistema</b></h3>
                        </div>
                        <p class="text-center">Faça login para iniciar sua sessão</p>

                        <!-- Formulário de login -->
                        <?php echo form_open('auth/login/'); ?>
                        <div class="form-group">
                            <label for="username">Usuário</label>
                            <div class="input-group">
                                <input type="text" name="username" class="form-control" placeholder="Usuário" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">@</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="Senha" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        <?php echo form_close(); ?>

                        <p class="mt-3 text-center">
                            <a href="forgot-password.html">Esqueci minha senha</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Opcional, se precisar de interatividade) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>