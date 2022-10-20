# dhl-polska
[![GitHub version](https://img.shields.io/badge/version-1.0.0-lightgrey)]()
[![GitHub license](https://img.shields.io/github/license/kerogos/dhl-polska)](https://github.com/kerogos/dhl-polska/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/kerogos/dhl-polska)](https://github.com/kerogos/dhl-polska/issues)

[język polski](https://github.com/kerogos/dhl-polska#polski)
[english](https://github.com/kerogos/dhl-polska#english)
## polski
### Opis
Pakiet jest wraperem do Laravela do obsługi webapi2 z DHLa [dokumentacja metod](https://dhl24.com.pl/pl/webapi2/doc/index.html).
Pakiet działa z Laravelem >= 7.x
### Instalacja
W projekcie uruchom
```shell
composer require kerogos/dhl-polska
```
Należy następnie skopiować plik konfiguracyjny wykonując następującą metodę
```shell
php artisan vendor:publish --provider=kerogos/dhl-polska/DhlPolskaServiceProvider --tag=config
```
w pliku .env należy wypełnić następujące pola
```text
DHL_SANDBOX=true/false
DHL_LOGIN_API=login_do_api
DHL_PASSWORD_API=hasło_do_api
```
DHL_SANDBOX przyjmuje wartość true, jeżeli ma być podłączenie do testowego API, jeżeli false to do produkcyjnego. Domyślnie jest false.

### Użycie
```php
use Kerogos\DhlPolska;
/*(...)*/
$api = new Kerogos\DhlPolska\Services\DHL24WebapiService();
$response = $api->getVersion(new Kerogos\DhlPolska\DTO\GetVersion())
```
W przypadku klas wymagających uwierzytelnienia (wypełnienia struktury AuthData), można to pominąć.

### Licencja
Pakiet jest na licencji Boost Software License - Version 1.0 

## english
### Description
This is Laravel package for Poland DHL webapi2 [documentation for existing methods](https://dhl24.com.pl/en/webapi2/doc/index.html).
Package works on Laravel 7 and above.
### Installation
In your project run fallowing command
```shell
composer require kerogos/dhl-polska
```
Next publish config files:
```shell
php artisan vendor:publish --provider=kerogos/dhl-polska/DhlPolskaServiceProvider --tag=config
```
In .env fie please add this directives
```text
DHL_SANDBOX=true/false
DHL_LOGIN_API=your_login_to_api
DHL_PASSWORD_API=your_password_to_api
```
DHL_SANDBOX if is true then will be use sandbox api, if false production api. Default false.

### Usage
```php
use Kerogos\DhlPolska;
/*(...)*/
$api = new Kerogos\DhlPolska\Services\DHL24WebapiService();
$response = $api->getVersion(new Kerogos\DhlPolska\DTO\GetVersion())
```
AuthData can be skipped in DTO class.

### Licencja
Package is provided on Boost Software License - Version 1.0 
