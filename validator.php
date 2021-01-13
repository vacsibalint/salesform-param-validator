<?php 

$_GET_lower = array_change_key_case($_GET, CASE_LOWER);
$knownParams = [
    'name', 'telephone', 'invoice_name', 'invoice_vatnumber', 'invoice_zipcode', 'invoice_city', 'ship_name', 'ship_zipcode', 'ship_city', 'coupon', 'qty', 'sub'
];
$unknownParams = [];

foreach($_GET_lower as $param => $value){
    if(!in_array($param, $knownParams)){
        $unknownParams[$param] = $value;
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SalesForm - Form Validator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="robots" content="noindex" />
	<style type="text/css">
        body {
            color: #444444;
            background-color: #EEEEEE;
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 80%;
        }
        h1 {}
        h2 { font-size: 1.2em; }
        #page{
            background-color: #FFFFFF;
            width: 60%;
            margin: 24px auto;
            padding: 12px;
        }
        #header{
            padding: 6px ;
            text-align: center;
        }
        .header{ background-color: #3696cd; color: #FFFFFF; }
        #content {
            padding: 4px 0 24px 0;
        }
        #footer {
            color: #666666;
            background: #f9f9f9;
            padding: 10px 20px;
            border-top: 5px #efefef solid;
            font-size: 0.8em;
            text-align: center;
        }
        #footer a {
            color: #999999;
        }
    </style>

    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
    </style>
</head>
<body>
    <div id="page">
        <div id="header" class="header">
            <img src="https://salesform.hu/images/salesform.png"/>
        </div>
        <div id="content" style="margin-top: 5px;">
            <center>
                <h4>Tesztelt URI<br><?= $_SERVER['REQUEST_URI'] ?></h4>
                <hr>
                <p>Teljes cikk és leírás / know-how: <a href="https://www.rendelesiurlap.hu/cikk/salesform-url-parameterek" target="_blank">https://www.rendelesiurlap.hu/cikk/salesform-url-parameterek</a>
                <p>Amennyiben az űrlapod kitöltése után megjelenik egy "Ismeretlen átadott paraméterek" rész,<br>vagy az "Ellenőrzés" rublikában "<span style="color: red;"><span style="color: red;">✘</span></span>"-et látsz, az azt jelenti, hogy az a paraméter nem lett átadva, vagy a SalesForm rendszere nem tudta felismerni.</p>
                <p style="margin-bottom: 25px;">Ha látod az "Ellenőrzés" rublikában az általad kitöltött adatokat akkor biztos lehetsz abban, hogy a SalesForm rendszere is megfogja majd kapni azokat.</p>
            </center>

            <center><table class="tg" style="width: 90%;">
                <thead>
                    <tr>
                        <th class="tg-7btt">Paraméter</th>
                        <th class="tg-7btt">Leírás</th>
                        <th class="tg-amwm">Ellenőrzés</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-c3ow">name</td>
                        <td class="tg-c3ow">Megrendelő neve</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['name'])) ? $_GET_lower['name'] : '<span style="color: red;"><span style="color: red;">✘</span></span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">telephone</td>
                        <td class="tg-c3ow">Megrendelő telefonszáma</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['telephone'])) ? $_GET_lower['telephone'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">invoice_name</td>
                        <td class="tg-c3ow">Számlázási adatok Név</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['invoice_name'])) ? $_GET_lower['invoice_name'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">invoice_vatnumber </td>
                        <td class="tg-c3ow">adószám</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['invoice_vatnumber'])) ? $_GET_lower['invoice_vatnumber'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">invoice_zipcode</td>
                        <td class="tg-c3ow">Számlázási adatok -> Irányítószám</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['invoice_zipcode'])) ? $_GET_lower['invoice_zipcode'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">invoice_city</td>
                        <td class="tg-c3ow">Számlázási adatok -> Város</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['invoice_city'])) ? $_GET_lower['invoice_city'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">invoice_street</td>
                        <td class="tg-c3ow">Számlázási adatok -> Utca,házszám</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['invoice_street'])) ? $_GET_lower['invoice_street'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">ship_name</td>
                        <td class="tg-c3ow">Szállítási adatok -> Név</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['ship_name'])) ? $_GET_lower['ship_name'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">ship_zipcode</td>
                        <td class="tg-c3ow">Szállítási adatok -> Irányítószám</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['ship_zipcode'])) ? $_GET_lower['ship_zipcode'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">ship_city</td>
                        <td class="tg-c3ow">Szállítási adatok -> Város</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['ship_city'])) ? $_GET_lower['ship_city'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">ship_street</td>
                        <td class="tg-c3ow">Szállítási adatok -> Utca,házszám</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['ship_street'])) ? $_GET_lower['ship_street'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">coupon</td>
                        <td class="tg-c3ow">kupon kedvezmény kód</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['coupon'])) ? $_GET_lower['coupon'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">qty</td>
                        <td class="tg-c3ow">mennyiség</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['qty'])) ? $_GET_lower['qty'] : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">sub</td>
                        <td class="tg-c3ow">Automatikusan posztolja az űrlapot?</td>
                        <td class="tg-baqh"><?= (isset($_GET_lower['sub']) && $_GET_lower['sub'] == 1) ? 'Igen' : '<span style="color: red;">✘</span>' ?></td>
                    </tr>
                </tbody>
            </table></center>

            <?php if(count($unknownParams) != 0): ?>
            <h2 align="center" style="color: darkred;">Ismeretlen paraméterek: </h2>
            <center><table class="tg" style="width: 90%;">
                <thead>
                    <tr>
                        <th class="tg-7btt">Paraméter</th>
                        <th class="tg-7btt">Érték</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($unknownParams as $param => $value): ?>
                        <tr>
                            <td class="tg-c3ow"><?= $param ?></td>
                            <td class="tg-c3ow"><?= $value ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table></center>
            <?php endif; ?>

        </div>
        <div id="footer">
            <p>Developer @<a href="https://www.facebook.com/djremotee" target="_blank">Vacsi Bálint</a></p>
        </div>
    </div>
</body>
</html>
