<h1>Add</h1>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('name') ?>
<fieldset>
    <legend>Sex</legend>
    <?= $this->Form->radio('sex', $sexOptions) ?>
</fieldset>
<?= $this->Form->control('sogi', ['label' => '(Sexual Orientation / Gender Identity)']) ?>
<?= $this->Form->control('phone') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->button('Save') ?>
<?= $this->Form->end() ?>
