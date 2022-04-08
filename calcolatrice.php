<?php
// Calcolatrice

/*
 Crea una calcolatrice che chiede in input all’utente il primo numero, il
secondo numero e l’operazione da effettuare. Implementa le seguenti
operazioni:
a. somma
b. sottrazione
c. moltiplicazione
d. divisione
e. fattoriale
(senza usare operatore *, utilizza un ciclo for o while)
(con resto, senza usare operatore /, utilizza un ciclo for o while)
 */
$firstNumber;
$lastNumber;
$aritmethicOperationControl = true;
$finalResult = 0;
do {
    $Operazione = (string)readline('INSERISCI OPERATORE ARITMETICO :');

    if ($Operazione === '+') {

        $firstNumber
            = (int)readline('INSERISCI IL PRIMO OPERANDO: ');
        $lastNumber
            = (int)readline('INSERISCI IL SECONDO OPERANDO: ');

        $finalResult = ($firstNumber
            + $lastNumber
        );
        $aritmethicOperationControl = false;
        echo 'SOMMA : ' . $finalResult . PHP_EOL;
    } else if ($Operazione === '-') {

        $firstNumber
            = (int)readline('INSERISCI IL PRIMO OPERANDO: ');
        $lastNumber
            = (int)readline('INSERISCI IL SECONDO OPERANDO: ');

        $finalResult = ($firstNumber
            - $lastNumber
        );
        $aritmethicOperationControl = false;
        echo 'SOTTRAZIONE : ' . $finalResult . PHP_EOL;
    } else if ($Operazione === 'x') {

        $firstNumber
            = (int)readline('INSERISCI IL PRIMO OPERANDO: ');
        $lastNumber
            = (int)readline('INSERISCI IL SECONDO OPERANDO: ');
        for (
            $i = 0;
            $i < $lastNumber;
            $i++
        ) {
            $finalResult += $firstNumber;
        }
        echo 'PRODOTTO : ' . $finalResult . PHP_EOL;
        $aritmethicOperationControl = false;
    } else if ($Operazione === '/') {

        $firstNumber
            = (int)readline('INSERISCI IL PRIMO OPERANDO: ');
        $lastNumber
            = (int)readline('INSERISCI IL SECONDO OPERANDO: ');
        while (
            $firstNumber
            >= $lastNumber
        ) {
            $finalResult++;
            $Resto = ($firstNumber
                -= $lastNumber
            );
        }
        echo 'DIVISIONE : ' . $finalResult . PHP_EOL;
        echo 'RESTO : ' . $Resto . PHP_EOL;
        $aritmethicOperationControl = false;
    } else if ($Operazione === '!') {

        $Numero = (int)readline('Inserisci numero: ');

        if ($Numero === 0) {
            $finalResult = 1;
            $aritmethicOperationControl = false;
        } else {

            for ($i = 1; $i <= $Numero; $i++) {

                $finalResult *= $i;
                $aritmethicOperationControl = false;
            }
            echo 'FATTORIALE : ' . $finalResult . PHP_EOL;
        }
    } else {
        echo 'ERROR - BAD OPERATION ' . PHP_EOL;
    }
} while ($aritmethicOperationControl);
