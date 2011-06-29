<?php

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessagesRouting
{
  static public function addRouteForAdminMessage(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_guard_message', new sfPropelRouteCollection(array(
      'name'                 => 'sf_guard_message',
      'model'                => 'sfGuardMessage',
      'module'               => 'sfGuardMessage',
      'prefix_path'          => 'sf_guard_message',
      'with_wildcard_routes' => true,
      'requirements'         => array(),
    )));
  }

  static public function addRouteForAdminMessagePriority(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_guard_message_priority', new sfPropelRouteCollection(array(
      'name'                 => 'sf_guard_message_priority',
      'model'                => 'sfGuardMessagePriority',
      'module'               => 'sfGuardMessagePriority',
      'prefix_path'          => 'sf_guard_message_priority',
      'with_wildcard_routes' => true,
      'requirements'         => array(),
    )));
  }

  static public function addRouteForAdminMessageType(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_guard_message_type', new sfPropelRouteCollection(array(
      'name'                 => 'sf_guard_message_type',
      'model'                => 'sfGuardMessageType',
      'module'               => 'sfGuardMessageType',
      'prefix_path'          => 'sf_guard_message_type',
      'with_wildcard_routes' => true,
      'requirements'         => array(),
    )));
  }
}
