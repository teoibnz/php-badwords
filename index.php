<?php 
    $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, consequuntur tenetur! Dignissimos repellat iste deleniti sequi veritatis. Quo quas mollitia voluptates eos exercitationem, earum, possimus aut saepe harum sunt rem.';
    // $array = explode( ' ', $paragraph);
    // var_dump($array);
    $bannedWord = $_GET['banned'];
    $paragraph = str_replace($bannedWord, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my First php test</title>
</head>
<body>
    <p>
        <?php echo $paragraph ?>
    </p>
    <span> 
        The paragraph length is : <?php echo strlen($paragraph) ?>
    </span>
</body>
</html>