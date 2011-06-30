<?php

/**
 * sfGuardMessage form.
 *
 * @package    sfGuardMessagesPlugin
 * @subpackage form
 * @author     Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessageForm extends BasesfGuardMessageForm
{

  public function configure()
  {
    $this->getWidget('visible_from')
            ->setDefault(date('Y-m-d H:i:s'));
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
