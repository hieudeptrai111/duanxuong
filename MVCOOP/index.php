<?php

require_once './src/Sinhvien.php';

use hieu\mvcoop\sinhVien;

$sinhvien = new sinhVien('minhieu',19 );
echo "<pre>";
$sinhvien ->ShowName();
