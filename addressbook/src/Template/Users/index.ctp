<?= $this->Html->link('Add', ['action' => 'add'], ['class'=> 'button', 'style' => 'float:right']) ?>

<h1>AddressBook</h1>

<table>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td>
                <?= $this->Html->link('Detail', ['action' => 'view', $user->id]) ?>
                /
                <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
                /
                <?= $this->Form->postLink('Delete', ['action' => 'delete', $user->id], ['confirm' => 'Are you sure?']) ?>
            </td>
            <td><?= $user->name ?></td>
            <td><?= $user->phone ?></td>
            <td><?= $user->email ?></td>
        </tr>
    <?php endforeach ?>
</table>

<ul class="pagination">
    <?= $this->Paginator->prev('< Prev'); ?>
    <?= $this->Paginator->next('Next >'); ?>
</ul>
