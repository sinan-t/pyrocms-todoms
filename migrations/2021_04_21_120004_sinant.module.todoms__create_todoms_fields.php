<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Anomaly\UsersModule\User\UserModel;

class SinantModuleTodomsCreateTodomsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'owner' => [
          'type' => 'anomaly.field_type.relationship',
          'config' => [
            'title_name' => 'username',
            'related' => UserModel::class
          ]
        ]
        // will enable this later
        // 'status' => [
        //   'type' => 'anomaly.field_type.select',
        //   'config' => [
        //     'default_value' => 'New' ,
        //     'options' => [
        //       'New'=>'New',
        //       'Done'=>'Done'
        //     ],
        //   ]
        // ],

    ];

}
