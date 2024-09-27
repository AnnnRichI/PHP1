<?php
// print_r($_SERVER['argv']); 

// if (isset($_SERVER['argv'][1])) { //задали ли вторую переменную
//     if ($_SERVER['argv'][1] == 'rand') {
//         randomNumberGame();
//     }
//     if ($_SERVER['argv'][1] == 'help') {
//         man();
//     }
// } else {
//     man(); 
// }

// function  parseCommand() {
//     $functionName = "man";

//     if (isset($_SERVER['argv'][1])) { //задали ли вторую переменную
//         $functionName = match ($_SERVER['argv'][1]) {
//             "rand" => 'randomNumberGame',
//             "man" => 'man'
//         };

//         $functionName();
        
//     } else {
//         man(); 
//     }
// }
require_once __DIR__ . DIRECTORY_SEPARATOR . "template.function.php";


function main() {
    $functionName = parseCommand();

    writeToLog("Вызвана функция $functionName", 'func');
    
    if (function_exists($functionName)) {
        $functionName();
    } else {
        error("Вызываемая функция не существует.");
    }
}

function  parseCommand() {
    $functionName = "man";

    if (isset($_SERVER['argv'][1])) { //задали ли вторую переменную
        $functionName = match ($_SERVER['argv'][1]) {
            "rand" => 'randomNumberGame',
            "man" => 'man',
            default => $_SERVER['argv'][1]
        };

        return $functionName;
        
    } else {
        return $functionName; 
    }
}
