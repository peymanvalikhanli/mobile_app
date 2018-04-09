<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 8/15/17 AD
 * Time: 22:23
 */

require_once 'filing.php';
require_once '../database/data.php';
require_once 'file_payload.php';


//  "add": "افزودن",

$tables = data::get_tables();

$payload = "";

for ($index_table = 0; $index_table < count($tables); $index_table++) {

    // $table = data::get_structure_table($tables[$index_table]["table_name"]);
    $table = data::get_comment($tables[$index_table]["table_name"]);

    print_r($table);

    $payload .= file_payload::lang_file($tables[$index_table]["table_name"], $table);

}

echo "lang :: " . $tables[$index_table]["table_name"];
echo "<hr><br>";
$file_name = "lang_fa.json";
filing::remove_file($file_name);
filing::create_file($file_name, $payload);