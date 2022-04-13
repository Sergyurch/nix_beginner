<!DOCTYPE html>
<html>
    <head>
        <title>Урок 1</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .width-115px {
                width: 115px;
            }

            .height-402px {
                height: 402px;
            }
        </style>
    </head>
    <body>
        <div class="container min-vh-100 d-flex flex-column">
            <?php
                require_once 'inc/header.php';
                require_once 'inc/nav.php';
            ?>
            <main class="p-3 flex-fill d-flex justify-content-center flex-wrap">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div class="border border-secondary width-115px height-402px">
                        <?php for ($j = 1; $j <= 10; $j++): ?>
                            <div class="p-2">
                                <?php
                                    $line = "$i * $j = " . $i * $j;
                                    echo str_replace(
                                            [1,2,3,4],
                                            [
                                                '<span class="text-danger">1</span>',
                                                '<span class="text-success">2</span>',
                                                '<span class="text-warning">3</span>',
                                                '<span class="text-primary">4</span>'
                                            ],
                                            $line
                                    );
                                ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </main>
            <?php require_once 'inc/footer.php'; ?>
        </div>
    </body>
</html>

