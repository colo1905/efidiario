<?php

/**
 * pais actions.
 *
 * @package    efidiario
 * @subpackage pais
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class paisActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->efidiariopaiss = Doctrine_Core::getTable('efidiariopais')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->efidiariopais = Doctrine_Core::getTable('efidiariopais')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->efidiariopais);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new efidiariopaisForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new efidiariopaisForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($efidiariopais = Doctrine_Core::getTable('efidiariopais')->find(array($request->getParameter('id'))), sprintf('Object efidiariopais does not exist (%s).', $request->getParameter('id')));
    $this->form = new efidiariopaisForm($efidiariopais);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($efidiariopais = Doctrine_Core::getTable('efidiariopais')->find(array($request->getParameter('id'))), sprintf('Object efidiariopais does not exist (%s).', $request->getParameter('id')));
    $this->form = new efidiariopaisForm($efidiariopais);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($efidiariopais = Doctrine_Core::getTable('efidiariopais')->find(array($request->getParameter('id'))), sprintf('Object efidiariopais does not exist (%s).', $request->getParameter('id')));
    $efidiariopais->delete();

    $this->redirect('pais/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $efidiariopais = $form->save();

      $this->redirect('pais/edit?id='.$efidiariopais->getId());
    }
  }
}
