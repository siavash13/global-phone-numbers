<?php
    require 'lib\Countries.php';
    use MSISDN\Country_codes\Countries;

    $number = "12345566";
    $countries=new Countries();
    $countriesCodes = $countries->getCountryInformation();
foreach ($countriesCodes as $key => $value) {
    var_dump($key);
        //var_dump($value);
    echo "<br />";
}
    getNumberDetail($number, $countriesCodes);

function getNumberDetail($number, $countriesCodes)
{
    for ($i = 1; $i < 5; ++$i) {
        echo 'first '.substr($number, 0, $i);
        echo "count is " . substr($number, $i, strlen($number));
        if (array_key_exists(substr($number, 0, $i), $countriesCodes)) {
            echo 'Found';
            echo 'Country code : ' . substr($number, 0, $i);
            echo 'Number : ' . substr($number, $i, strlen($number));
        } else {
            echo 'Not Found';
        }
    }
}
