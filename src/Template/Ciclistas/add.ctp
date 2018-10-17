<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ciclistas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ciclistas form large-9 medium-8 columns content">
    <?= $this->Form->create($ciclista) ?>
    <fieldset>
        <legend><?= __('Add Ciclista') ?></legend>
        <?php
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
            echo $this->Form->control('dni');
            echo $this->Form->control('fecha_nac', ['empty' => true]);
            echo $this->Form->control('direccion');
            echo $this->Form->control('email');
            echo $this->Form->control('telefono');
            echo $this->Form->control('perteneces_grupo');
            echo $this->Form->control('grupo');
            echo $this->Form->control('tipo1');
            echo $this->Form->control('tipo2');
            echo $this->Form->control('tipo3');
            echo $this->Form->control('tipo4');
            echo $this->Form->control('tipo5');
            echo $this->Form->control('tipo6');
            echo $this->Form->control('tipo7');
            echo $this->Form->control('tipo8');
            echo $this->Form->control('tipo9');
            echo $this->Form->control('tipo10');
            echo $this->Form->control('tipo11');
            echo $this->Form->control('tipo12');
            echo $this->Form->control('tipo13');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
