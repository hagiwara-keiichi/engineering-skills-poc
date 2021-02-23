<?php
declare(strict_types=1);

use myapp\test\end_to_end_test\Hello;

require_once "../../../vendor/autoload.php";

Hello::openChromeAndScreenshot();
