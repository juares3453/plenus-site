<?php

// Valores padroes para gerar a primeira tabela de engravings, cada numero na frente da matriz refere-se ao numero
// de engravings que o usuario selecionou, essas sao as melhores variacoes de engravings

return [
    'default_values' => [
        4 => [
            [3, null, 3, 3, null, 6, null],
            [null, null, 3, null, 3, null, 9],
            [3, 3, null, 3, null, 6, null],
            [null, 3, null, null, 3, null, 9]
        ],
        5 => [
            [3, null, null, null, null, null, 12],
            [null, 3, null, null, 3, null, 9],
            [5, 5, 5, null, null, null, null],
            [null, null, 3, 5, null, 7, null],
            [null, null, null, 3, 5, 7, null]
        ],
        6 => [
            [null, null, null, null, 5, null, null],
            [null, null, null, 5, 3, 7, null],
            [5, null, 3, null, null, 7, null],
            [3, null, null, null, null, null, 12],
            [null, 3, null, null, null, null, 12],
            [null, 6, 6, 3, null, null, null]
        ]
    ]
];