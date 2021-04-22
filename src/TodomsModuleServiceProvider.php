<?php namespace Sinant\TodomsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Sinant\TodomsModule\Todom\Contract\TodomRepositoryInterface;
use Sinant\TodomsModule\Todom\TodomRepository;
use Anomaly\Streams\Platform\Model\Todoms\TodomsTodomsEntryModel;
use Sinant\TodomsModule\Todom\TodomModel;
use Illuminate\Routing\Router;

class TodomsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
      // todo here i should add routes for users

      'todoms'           => 'Sinant\TodomsModule\Http\Controller\TodomsController@index',
      'todoms/create'    => 'Sinant\TodomsModule\Http\Controller\TodomsController@create',
      // 'todoms/edit/{id}' => 'Sinant\TodomsModule\Http\Controller\Admin\TodomsController@edit',

      'admin/todoms'           => 'Sinant\TodomsModule\Http\Controller\Admin\TodomsController@index',
      'admin/todoms/create'    => 'Sinant\TodomsModule\Http\Controller\Admin\TodomsController@create',
      'admin/todoms/edit/{id}' => 'Sinant\TodomsModule\Http\Controller\Admin\TodomsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Sinant\TodomsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Sinant\TodomsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Sinant\TodomsModule\Event\ExampleEvent::class => [
        //    Sinant\TodomsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Sinant\TodomsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        TodomsTodomsEntryModel::class => TodomModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TodomRepositoryInterface::class => TodomRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
