<?php foreach ($Messages as $Message): ?>
  <?php if($Message->getSfGuardMessageType() == $Type && $Message->getSfGuardMessagePriority() == $Priority): ?>
  <li><?php echo $Message->getMessage() ?></li>
  <?php endif; ?>
<?php endforeach; ?>
