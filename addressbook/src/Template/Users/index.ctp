<h1>AddressBook</h1>

<table>
    <thead>
        <tr>
            <th>Action</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?= $this->Html->link('Detail', ['action' => 'view', $user->id]) ?>
                    /
                    <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
                </td>
                <td><?= $user->name ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->email ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
