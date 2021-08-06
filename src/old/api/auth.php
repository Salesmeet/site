<?
header("Access-Control-Allow-Origin: *");
// header('Content-type: application/json');
$url = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

$referer = $_POST['referer'];
if ($referer=="") {
  $url = $referer;
}

$url = "www.scott-sports.com";

if ($url=="") {
    echo "Non autorizzato - 1";
    exit;
}

?>
