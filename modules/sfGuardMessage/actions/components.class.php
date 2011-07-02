<?php

class sfGuardMessageComponents extends sfComponents
{
  public function executeMessages(sfWebRequest $request)
  {
    $this->Messages = sfGuardMessageQuery::create()
            ->filterByIsActive(true)
            ->filterByVisibleFrom(date('Y-m-d H:i:s'), Criteria::LESS_THAN)
            ->filterByVisibleTo(null, Criteria::ISNULL)
            ->addOr(sfGuardMessagePeer::VISIBLE_TO, date('Y-m-d H:i:s'), Criteria::GREATER_THAN)
            ->joinsfGuardMessagePriority()
            ->joinsfGuardMessageType()
            ->orderByTypeId()
            ->orderByPriorityId()
            ->find();
  }
}