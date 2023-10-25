<?php
/**
* This file is created by Really Simple SSL to test the CSP header length
* It will not load during regular wordpress execution
*/


if ( !headers_sent() ) {
header("X-REALLY-SIMPLE-SSL-TEST: %93%12%A0qT%21%95h%15%03%F8%E9%8A%22%C93%7F%F21%99%21%81%5E%A0t%FB%ED%0A%D4%9D%CF%3Em7%F3%0C%FBj%8Bt%A0%C6%3D%ABqW%3FX%24%23%DF%90%B8OskZ%19t%22%27%09qN-m%B8%E9%F8%23%CF%90%16%26s%11j-Z%8E%A0%1F%5C%3D%C6%11%02X-%88%FEyP%03%27%21%C8g%B6%EB%06%F1%1FO1%A4%A8G%DD%1B5%88%BFk%0B%E5%E6%D7%9A%DE%B5%23%04%E9g%BF%FCn%40Y%D2%8F%BF%85fF%C9X%D5H%19%DE%10%E8z%86%F6%3BL%F8B4%CF%D1%91%7F%F82%8F%03uk%89m%16%8EiK%9A%17%AA%E9%AD%DE%16%9D%7F%E0%856%C6%BC%E3a%87%1A%22%C2%21%E1%FB%CF%0C8%A45H%19%F5%80%24%D3G%DFP.%87I");
}

 echo '<html><head><meta charset="UTF-8"><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"></head><body>Really Simple SSL headers test page</body></html>';