<?php

/**
 *
 * @package    sfGuardMessagesPlugin
 * @subpackage model
 * @author     Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessagePriority extends BasesfGuardMessagePriority
{

  public function __toString()
  {
    return $this->getName();
  }

}

// sfGuardMessagePriority
