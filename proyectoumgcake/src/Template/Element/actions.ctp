<ul class="side-nav">
    <li class="heading"><?= __('Actions'); ?></li>
    <li class="heading"><?= $this->Html->link(__('Agregar ' . $type), ['action' => 'add']); ?></li>
    <li class="heading"><?= $this->Html->link(__('Listar ' . $typePlural), ['action' => 'index']); ?></li>
</ul>