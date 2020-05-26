# Unicate Packagist Test

Test publishing on Packagist.

### Installing

Use composer:

```
composer require unicate/packagist-test
```

### Example

#### v1.1

```php
<?php

require_once "vendor/autoload.php";

use Unicate\PackagistTest\Hello;

$hello = new Hello('wonderful World!');
$hello->sayHello();

