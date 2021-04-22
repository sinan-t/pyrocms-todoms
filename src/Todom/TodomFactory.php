<?php namespace Sinant\TodomsModule\Todom;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var TodomModel
     */
    protected $model = TodomModel::class;


    /**
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [];
    }
}
