<h1>Edit (ID:<?= $user->id ?>)</h1>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('name') ?>
<fieldset>
    <legend>Sex</legend>
    <?= $this->Form->radio('sex', [1 => 'man', 2 => 'woman', 3 => 'other']) ?>
</fieldset>
<?= $this->Form->control('sogi', ['label' => '(Sexual Orientation / Gender Identity)']) ?>
<?= $this->Form->control('phone') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->button('Save') ?>
<?= $this->Form->end() ?>

<a href="/">Back to Home</a>
