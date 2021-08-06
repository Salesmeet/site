<?
include("auth.php");
include("../common/calendar.php");
$calendar = new calendar();
$json = $calendar->syncCalendar($url);
echo $json;
/*
$companyInfo = $db->getCompanyInfo($site);
if (count($companyInfo)>0) {
    //print_r($companyInfo);
    echo(json_encode($companyInfo));
}
*/

?>
