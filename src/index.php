<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor PHP em Container</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="container mx-auto mb-3">
        <h1 class="text-capitalize fw-bold mb-4 mt-1 text-center">
            Servidor PHP em Container <?php echo getenv('life') ?? 'not found' ?>
        </h1>
        <form class="w-75 mx-auto p-4 bg-secondary-subtle rounded border border-2 border-secondary needs-validation" novalidate>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" required class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="invalid-feedback">
                    Por favor informe seu email!
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha:</label>
                <input type="password" required class="form-control" name="password" id="exampleInputPassword1">
                <div class="invalid-feedback">
                    Por favor informe sua senha!
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </main>

    <div class="container mx-auto">
        <div class="w-75 mx-auto p-4 bg-secondary-subtle rounded border border-2 border-secondary">

            <?php if (isset($_GET['email']) && isset($_GET['password'])): ?>
                <h4 class="text-center">Dados enviado do formulario</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                    <input type="text" disabled class="form-control bg-white" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_GET['email'] ?? '' ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label>
                    <input type="text" disabled class="form-control bg-white" name="password" id="exampleInputPassword1" value="<?= $_GET['password'] ?? '' ?>">
                </div>

            <?php else: ?>
                <h4 class="text-center">Por favor preencha o formulario</h4>
            <?php endif; ?>

        </div>

    </div>

    <script src="./js/main.js"></script>

</body>

</html>