<h1>Detail</h1>

<table>
    <tr>
        <th>ID</th>
        <td><?= $user->id ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?= $user->name ?></td>
    </tr>
    <tr>
        <th>Sex (Sexual Orientation / Gender Identity)</th>
        <td>
            <?= $sexOptions[$user->sex] ?>
            <?= $user->sogi ? "( $user->sogi )" : '' ?>
        </td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?= $user->phone ?></td>
    <tr>
        <th>Email</th>
        <td><?= $user->email ?></td>
    </tr>
    <tr>
        <th>Created at</th>
        <td><?= $user->created ?></td>
    </tr>
    <tr>
        <th>Modified at</th>
        <td><?= $user->modified ?></td>
    </tr>
</table>
