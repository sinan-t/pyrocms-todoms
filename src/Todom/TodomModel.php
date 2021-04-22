<?php namespace Sinant\TodomsModule\Todom;

use Sinant\TodomsModule\Todom\Contract\TodomInterface;
use Anomaly\Streams\Platform\Model\Todoms\TodomsTodomsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodomModel extends TodomsTodomsEntryModel implements TodomInterface
{
    use HasFactory;

    /**
     * @return TodomFactory
     */
    protected static function newFactory()
    {
        return TodomFactory::new();
    }
}
