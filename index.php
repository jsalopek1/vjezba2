<?php
// Koristenje varijabla $
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/Da_Vincijev_kod";  // link je neispravan
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Davincijev kod">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>

    <p>
        <a href="<?php echo $link; ?>" target="_blank">Link na wikipediju</a>
    </p>

<!-- vjezba 2 - Davincijev kod -->


</body>
</html>
