<?php

return array(

    'user_info_tables_format' => 'le_user_{table}_info',

    /**
     * User information tables configuration
     */
    'user_info_tables' => array(

        // User basic information
        'basic' => array(
            'first_name' => function($table){ $table->string('first_name'); },
            'last_name' => function($table){ $table->string('last_name'); },
        ),

        // User work information
        'work' => array(
            'place' => function($table){ $table->string('place'); }
        ),

        // User contact information
        'contact' => array(
            'type' => function($table){ $table->string('type'); },
            'value' => function($table){ $table->string('value'); }
        )
    ),

    'roles' => array(

        'administrator' => 'Administrator role description',
    ),
);