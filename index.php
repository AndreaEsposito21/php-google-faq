<?php
    $faq = [
        'test-a' => [
            'domande' => "domandona1?",
            'risposte' => "risposta1 bla bla bla bla bla"
        ],
        'test-b' => [
            'domande' => "domandona2?",
            'risposte' => "risposta2 bla bla bla bla bla"
        ],
        'test-c' => [
            'domande' => "domandona3?",
            'risposte' => "risposta3 bla bla bla bla bla"
        ],
        'test-d' => [
            'domande' => "domandona4?",
            'risposte' => "risposta4 bla bla bla bla bla"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <header></header>

        <main>
            <?php foreach($faq as $test => $value) { ?>
                <h2>
                    <?php echo $value['domande']; ?>
                </h2>

                <p>
                    <?php echo $value['risposte']; ?>
                </p>
            <?php } ?>
        </main>
    </div>
</body>
</html>