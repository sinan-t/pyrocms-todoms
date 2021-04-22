<?php namespace Sinant\TodomsModule\Todom\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class TodomTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];


    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
      'owner',
      'title',
      // will enable this later
      // 'status'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
      'owner' => [
        'heading' => 'Created By'
      ],
      'title'=> [
        'heading' => 'Todo Title',
      ],
      // will enable this later
      // 'status'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [

    ];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];



}
