# PHP-Client
GenderAPI.io PHP Composer package.

Website: [https://genderapi.io](https://genderapi.io)

API Docs: [https://genderapi.io/api-docs](https://genderapi.io/api-docs)

# How to Install

```bash
composer require genderapi/php-client
```

```php
<?php
 use GenderApi\GenderApi;

 $genderApi = new GenderApi('Your API Key');
 $getGender = $genderApi->findGender('britney');

 echo $getGender;

 // OR, Get Result
 $getResult = $genderApi->result('britney');
 print_r($getResult);
```
