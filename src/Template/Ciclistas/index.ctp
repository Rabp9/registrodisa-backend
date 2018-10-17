<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciclista[]|\Cake\Collection\CollectionInterface $ciclistas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ciclista'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ciclistas index large-9 medium-8 columns content">
    <h3><?= __('Ciclistas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perteneces_grupo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo7') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo8') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo9') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo10') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo11') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo12') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo13') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciclistas as $ciclista): ?>
            <tr>
                <td><?= $this->Number->format($ciclista->id) ?></td>
                <td><?= h($ciclista->nombres) ?></td>
                <td><?= h($ciclista->apellido_paterno) ?></td>
                <td><?= h($ciclista->apellido_materno) ?></td>
                <td><?= h($ciclista->dni) ?></td>
                <td><?= h($ciclista->fecha_nac) ?></td>
                <td><?= h($ciclista->direccion) ?></td>
                <td><?= h($ciclista->email) ?></td>
                <td><?= h($ciclista->telefono) ?></td>
                <td><?= h($ciclista->perteneces_grupo) ?></td>
                <td><?= h($ciclista->grupo) ?></td>
                <td><?= h($ciclista->tipo1) ?></td>
                <td><?= h($ciclista->tipo2) ?></td>
                <td><?= h($ciclista->tipo3) ?></td>
                <td><?= h($ciclista->tipo4) ?></td>
                <td><?= h($ciclista->tipo5) ?></td>
                <td><?= h($ciclista->tipo6) ?></td>
                <td><?= h($ciclista->tipo7) ?></td>
                <td><?= h($ciclista->tipo8) ?></td>
                <td><?= h($ciclista->tipo9) ?></td>
                <td><?= h($ciclista->tipo10) ?></td>
                <td><?= h($ciclista->tipo11) ?></td>
                <td><?= h($ciclista->tipo12) ?></td>
                <td><?= h($ciclista->tipo13) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ciclista->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciclista->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciclista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciclista->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
