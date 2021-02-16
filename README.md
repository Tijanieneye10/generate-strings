# Eneye String Generator
[![Latest Stable Version](https://poser.pugx.org/eneye/generate-string/v)](//packagist.org/packages/eneye/generate-string) [![Total Downloads](https://poser.pugx.org/eneye/generate-string/downloads)](//packagist.org/packages/eneye/generate-string) [![Latest Unstable Version](https://poser.pugx.org/eneye/generate-string/v/unstable)](//packagist.org/packages/eneye/generate-string) [![License](https://poser.pugx.org/eneye/generate-string/license)](//packagist.org/packages/eneye/generate-string)

## Description
This library is written in  PHP(PHP 7+) and it helps to generate random unique strings by providing the length and the character types e.g length = 8 and characters = "abcd123"
eight-length of strings will be randomly generated from that character

## Install via "composer require"
```shell
composer require eneye/generate-string
```
## Requirements and Recommendations
No extensions are required to run this library.
This library can be used to generate unique strings for users where necessary.

## Usage
```php
use EneyeGenerateString\Generate;

require_once __DIR__ . '/vendor/autoload.php'; 

$generate = new EneyeGenerateString\Generate;
$length = 5;
$characters = "eneye12345";
$output = $generate->generateString($length, $characters );
// This $output will be unique generate strings with 5 characters
```
<!-- display the social media buttons in your README -->

[![alt text][1.1]][1]
[![alt text][2.1]][2]


[1.1]: http://i.imgur.com/tXSoThF.png (twitter icon with padding)
[2.1]: http://i.imgur.com/P3YfQoD.png (facebook icon with padding)


[1]: https://www.twitter.com/TijaniEneye
[2]: https://www.facebook.com/usman.tijani2

