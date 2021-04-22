<?php namespace Sinant\TodomsModule\Http\Controller;

use Sinant\TodomsModule\Todom\Form\TodomFormBuilder;
use Sinant\TodomsModule\Todom\Table\TodomTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

class TodomsController extends PublicController
{

    /**
     * Display an index of existing entries.
     *
     * @param TodomTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodomTableBuilder $table)
    {
      $this->breadcrumbs->add('Home', '/');
      $this->breadcrumbs->add('Todoms', 'todoms');

      $this->template->set('meta_title', 'Todoms');

      //$table->skipField('owner');
      // this is not the right way to do it
      $mcols = $table->getColumns();
      $mcols2 = $table->getFilters();
      unset($mcols['owner']);
      unset($mcols2[0]);
      $table->setColumns($mcols);
      $table->setFilters($mcols2);
      //print_r($mcols2);
      //$TodomsTable = $table->setAjax(true)->render()->content();
      return $table->render();
      //return $this->view->make('sinant.module.todoms::todoms/index', ['TodomsTable' => $TodomsTable]);
    }

    /**
     * Create a new entry.
     *
     * @param TodomFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TodomFormBuilder $form)
    {
      $this->breadcrumbs->add('Home', '/');
      $this->breadcrumbs->add('Todoms', 'todoms');

      $this->template->set('meta_title', 'Add Todo');

      $form->skipField('owner');

      $form->setOption('redirect', 'todoms');

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
