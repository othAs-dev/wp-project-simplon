<?php return array(
    'root' => array(
        'name' => 'baqend/wordpress-plugin',
        'pretty_version' => '1.17.17',
        'version' => '1.17.17.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'baqend/baqend-sdk' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '9a7ef0ce4d09ef8b4c65bb2bc6cea3260c95a370',
            'type' => 'library',
            'install_path' => __DIR__ . '/../baqend/baqend-sdk',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'baqend/wordpress-plugin' => array(
            'pretty_version' => '1.17.17',
            'version' => '1.17.17.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => array(
            'pretty_version' => '1.8.2',
            'version' => '1.8.2.0',
            'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/psr7',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.3.1',
            'version' => '2.3.1.0',
            'reference' => '9738e495f288eec0b187e310b7cdbbb285777dbe',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'myclabs/php-enum' => array(
            'pretty_version' => '1.8.3',
            'version' => '1.8.3.0',
            'reference' => 'b942d263c641ddb5190929ff840c68f78713e937',
            'type' => 'library',
            'install_path' => __DIR__ . '/../myclabs/php-enum',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-common' => array(
            'pretty_version' => '2.2.0',
            'version' => '2.2.0.0',
            'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpdocumentor/reflection-common',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => array(
            'pretty_version' => '5.2.2',
            'version' => '5.2.2.0',
            'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpdocumentor/reflection-docblock',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpdocumentor/type-resolver' => array(
            'pretty_version' => '1.4.0',
            'version' => '1.4.0.0',
            'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpdocumentor/type-resolver',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/http-message' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-message',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'ralouphie/getallheaders' => array(
            'pretty_version' => '3.0.3',
            'version' => '3.0.3.0',
            'reference' => '120b605dfeb996808c31b6477290a714d356e822',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ralouphie/getallheaders',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/inflector' => array(
            'pretty_version' => 'v4.4.25',
            'version' => '4.4.25.0',
            'reference' => 'fc695ab721136b27aa84427a0fa80189761266ef',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/inflector',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.23.0',
            'version' => '1.23.0.0',
            'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php70' => array(
            'pretty_version' => 'v1.20.0',
            'version' => '1.20.0.0',
            'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644',
            'type' => 'metapackage',
            'install_path' => NULL,
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/property-access' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'reference' => 'f1dc91d0c987f3ba95be1d7874527d11477b25ff',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/property-access',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/property-info' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'reference' => 'a5f1e77c881342a5b1e05fdc12642650853bd112',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/property-info',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/serializer' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'reference' => '6d69ccc1dcfb64c1e9c9444588643e98718d1849',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/serializer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'webmozart/assert' => array(
            'pretty_version' => '1.10.0',
            'version' => '1.10.0.0',
            'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
            'type' => 'library',
            'install_path' => __DIR__ . '/../webmozart/assert',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
