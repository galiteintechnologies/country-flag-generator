<?php

/*
 * This file is part of the Country Flag Generator
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CountryFlagGenerator;

use CountryFlagGenerator\src\Services\CountryInfoProvider;

class CountryHelper {
    
    /**
     * @param string $countryCode
     * 
     * @return array
     */
    public function getFlag($countryCode) {
        
        if(empty($countryCode)) {
            return ["name" => "Please provide country code"];
        }
        
        return CountryInfoProvider::findFlag($countryCode);
    }
    
}
