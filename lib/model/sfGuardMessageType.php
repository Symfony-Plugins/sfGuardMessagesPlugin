<?php

/**
 *
 * @package    sfGuardMessagesPlugin
 * @subpackage model
 * @author     Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessageType extends BasesfGuardMessageType
{

  public function __toString()
  {
    return $this->getName();
  }

}

// sfGuardMessageType
