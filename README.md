# coderetreat-php-sandbox
Sandbox pro snadné spouštění testů v PHP

## Co si nainstalovat
- git - http://git-scm.com/downloads
- PHP - http://php.net/downloads.php, nebo přes WAMP, XAMP, nebo cokoli jiného
- PHPUnit - https://phpunit.de/manual/current/en/installation.html (nejjednodušší je asi instalace přes composer https://phpunit.de/manual/current/en/installation.html#installation.composer, https://getcomposer.org/doc/00-intro.md#installation-windows)

## Jak to zprovoznit
naklonuj si git repozitář
```
git clone https://github.com/GDGJihlava/coderetreat-php-sandbox.git
``` 
přesuň se do složky s repozitářem
```
cd coderetreat-php-sandbox/
``` 

## Spuštění testů
testy spustíš příkazem
```
phpunit
``` 

## A co to vlastně umí?
Vlastně nic moc, je to jen základní prostředí, ve kterém můžeš psát PHP kód a testy. 

### Je potřeba composer, nebo proč je tam composer.json? 
Composer pouze zajišťuje autoloading php souborů, abys to nemusel dělat manuálně v každém souboru, nemusíš si toho nijak všímat, stačí jen soubory pojmenovávat stejně jako třídy v nich obsažené.

Test je napsán v PHPUnit (https://phpunit.de/manual/4.4/en/writing-tests-for-phpunit.html - ten odkaz si schovej, až budeš na coderetreatu psát svoje testy, určitě se ti bude hodit)

