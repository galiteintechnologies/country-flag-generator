<?php

/*
 * This file is part of the Assets Finder Package
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
     * @return string
     */
    public function getFlag($countryCode) {
        
        if(empty($countryCode)) {
            return "Please provide country code";
        }
        
        return CountryInfoProvider::findFlag($countryCode);
    }
    
}
