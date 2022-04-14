<!DOCTYPE html>
<html>
    <head>
        <title>Урок 1</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container min-vh-100 d-flex flex-column">
            <?php
                require_once 'inc/header.php';
                require_once 'inc/nav.php';
            ?>

                <?php if ( isset($_GET['string']) ): ?>
                    <main class="p-3 flex-fill">
                        <div><a href="lesson-3.php">Назад</a></div>
                        <h1 class="text-center">Результат</h1>
                        <div class="text-center"><?= strrev($_GET['string']) ?></div>
                    </main>
                <?php else: ?>
                        <main class="p-3 flex-fill d-flex flex-column justify-content-center">
                            <form method="GET" class="text-center">
                                <div class="mb-3">
                                    <label for="string" class="form-label">Введите строку</label>
                                    <input type="text" class="form-control" id="string" name="string">
                                </div>
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        </main>
                <?php endif; ?>
            </main>
            <?php require_once 'inc/footer.php'; ?>
        </div>
    </body>
</html>

