{"filter":false,"title":"edit.ctp","tooltip":"/src/Template/Patients/edit.ctp","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":1,"column":4},"end":{"row":16,"column":9},"action":"remove","lines":["<ul class=\"side-nav\">","        <li class=\"heading\"><?= __('Actions') ?></li>","        <li><?= $this->Form->postLink(","                __('Delete'),","                ['action' => 'delete', $patient->id],","                ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]","            )","        ?></li>","        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('List Carriers'), ['controller' => 'Carriers', 'action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('New Carrier'), ['controller' => 'Carriers', 'action' => 'add']) ?></li>","        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?></li>","        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>","    </ul>"],"id":2},{"start":{"row":1,"column":4},"end":{"row":1,"column":93},"action":"insert","lines":["<?= $this->Element('actions', array('type' => 'Patient', 'typePlural' => 'Patients')); ?>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":93},"end":{"row":1,"column":93},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1468614150667,"hash":"dd6c582fd9e01a1566498ce9e6f2409c65cc096b"}