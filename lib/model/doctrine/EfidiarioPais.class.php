<?php

/**
 * EfidiarioPais
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    efidiario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class EfidiarioPais extends BaseEfidiarioPais
{
    public function __toString()
  {
    return sprintf('%s at %s (%s)', $this->getPosition(), $this->getCompany(), $this->getLocation());
  }
}
