<!doctype>
<html>
<head>
    <title>MyStudio, admin</title>
    <meta content='http-equiv' content-type='text/html'/>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/img_preview.js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/body_load.js"></script>    
    <style>
        body {
            font-family:"Open Sans Condensed", sans-serif;
            background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color:#8e0e00;
        }
        table{
            font-size:16px;
            font-weight:bold;
            left:-3%;
        }
        .options_zone{
            font-weight:bold;
            color:#decba4;
            border:0px;
            height:10%;
            width:10%;
            border-collapse: collapse;
            -moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;
        }
        .footer_zone{
            
            border-collapse: collapse;
            left:-15px;
        }
    </style>
</head>
        <?php echo $i; ?>
<body style="width:98%">
    <table style="width:101.45%;height:100%"><thead style="width:100%;height:8%"><tr><td colspan="2"style="float:right;text-align:center;vertical-align:top">Bienvenue à toi jeune éphèbe</td></tr></thead>
    <tr><?php if(is_dir('./admin_navbar.php')){include('./admin_navbar.php');} ?></tr>
    <tr style="height:10%"><td class="body_zone"style="text-align:center;float:middle">Lorem Ipsum Dolor Sit Amet</td>
    <td class="options_zone" rowspan="2"style="text-align:center">
        <ul style="margin: 0 0 3px 0; padding:5px;">
            <li><div class="msg"><input class = "button" action="index.php?page=administration" type="submit" name="add_artist" method="POST" value="Nouvel Artist"></div></li>
            <li><div class="msg"><input class = "button" action="index.php?page=administration" type="submit" name="add_album" method="POST" value="Nouvel Album"></div></li>
            <li><div class="msg"><input class = "button" action="index.php?page=administration" type="submit" name="remove_album" method="POST" value="Supprimer un Album"></div></li>
            <li><div class="msg"><input class = "button" action="index.php?page=administration" type="submit" name="remove_artist" method="POST" value="Supprimer un Artiste"></div></li>
        </ul>
    </td></tr>
    <tr><td style="text-align:center">Petites infos</td></tr>
    <tfoot class="footer_zone" style="width:101.45%;height:10%;margin-left:-15px"><tr><td colspan="2"style="text-align:center">Footer
    il semble que sid ait compris bootstrap et soit capable d'appliquer le concept a plein plein d echoses fksjlqvfqsvfhvsqdvjsjFGM fsjqgfjkq fskjqv  fuidgsfjs gffio mdgqjf gd fgs mgf sQG FODGMFKDJ g fsGF Fmgf MFG FMf MGF mg</td></tr></tfoot>
    </table>