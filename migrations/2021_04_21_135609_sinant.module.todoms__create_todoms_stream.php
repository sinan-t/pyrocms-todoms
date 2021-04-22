<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class SinantModuleTodomsCreateTodomsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'todoms',
        'title_column' => 'title',
        'translatable' => true,
        'versionable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'owner' => [
          'required' => true
        ],
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        // will enable this later
        // 'status' => [
        //     'required' => true,
        // ],

    ];

}
