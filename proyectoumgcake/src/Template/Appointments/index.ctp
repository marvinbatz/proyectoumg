<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Cita', 'typePlural' => 'Citas')); ?>
</nav>
<div class="appointments index large-9 medium-8 columns content">
    <h3><?= __('Appointments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('patient_id') ?></th>
                <th><?= $this->Paginator->sort('doctor_id') ?></th>
                <th><?= $this->Paginator->sort('appointment_date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?= $appointment->has('patient') ? $this->Html->link($appointment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appointment->patient->id]) : '' ?></td>
                <td><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appointment->doctor->id]) : '' ?></td>
                <td><?= h($appointment->appointment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $appointment->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $appointment->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
