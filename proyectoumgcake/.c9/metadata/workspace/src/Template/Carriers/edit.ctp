{"filter":false,"title":"edit.ctp","tooltip":"/src/Template/Carriers/edit.ctp","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":1,"column":4},"end":{"row":12,"column":9},"action":"remove","lines":["<ul class=\"side-nav\">","        <li class=\"heading\"><?= __('Actions') ?></li>","        <li><?= $this->Form->postLink(","                __('Delete'),","                ['action' => 'delete', $carrier->id],","                ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]","            )","        ?></li>","        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?></li>","        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?></li>","    </ul>"],"id":2},{"start":{"row":1,"column":4},"end":{"row":1,"column":93},"action":"insert","lines":["<?= $this->Element('actions', array('type' => 'Carrier', 'typePlural' => 'Carriers')); ?>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":93},"end":{"row":1,"column":93},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1468614248598,"hash":"8d1a35c8845f122168799c26d0009d5bff5aff08"}