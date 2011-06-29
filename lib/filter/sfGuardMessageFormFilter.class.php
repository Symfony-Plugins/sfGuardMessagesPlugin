<?php

/**
 * sfGuardMessage filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
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
