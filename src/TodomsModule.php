<?php namespace Sinant\TodomsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class TodomsModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'todoms' => [
          'buttons' => [
            'create' => [
              'text' => 'Add todo'
            ]
          ]
        ]

    ];

}
