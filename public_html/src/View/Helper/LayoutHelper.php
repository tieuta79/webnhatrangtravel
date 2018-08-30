<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Layout helper
 */
class LayoutHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function formatCurrency($currency, $symbol = '', $position = 0, $decimals = 0, $dec_point = ',', $thousands_sep = '.') {
        $currency = intval(trim($currency));
        $delimited = ' ';
        if ($position == 1) {
            $return = '<sup>' . $symbol . '</sup>' . $delimited . number_format($currency, $decimals, $dec_point, $thousands_sep);
        } else {
            $return = number_format($currency, $decimals, $dec_point, $thousands_sep) . $delimited . '<sup>' . $symbol . '</sup>';
        }
        return $return;
    }

    public function price_promotion($price, $percent) {
        if (!empty($price) && !empty($percent)) {
            return intval($price) - (intval($price) * intval($percent) / 100);
        }
        return 0;
    }

}
