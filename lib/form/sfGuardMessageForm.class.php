<?php

/**
 * sfGuardMessage form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class sfGuardMessageForm extends BasesfGuardMessageForm
{

  public function configure()
  {
    $this->getWidget('sf_guard_message_group_list')
            ->setOption('multiple', true)
            ->setOption('expanded', true);
    $this->getWidget('sf_guard_message_user_list')
            ->setOption('multiple', true)
            ->setOption('expanded', true);

    $this->getWidgetSchema()
            ->setLabel('sf_guard_message_group_list', false)
            ->setLabel('sf_guard_message_user_list', false);
  }

}
