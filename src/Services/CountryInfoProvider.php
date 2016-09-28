<?php

/*
 * This file is part of the Country Flag Generator
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
        
        if(key_exists($countryCode, $cityList))
        {
            return [
                'Name' => $countryList[$countryCode],
                'flag' => '<img src="blank.gif" class="flag flag-'.$countryCode.'" alt="'.$countryList[$countryCode].'" />'
                ];
        } else {
            
            return ["message" => "Country details not found. Please check your country code."];
        }
    }
    
}