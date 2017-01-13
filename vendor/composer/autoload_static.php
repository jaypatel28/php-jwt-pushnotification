<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87fd587dd64e7d2cc7691fddfbb19650
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4ecaeafb8cfb009ad0e052c90355e98' => __DIR__ . '/..' . '/beberlei/assert/lib/Assert/functions.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Mdanter\\Ecc\\' => 12,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
        'J' => 
        array (
            'Jose\\' => 5,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'E' => 
        array (
            'Emarref\\Jwt\\' => 12,
        ),
        'B' => 
        array (
            'Base64Url\\' => 10,
        ),
        'A' => 
        array (
            'AESKW\\' => 6,
            'AESGCM\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Mdanter\\Ecc\\' => 
        array (
            0 => __DIR__ . '/..' . '/mdanter/ecc/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Jose\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/jose/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'Emarref\\Jwt\\' => 
        array (
            0 => __DIR__ . '/..' . '/emarref/jwt/src',
        ),
        'Base64Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/base64url/src',
        ),
        'AESKW\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/aes-key-wrap/src',
        ),
        'AESGCM\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/php-aes-gcm/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'BitcoinPHP\\BitcoinECDSA' => 
            array (
                0 => __DIR__ . '/..' . '/bitcoin-php/bitcoin-ecdsa/src',
            ),
        ),
        'A' => 
        array (
            'Assert' => 
            array (
                0 => __DIR__ . '/..' . '/beberlei/assert/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87fd587dd64e7d2cc7691fddfbb19650::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87fd587dd64e7d2cc7691fddfbb19650::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit87fd587dd64e7d2cc7691fddfbb19650::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit87fd587dd64e7d2cc7691fddfbb19650::$classMap;

        }, null, ClassLoader::class);
    }
}
