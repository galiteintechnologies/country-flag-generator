<?php

namespace CountryFlagGenerator\src\Services;

class CountryInfoProvider {
    
    /**
     * @param string $countryCode
     * 
     * @return array
     */
    public static function findFlag($countryCode) {
        
        $countryList = array();
        include(__DIR__ . '/../../Resources/countryList.php');
        
        if(key_exists($countryCode, $countryList))
        {
            return [
                'name' => $countryList[$countryCode],
                'flag' => '<img src="blank.gif" class="flag flag-'.$countryCode.'" alt="'.$countryList[$countryCode].'" />'
                ];
        } else {
            
            return ["name" => "Country details not found. Please check your country code."];
        }
    }
    
}