
<?php if (10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        Hello Page
    </body>
</html>

<?php endif; ?>



<?php

    if (10 > 10) :
        echo "First";
    elseif (10 > 10) :
        echo "Second";
        echo "Second";
    else:
        echo "Last";
        echo "Last";
    endif;

?>