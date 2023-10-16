<?php

class AddressManager
{
    private $addresses = ["209.131.36.159", "216.58.213.174"];

    // public function outputAddress($resolve)
    // {
    //     foreach ($this->addresses as $address) {
    //         echo $address;
    //         if ($resolve) {
    //             echo " (" . gethostbyaddr($address) . ")";
    //         }
    //         echo "<br>";
    //     }
    // }
    public function outputAddress(bool $resolve)
    {
        foreach ($this->addresses as $address) {
            echo $address;
            if ($resolve) {
                echo " (" . gethostbyaddr($address) . ")";
            }
            echo "<br>";
        }
    }
}

$manager = new AddressManager();
$manager -> outputAddress(false);


// XML postavke za resolvedomains
// XML postavke za resolvedomains
$xml = simplexml_load_string('<settings><resolvedomains>false</resolvedomains></settings>');
$resolve = strtolower((string) $xml->resolvedomains) === "true"; // Konvertuje "true" u true, sve ostalo će biti false

// $manager = new AddressManager();
// $manager->outputAddress($resolve);


?>