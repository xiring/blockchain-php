<?php
require_once(__DIR__.'/../blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();

for($i=0;$i<3;$i++){
    echo "mining block ".$i."...\n";
    $testCoin->push(new Block($i, strtotime("now"), "amount: " . $i+6));

    echo json_encode($testCoin, JSON_PRETTY_PRINT);
}
