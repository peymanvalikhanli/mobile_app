<?php
//namespace controller;

//use controllers\JWT;
require_once 'JWT.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//use Lib\JWT\JWT\JWT;
//$jwt = new \Firebase\JWT\JWT();


    $privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: AES-256-CBC,C5F0705FE0D7C51E7634D7DF40AF1EE1

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
-----END RSA PRIVATE KEY-----
EOD;

$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAuV/GJuJXC2qCddX1Uu9Y
BCq8FcCzvScc34YB9TD/WdrTKCvdJZDBCuWR4EX6hlvhvWF9Xg8CPwY6DuwIbtEh
IPo18RlELkOY0ODzNZ6LUlxQTyy9AfpStptovfkAuN/wYI5qRceNsUdEjUd0+USQ
fpOg1y4DCkQCAhJ0NZxaPbtn65x3hJTnH0HdqFD6ZaiTM1xk2+kuc+4kxjQL6l60
LioLFThySn8z6fpEbdCXNvYsoRbGOk04Rt59YJV/l5/Xjmid8ytMRennGrYO6m+L
2LHt0oaLjB1e3Fbu8uAIvlE5GUKwF/sODTaW6oh9KquKBftA6KExdLh5BVIjsBEQ
yx0w38ujWbS/c+g3Ax3cSp8aOgp6wK85vMz37Sh33wpm10hve7g307YLggksbkIG
3+hNm802BU1UVIWL2KAse1dBopOcH2+q3YCS3jht0kuUn6EufQpZvepskA+KODs9
Lt//gdKPeo15Y+y3SYoFb//nLvAVGBKxn2mmlzYvZ00td7hmpYwmBWj3tOOHKP2t
41WtLV4Iv9J10kEJTifsXe4Zp/X/4J5gGcLSLWhAh25ZncgNqgyoXtzAGnCgwDdt
k0lVy/ajI935IfoQ5ZIXzjhDX01AvLFHdVNpY92JG8zLwJM2U+Evyb7AllqMve4g
29Oz0FVIazmenFidOR8hdI8CAwEAAQ==
-----END PUBLIC KEY-----
EOD;

$token = array(
    "iss" => "example.org",
    "aud" => "example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
);

$jwt ="eyJhbGciOiJSUzI1NiJ9.eyJlbWFpbCI6InRlYW0xQHVzZXIuY29tIiwiaWF0IjoxNTE3NjkyODE0LCJleHAiOjE1MTg4MDY0MTR9.XTaah2sf6pvxeS_5omoW-U_5gcziSqCYzj4Ja_Nj7F9j2t_oVc_WKT7aMt7LdXY1YBta2t3lguq7kOMU7_NF7W0L5RFIaafWIPMftLfkJhfUmjXJjynJKPcpAUk-LcSovX4Kkcaeeby3G70xVa_GHHZsPpSlrdJj96fueci7nrYvD2LvQ1jZSksjoO1BQ0uzSA9IUe_fx4xrWeIzq6kYGTgNpWpR_aXvQOvm-h4eQ8aFBjoLbv2dry5Df8bUvohbPUvpEYftegxLvgJd_Ib9fa2U6jW0yRwV3UcbDLzeHiVsumhqHTqalOfqSzuUrO4f9RTX1kTawCqKekch_oN_2FBl_RioGbldY4ao_DSIJWLKnzcoowXFKNXf0TK5tNRXmj9HF_Z-QHjfvOhtg2hqpbb_zZyTe-6b8V9iIWnWtlWTSLmYQ4iDmOI43Msmdmbfgq1B-aakD6BUS6sr_tP2jAXwy0vI8L7HLkymRHzjaQJB1j4AEPaksa-3_T3guOAQpJ2nM_P_jag1TABIHba0FcI7nxEDjbBJOAoLHjlSjru7z1A-Nm20MWyPgqa3BuPRWbefLGjR-31Qo4e-FgfWwYzu_LlEjcyG23HaRyulNewaXGqP-4KDutmGGD-SqIj1G3eqAQMtce2oKcbtQ4IgzqL4a9VDTbWLbODByVxFu9A";// JWT::encode($token, $privateKey, 'RS256');
echo "Encode:\n" . print_r($jwt, true) . "\n";

$decoded = JWT::decode($jwt, $publicKey, array('RS256'));

echo "<br>";
echo "<br>";
echo "<hr>";
/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;
echo "Decode:\n" . print_r($decoded_array, true) . "\n";