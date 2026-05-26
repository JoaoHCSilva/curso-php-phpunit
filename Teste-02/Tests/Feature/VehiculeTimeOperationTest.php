<?php

use App\VehicleStatusCheck\VehicleStatusCheck;

it("Veiculo APOSENTADO se km for maior que 200.000km", function () {
    $checker = new VehicleStatusCheck;

    $status = $checker->checkStatus(200123, 5);

    expect($status)->toBe('Aposentado');
});

/**
 * Revisão: Se a quilometragem for aceitável, mas o veículo estiver há mais de 
 * 12 meses sem manutenção, o método deve retornar "Em Manutenção".
 */

it("Veiculo esta EM MANUTENCAO quando estiver a mais de 12 meses sem manutencao e com km aceitável", function () {
    $checker = new VehicleStatusCheck;
    $status = $checker->checkStatus(18000, 32);

    expect($status)->toBe('Em Manutenção');
});


/**
 * Liberado: Se o veículo tiver 200.000 km ou menos E a última manutenção tiver sido feita 
 * há 12 meses ou menos,* o método deve retornar "Disponível"
 */
it("Veiculo está liberado quando seu km e sua periodicidade de manutenção estiverem aceitáveis", function () {
   $checker = new VehicleStatusCheck;
    $status = $checker->checkStatus(18000, 8);

    expect($status)->toBe('Disponível');
});
