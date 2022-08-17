# String Koruması
PHP üzerinde yazılmış basit bir korumadır.

## Amaç?
İçerisinde fonksiyonlar barındıran bu sınıf clientten gelebilecek input değerlerinin içinde kötü niyetli bir yazım olup olmadığını kontrol eder ve düzeltir. Veya, SQL veritabanına zarar verme amaçlı yapılabilecek bir sorgu düzenlemesini engeller.

### Kullanım
```php
<?php 
  require "Koruma.class.php";
  use \Main\Koruma as Koruma;
  
  echo Koruma::Input("Test<br>:D");
?>
```
