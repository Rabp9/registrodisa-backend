<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciclista $ciclista
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ciclista'), ['action' => 'edit', $ciclista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ciclista'), ['action' => 'delete', $ciclista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciclista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ciclistas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ciclista'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ciclistas view large-9 medium-8 columns content">
    <h3><?= h($ciclista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($ciclista->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Paterno') ?></th>
            <td><?= h($ciclista->apellido_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Materno') ?></th>
            <td><?= h($ciclista->apellido_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($ciclista->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($ciclista->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($ciclista->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($ciclista->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perteneces Grupo') ?></th>
            <td><?= h($ciclista->perteneces_grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= h($ciclista->grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo1') ?></th>
            <td><?= h($ciclista->tipo1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo2') ?></th>
            <td><?= h($ciclista->tipo2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo3') ?></th>
            <td><?= h($ciclista->tipo3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo4') ?></th>
            <td><?= h($ciclista->tipo4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo5') ?></th>
            <td><?= h($ciclista->tipo5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo6') ?></th>
            <td><?= h($ciclista->tipo6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo7') ?></th>
            <td><?= h($ciclista->tipo7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo8') ?></th>
            <td><?= h($ciclista->tipo8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo9') ?></th>
            <td><?= h($ciclista->tipo9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo10') ?></th>
            <td><?= h($ciclista->tipo10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo11') ?></th>
            <td><?= h($ciclista->tipo11) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo12') ?></th>
            <td><?= h($ciclista->tipo12) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo13') ?></th>
            <td><?= h($ciclista->tipo13) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ciclista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nac') ?></th>
            <td><?= h($ciclista->fecha_nac) ?></td>
        </tr>
    </table>
</div>
