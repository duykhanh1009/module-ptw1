<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

    require_once 'libs/scss.inc.php';

    use ScssPhp\ScssPhp\Compiler;

    $scss = new Compiler();

    $scss->setImportPaths('sass/');

    $styles = $scss->compile('@import "1399-styles.scss";');

    $css = fopen('css/1399-styles.css','w');
    
    fwrite($css,$styles);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/1399-styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  
    <script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo $url_path ?>/js/scripts.js"></script>
    <title>Document</title>
</head>
<body>
   <?php
     include "./1399-clothing.php";
   ?>
</body>
</html>