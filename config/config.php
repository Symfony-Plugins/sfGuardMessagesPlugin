<?php


foreach (array('sfGuardMessage', 'sfGuardMessagePriority', 'sfGuardMessageType') as $module)
{
  if (in_array($module, sfConfig::get('sf_enabled_modules')))
  {
    $this->dispatcher->connect('routing.load_configuration', array('sfGuardMessagesRouting', 'addRouteForAdmin'.str_replace('sfGuard', '', $module)));
  }
}
