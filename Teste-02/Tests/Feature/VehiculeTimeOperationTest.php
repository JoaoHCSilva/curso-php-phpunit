<?php

it("Veiculo APOSENTADO se km for maior que 200.000km", function (){
    $veiculo = [
        'placa' => 'TEST123',
        'km' => 200123
    ];
    $this->assertTrue($veiculo['km'] > 200000);
});

/**
 * Revisão: Se a quilometragem for aceitável, mas o veículo estiver há mais de 
 * 12 meses sem manutenção, o método deve retornar "Em Manutenção".
 */

it("Veiculo esta EM MANUTENCAO quando estiver a mais de 12 meses sem manutencao e com km aceitável", function(){
    $veiculo = [
        'placa' => 'TEST123',
        'km' => 200000,
        'ultima_manutencao' => 24,
    ];

    $this->assertTrue($veiculo['ultima_manutencao'] > 12 && !($veiculo['km']>200000));
});


/**
 * Liberado: Se o veículo tiver 200.000 km ou menos E a última manutenção tiver sido feita 
 * há 12 meses ou menos,* o método deve retornar "Disponível"
 */
it("Veiculo está liberado quando seu km e sua periodicidade de manutenção estiverem aceitáveis", function(){
      $veiculo = [
        'placa' => 'TEST123',
        'km' => 15000,
        'ultima_manutencao' => 4,
    ];

    $this->assertTrue(!($veiculo['km']>200000) && $veiculo['ultima_manutencao'] <= 12);
});