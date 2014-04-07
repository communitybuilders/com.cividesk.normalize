<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[0-379]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[0-379]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[0-379]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          0(?:
            16|
            67|
            88
          )|
          1(?:
            006|
            16\\d{3}|
            [3-7]\\d{2}
          )|
          20\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '116111',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            18\\d{2}|
            2\\d{1,4}
          )|
          2(?:
            2\\d{1,4}|
            [3-9]\\d{3,4}
          )|
          [379]\\d{4,5}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '23456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '
          08[58]|
          112
        ',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '112',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          0(?:
            1[0-26]|
            6[0-27]|
            8[058]|
            9[12]
          )|
          1(?:
            0[03-57]\\d{1,3}|
            1(?:
              2|
              6(?:
                000|
                111
              )|
              8\\d{2}
            )|
            2\\d{1,4}|
            3(?:
              [34]|
              \\d{2}
            )|
            7(?:
              7|
              \\d{2}
            )|
            [4-689]\\d{2}
          )|
          2(?:
            [01]\\d{4}|
            2\\d{1,4}|
            [357]\\d{3}|
            80\\d{2}
          )|
          3[357]\\d{3}|
          [79]9[57]\\d{3}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '010',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => '
          0(?:
            [16][0-2]|
            80|
            9[12]
          )|
          21\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '211234',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            2\\d{1,4}|
            3[34]|
            77
          )|
          22\\d{1,4}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '123',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'ES',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
/* EOF */