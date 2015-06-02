<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'HttpService' => 'PHPServices\Factory\HttpServiceFactory',
            'CryptoService' => 'PHPServices\Factory\CryptoServiceFactory',
        ),
        'invokables' => array(
            'FileOperations' => 'PHPServices\FileOperations',
            'StringOperations' => 'PHPServices\StringOperations',
            'ArrayOperations' => 'PHPServices\ArrayOperations',
            'MathOperations' => 'PHPServices\MathOperations',
            'SystemOperations' => 'PHPServices\SystemOperations',
            'VariableOperations' => 'PHPServices\VariableOperations'
        ),
    )
);