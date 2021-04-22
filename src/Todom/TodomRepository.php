<?php namespace Sinant\TodomsModule\Todom;

use Sinant\TodomsModule\Todom\Contract\TodomRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TodomRepository extends EntryRepository implements TodomRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TodomModel
     */
    protected $model;

    /**
     * Create a new TodomRepository instance.
     *
     * @param TodomModel $model
     */
    public function __construct(TodomModel $model)
    {
        $this->model = $model;
    }
}
