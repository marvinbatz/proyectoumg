{"filter":false,"title":"edit.ctp","tooltip":"/src/Template/Doctors/edit.ctp","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":1,"column":4},"end":{"row":12,"column":9},"action":"remove","lines":["<ul class=\"side-nav\">","        <li class=\"heading\"><?= __('Actions') ?></li>","        <li><?= $this->Form->postLink(","                __('Delete'),","                ['action' => 'delete', $doctor->id],","                ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]","            )","        ?></li>","        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?></li>","    </ul>"],"id":2},{"start":{"row":1,"column":4},"end":{"row":1,"column":91},"action":"insert","lines":["<?= $this->Element('actions', array('type' => 'Doctor', 'typePlural' => 'Doctors')); ?>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":91},"end":{"row":1,"column":91},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1468614309819,"hash":"59e404827b2fc4cf7b8d688b16f61bcd1c761938"}