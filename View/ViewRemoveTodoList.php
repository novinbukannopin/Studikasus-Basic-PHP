<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = (int)input("Nomer (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo $pilihan" . PHP_EOL;
        }
    }


}
