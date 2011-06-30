<?php

/**
 * sfGuardMessage filter form.
 *
 * @package    sfGuardMessagesPlugin
 * @subpackage filter
 * @author     Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessageFormFilter extends BasesfGuardMessageFormFilter
{
  public function configure()
  {
    $this->getWidget('sf_guard_message_user_list')
            ->setOption('multiple', true)
            ->setOption('expanded', true)
            ->setOption('add_empty', false);
    $this->getWidget('sf_guard_message_group_list')
            ->setOption('multiple', true)
            ->setOption('expanded', true)
            ->setOption('add_empty', false);
  }
}
