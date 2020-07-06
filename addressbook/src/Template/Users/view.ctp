<h1>Detail</h1>

<table>
    <tr>
        <th>ID</th>
        <td><?= h($user->id) ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?= h($user->name) ?></td>
    </tr>
    <tr>
        <th>Sex (Sexual Orientation / Gender Identity)</th>
        <td>
            <?= $sexOptions[$user->sex] ?>
            <?= $user->sogi ? h("( $user->sogi )") : '' ?>
        </td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?= h($user->phone) ?></td>
    <tr>
        <th>Email</th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th>Created at</th>
        <td><?= h($user->created) ?></td>
    </tr>
    <tr>
        <th>Modified at</th>
        <td><?= h($user->modified) ?></td>
    </tr>
</table>
