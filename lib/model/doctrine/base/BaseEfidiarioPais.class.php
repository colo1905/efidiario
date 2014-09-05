<?php

/**
 * BaseEfidiarioPais
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $EfidiarioCompeticion
 * 
 * @method string              getName()                 Returns the current record's "name" value
 * @method Doctrine_Collection getEfidiarioCompeticion() Returns the current record's "EfidiarioCompeticion" collection
 * @method EfidiarioPais       setName()                 Sets the current record's "name" value
 * @method EfidiarioPais       setEfidiarioCompeticion() Sets the current record's "EfidiarioCompeticion" collection
 * 
 * @package    efidiario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEfidiarioPais extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('efidiario_pais');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EfidiarioCompeticion', array(
             'local' => 'id',
             'foreign' => 'pais_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}