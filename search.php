<!-- NOTES: SEARCH PRIMA KLJUCNU REC I TIP KAO I NEKE SPECDIJALNE KARAKTERE -->
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
    <!-- CSS for search pages -->

</head>

<body>

    <?php
//    include("header.html");
    //TODO: IZ BAZE POKUPITI KRATAK OPIS
    //SVE MERE
    //NASLOV
    //PO TOME VRŠITI PRETRAGU
    //SVE SPOJITI U JEDAN VELIKI STRING
    //ENDLESS SCROLL
    //PRIKAZATI SAMO DEO REZULTATA (10, 50, 100)
    //FIXME: PRIVREMENO, REALIZOVATI U PYTHON-u
    $mystring = 'marko';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);
    if($pos > -1){
        print($mystring);
    }
    else{
        print("results not found");
    }
?>
</body>

</html>
