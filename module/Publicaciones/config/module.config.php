<?php
return [
    'router' => [
        'routes' => [
            'publicaciones.rest.articulos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/articulos[/:articulos_id]',
                    'defaults' => [
                        'controller' => 'Publicaciones\\V1\\Rest\\Articulos\\Controller',
                    ],
                ],
            ],
            'publicaciones.rest.opiniones-articulo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/opiniones_articulo[/:opiniones_articulo_id]',
                    'defaults' => [
                        'controller' => 'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller',
                    ],
                ],
            ],
            'publicaciones.rest.comentarios-articulo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/comentarios_articulo[/:comentarios_articulo_id]',
                    'defaults' => [
                        'controller' => 'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller',
                    ],
                ],
            ],
            'publicaciones.rest.roles' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/roles[/:roles_id]',
                    'defaults' => [
                        'controller' => 'Publicaciones\\V1\\Rest\\Roles\\Controller',
                    ],
                ],
            ],
            'publicaciones.rest.users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/users[/:users_id]',
                    'defaults' => [
                        'controller' => 'Publicaciones\\V1\\Rest\\Users\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'publicaciones.rest.articulos',
            1 => 'publicaciones.rest.opiniones-articulo',
            2 => 'publicaciones.rest.comentarios-articulo',
            3 => 'publicaciones.rest.roles',
            4 => 'publicaciones.rest.users',
        ],
    ],
    'api-tools-rest' => [
        'Publicaciones\\V1\\Rest\\Articulos\\Controller' => [
            'listener' => 'Publicaciones\\V1\\Rest\\Articulos\\ArticulosResource',
            'route_name' => 'publicaciones.rest.articulos',
            'route_identifier_name' => 'articulos_id',
            'collection_name' => 'articulos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Publicaciones\V1\Rest\Articulos\ArticulosEntity::class,
            'collection_class' => \Publicaciones\V1\Rest\Articulos\ArticulosCollection::class,
            'service_name' => 'articulos',
        ],
        'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller' => [
            'listener' => 'Publicaciones\\V1\\Rest\\OpinionesArticulo\\OpinionesArticuloResource',
            'route_name' => 'publicaciones.rest.opiniones-articulo',
            'route_identifier_name' => 'opiniones_articulo_id',
            'collection_name' => 'opiniones_articulo',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Publicaciones\V1\Rest\OpinionesArticulo\OpinionesArticuloEntity::class,
            'collection_class' => \Publicaciones\V1\Rest\OpinionesArticulo\OpinionesArticuloCollection::class,
            'service_name' => 'opiniones_articulo',
        ],
        'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller' => [
            'listener' => 'Publicaciones\\V1\\Rest\\ComentariosArticulo\\ComentariosArticuloResource',
            'route_name' => 'publicaciones.rest.comentarios-articulo',
            'route_identifier_name' => 'comentarios_articulo_id',
            'collection_name' => 'comentarios_articulo',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Publicaciones\V1\Rest\ComentariosArticulo\ComentariosArticuloEntity::class,
            'collection_class' => \Publicaciones\V1\Rest\ComentariosArticulo\ComentariosArticuloCollection::class,
            'service_name' => 'comentarios_articulo',
        ],
        'Publicaciones\\V1\\Rest\\Roles\\Controller' => [
            'listener' => 'Publicaciones\\V1\\Rest\\Roles\\RolesResource',
            'route_name' => 'publicaciones.rest.roles',
            'route_identifier_name' => 'roles_id',
            'collection_name' => 'roles',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Publicaciones\V1\Rest\Roles\RolesEntity::class,
            'collection_class' => \Publicaciones\V1\Rest\Roles\RolesCollection::class,
            'service_name' => 'roles',
        ],
        'Publicaciones\\V1\\Rest\\Users\\Controller' => [
            'listener' => 'Publicaciones\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'publicaciones.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Publicaciones\V1\Rest\Users\UsersEntity::class,
            'collection_class' => \Publicaciones\V1\Rest\Users\UsersCollection::class,
            'service_name' => 'users',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Publicaciones\\V1\\Rest\\Articulos\\Controller' => 'HalJson',
            'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller' => 'HalJson',
            'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller' => 'HalJson',
            'Publicaciones\\V1\\Rest\\Roles\\Controller' => 'HalJson',
            'Publicaciones\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Publicaciones\\V1\\Rest\\Articulos\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\Roles\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Publicaciones\\V1\\Rest\\Articulos\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\Roles\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/json',
            ],
            'Publicaciones\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.publicaciones.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Publicaciones\V1\Rest\Articulos\ArticulosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.articulos',
                'route_identifier_name' => 'articulos_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Publicaciones\V1\Rest\Articulos\ArticulosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.articulos',
                'route_identifier_name' => 'articulos_id',
                'is_collection' => true,
            ],
            \Publicaciones\V1\Rest\OpinionesArticulo\OpinionesArticuloEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.opiniones-articulo',
                'route_identifier_name' => 'opiniones_articulo_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Publicaciones\V1\Rest\OpinionesArticulo\OpinionesArticuloCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.opiniones-articulo',
                'route_identifier_name' => 'opiniones_articulo_id',
                'is_collection' => true,
            ],
            \Publicaciones\V1\Rest\ComentariosArticulo\ComentariosArticuloEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.comentarios-articulo',
                'route_identifier_name' => 'comentarios_articulo_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Publicaciones\V1\Rest\ComentariosArticulo\ComentariosArticuloCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.comentarios-articulo',
                'route_identifier_name' => 'comentarios_articulo_id',
                'is_collection' => true,
            ],
            \Publicaciones\V1\Rest\Roles\RolesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.roles',
                'route_identifier_name' => 'roles_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Publicaciones\V1\Rest\Roles\RolesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.roles',
                'route_identifier_name' => 'roles_id',
                'is_collection' => true,
            ],
            \Publicaciones\V1\Rest\Users\UsersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Publicaciones\V1\Rest\Users\UsersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'publicaciones.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Publicaciones\\V1\\Rest\\Articulos\\ArticulosResource' => [
                'adapter_name' => 'localhost',
                'table_name' => 'articulos',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Publicaciones\\V1\\Rest\\Articulos\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Publicaciones\\V1\\Rest\\OpinionesArticulo\\OpinionesArticuloResource' => [
                'adapter_name' => 'localhost',
                'table_name' => 'opiniones_articulo',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Publicaciones\\V1\\Rest\\ComentariosArticulo\\ComentariosArticuloResource' => [
                'adapter_name' => 'localhost',
                'table_name' => 'comentarios_articulo',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Publicaciones\\V1\\Rest\\Roles\\RolesResource' => [
                'adapter_name' => 'localhost',
                'table_name' => 'roles',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Publicaciones\\V1\\Rest\\Roles\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Publicaciones\\V1\\Rest\\Users\\UsersResource' => [
                'adapter_name' => 'localhost',
                'table_name' => 'users',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Publicaciones\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Publicaciones\\V1\\Rest\\Articulos\\Controller' => [
            'input_filter' => 'Publicaciones\\V1\\Rest\\Articulos\\Validator',
        ],
        'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Controller' => [
            'input_filter' => 'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Validator',
        ],
        'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Controller' => [
            'input_filter' => 'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Validator',
        ],
        'Publicaciones\\V1\\Rest\\Roles\\Controller' => [
            'input_filter' => 'Publicaciones\\V1\\Rest\\Roles\\Validator',
        ],
        'Publicaciones\\V1\\Rest\\Users\\Controller' => [
            'input_filter' => 'Publicaciones\\V1\\Rest\\Users\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Publicaciones\\V1\\Rest\\Articulos\\Validator' => [
            0 => [
                'name' => 'user_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'articulo',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'foto',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'fecha_alta',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Publicaciones\\V1\\Rest\\OpinionesArticulo\\Validator' => [
            0 => [
                'name' => 'articulo_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'user_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'me_gusta',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            3 => [
                'name' => 'fecha_alta',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Publicaciones\\V1\\Rest\\ComentariosArticulo\\Validator' => [
            0 => [
                'name' => 'articulo_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'user_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'comentario',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'fecha_alta',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Publicaciones\\V1\\Rest\\Roles\\Validator' => [
            0 => [
                'name' => 'role',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
        'Publicaciones\\V1\\Rest\\Users\\Validator' => [
            0 => [
                'name' => 'username',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'password',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'role_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            4 => [
                'name' => 'active',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            5 => [
                'name' => 'views',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            6 => [
                'name' => 'created',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
