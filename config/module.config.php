<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'HttpService' => 'PHPServices\Factory\HttpServiceFactory',
        ),
        'invokables' => array(
            'FileOperations' => 'PHPServices\FileOperations',
            'StringOperations' => 'PHPServices\StringOperations',
            'ArrayOperations' => 'PHPServices\ArrayOperations',
            'MathOperations' => 'PHPServices\MathOperations',
            'SystemOperations' => 'PHPServices\SystemOperations'
        ),
    )
);