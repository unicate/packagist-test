# Unicate Packagist Test

Test publishing on Packagist

### Installing

Use composer:

```
composer require unicate/packagist-test
```

### Example

#### v0.0.1

```php
<?php

require_once "vendor/autoload.php";

$hello = new Unicate\PackagistTest\Hello("World");
$hello->sayHello();

