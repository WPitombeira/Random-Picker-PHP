<?php

if (isset($_GET['return'])){
    if ($_GET['return'] == 'success'){
        $success = '';
        $fail = "display: none";
    }
} else {
    $success = "display: none";
    $fail = "display: none";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Random Picker</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://www.tamec.com.br/site/lib/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container container-fluid">
        <h1 class="text-center">PHP Random Picker</h1>
        
        <div class="d-flex justify-content-center">
            <div class="shadow p-3 mb-5 col-6 bg-white rounded">
                <form action="inscricao.php" id="subscriptionForm" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control col-md-12" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="id" id="id" placeholder="Identification" class="form-control col-md-12" required>
                        </div>
                    <div id="buttons">
                        <button id="cancelar" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Participate</button>
                    </div>
                </form>
                <div id="form-messages">
                    <div id="success" style="<?=$success?>">Your subscription was successfully delivered</div>
                    <div id="fail" style="<?=$fail?>">We couldn't submit your subscription</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.tamec.com.br/site/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.tamec.com.br/site/lib/jquery/jquery-migrate.min.js"></script>
</body>
</html>
