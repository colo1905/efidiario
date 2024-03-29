<?php

/**
 * efidiarioequipo form base class.
 *
 * @method efidiarioequipo getObject() Returns the current form's model object
 *
 * @package    efidiario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseefidiarioequipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'pais_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('efidiariopais'), 'add_empty' => false)),
      'name'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'pais_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('efidiariopais'))),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'efidiarioequipo', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('efidiarioequipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'efidiarioequipo';
  }

}
