<?php namespace Sinant\TodomsModule\Todom;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sinant\TodomsModule\Todom\Contract\TodomRepositoryInterface;

class TodomSeeder extends Seeder
{

  public function __construct(TodomRepositoryInterface $todoms)
  {
      $this->todoms = $todoms;
  }

    /**
     * Run the seeder.
     */
    public function run()
    {

      $this->todoms->truncate();

      // todo should complete this
      // $this->todoms->create(
      //     [
      //
      //       config('app.locale', 'en')   => [
      //           'owner'        => 'todo 1',
      //           'description' => 'The super admin role.',
      //       ],
      //       // will enable this later
      //       // 'status' => 'New'
      //     ]
      // );

      // $this->todoms->create(
      //     [
      //         'en' => [
      //             'title' => 'Todo2',
      //         ],
      //         'status' => 'New'
      //     ]
      // );
      //
      // $this->todoms->create(
      //     [
      //         'en' => [
      //             'title' => 'Todo 3',
      //         ],
      //         'status' => 'Done'
      // );

    }
}
