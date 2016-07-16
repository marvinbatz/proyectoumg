<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Pacientes', 'typePlural' => 'Pacientes')); ?>
</nav>
<div class="patients index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Genero_id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('Direccion') ?></th>
                <th><?= $this->Paginator->sort('Municipio') ?></th>
                <th><?= $this->Paginator->sort('Departamento') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('Celular') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= $patient->has('carrier')  ?></td>
                <td><?= h($patient->name) ?></td>
                <td><?= h($patient->street_address) ?></td>
                <td><?= h($patient->city) ?></td>
                <td><?= h($patient->state) ?></td>
                <td><?= h($patient->zipcode) ?></td>
                <td><?= h($patient->email) ?></td>
                <td><?= h($patient->phone) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
