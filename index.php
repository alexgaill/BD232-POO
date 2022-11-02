<?php

use App\Fixtures\AppFixtures;


define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

(new AppFixtures)->load();
echo "Les fixtures sont chargées";







