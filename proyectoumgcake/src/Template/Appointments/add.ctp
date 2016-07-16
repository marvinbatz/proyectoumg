<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Cita', 'typePlural' => 'Citas')); ?>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Añadir Cita Médica') ?></legend>
        <?php
            echo $this->Form->input('patient_id', ['options' => $patients]);
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('appointment_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ingresar')) ?>
    <?= $this->Form->end() ?>
</div>
