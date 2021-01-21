<?php



$machine = new Payment();
for ($i = 0; $i < count($dolls); $i++) {
    echo ($i + 1) . ". " . $dolls[$i]->getName() . "  Rp " . $dolls[$i]->getPrice() . PHP_EOL; 
}
echo "Pilih Boneka : " . PHP_EOL;
$machine->selectDoll($dolls[trim(fgets(STDIN)) -1]);

while (true) {
    echo "Menambahkan aksesoris [y/n]" . PHP_EOL;
    $repeat = trim(fgets(STDIN));
    if ($repeat === "n" || $repeat === "N") {
        break;
    }

    for ($i = 0; $i < count($accessories); $i++) {
        echo ($i + 1) . ". " . $accessories[$i]->getName() . "  Rp " . $accessories[$i]->getPrice() . PHP_EOL; 
    }
    echo "Pilih Aksesoris : " . PHP_EOL;
    $machine->addAccessory($accessories[trim(fgets(STDIN)) - 1]);
}

$machine->calculate();

echo "Total : " . $machine->getTotal();
