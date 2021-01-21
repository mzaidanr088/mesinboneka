<?php

$machine = new Payment();
for ($i = 0; $i < count($dolls); $i++) {
    echo ($i + 1) . ". " . $dolls[$i]->getName() . "  Rp " . $dolls[$i]->getPrice() . PHP_EOL; 
}
echo "Choose a doll : " . PHP_EOL;
$machine->selectDoll($dolls[trim(fgets(STDIN)) -1]);

while (true) {
    echo "Add acessories [y/n]" . PHP_EOL;
    $repeat = trim(fgets(STDIN));
    if ($repeat === "n" || $repeat === "N") {
        break;
    }

    for ($i = 0; $i < count($accessories); $i++) {
        echo ($i + 1) . ". " . $accessories[$i]->getName() . "  Rp " . $accessories[$i]->getPrice() . PHP_EOL; 
    }
    echo "Choose acessories : " . PHP_EOL;
    $machine->addAccessory($accessories[trim(fgets(STDIN)) - 1]);
}

$machine->calculate();

echo "Total : " . $machine->getTotal();
