<?php

namespace Necessarylion\ECB;

class XChange {

  const XML = "http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";

  /**
   * @param string $base <BaseCurrency>
   * @param string $currency
   */
  public function get($baseCurrency, $currency) {
    $currency         = strtoupper($currency);
    $baseCurrency     = strtoupper($baseCurrency);
    if ($currency == $baseCurrency) {
      return 1;
    }
    $rates = $this->_get();
    return (1 / $rates[$baseCurrency]) * $rates[$currency];
  }

  /**
   * @param string $base
   */
  public function getAll($baseCurrency) {
    $baseCurrency  = strtoupper($baseCurrency);
    $rates = $this->_get();
    $ret   = [];
    foreach ($rates as $currency => $value) {
      $ret[$currency] = (1 / $rates[$baseCurrency]) * $value;
    }
    return $ret;
  }

  /**
   * helper function to call XML
   */
  protected function _get() {
    $XMLContent   = file(self::XML);
    $rates        = [];
    $rates['EUR'] = 1;
    if (is_array($XMLContent)) {
      foreach ($XMLContent as $line) {
        if (preg_match("/currency='([[:alpha:]]+)'/", $line, $currencyCode)) {
          if (preg_match("/rate='([[:graph:]]+)'/", $line, $rate)) {
            $rates[$currencyCode[1]] = $rate[1];
          }
        }
      }
    }
    return $rates;
  }
}