<?php namespace Sinant\TodomsModule\Http\Controller\Admin;

use Sinant\TodomsModule\Todom\Form\TodomFormBuilder;
use Sinant\TodomsModule\Todom\Table\TodomTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TodomsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TodomTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodomTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TodomFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TodomFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TodomFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TodomFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
