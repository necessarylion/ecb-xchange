## European Central Bank Exchange Rate

`composer require necessarylion/ecb-xchange`


## Usage

```
<?php

use Necessarylion\ECB\XChange;

require __DIR__.'/vendor/autoload.php';

$xChange = new XChange;

$result = $xChange->get('usd', 'thb');

print_r($result);
result - 31.270219649242

--------------------------------------------

$result = $xChange->getAll('usd');

print_r($result);
result  - 
[
  [EUR] => 0.85135365230717
  [USD] => 1
  [JPY] => 110.7015154095
  [BGN] => 1.6650774731824
  [CZK] => 22.207560020432
  [DKK] => 6.3322833304955
  [GBP] => 0.72531074408309
  [HUF] => 308.05380555083
  [PLN] => 3.9238038481185
  [RON] => 4.1791248084454
  [SEK] => 8.7479141835518
  [CHF] => 0.94491741869573
  [ISK] => 126.59628809808
  [NOK] => 8.5482717520858
  [HRK] => 6.4451728247914
  [RUB] => 76.276519666269
  [TRY] => 8.1647369317214
  [AUD] => 1.3195981610761
  [BRL] => 5.6316192746467
  [CAD] => 1.2588966456666
  [CNY] => 6.5720245189852
  [HKD] => 7.7767750723651
  [IDR] => 14531.099948919
  [ILS] => 3.3330495487826
  [INR] => 73.410097054316
  [KRW] => 1130.9041375787
  [MXN] => 20.329644134173
  [MYR] => 4.1454963391793
  [NZD] => 1.4307849480674
  [PHP] => 48.591861059084
  [SGD] => 1.3452239060106
  [THB] => 31.270219649242
  [ZAR] => 14.64958283671
]

```

#result 