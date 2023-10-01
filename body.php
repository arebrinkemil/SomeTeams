<?php
require __DIR__ . '/teams.php';
require __DIR__ . '/data.php';
?>

<table>
    <thead>
        <tr>
            <th>TEAM</th>
            <th>LEAGUE</th>
            <th>CITY</th>
            <th>LAST CHAMPIONS</th>
            <th>SITE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($teams as $TeamName => $team) : ?>
            <tr>
                <td>
                    <?php
                    echo $TeamName;
                    if (array_key_exists('nickname', $team)) {
                        echo " (or " . $team['nickname'] . ")";
                    }
                    ?>
                </td>
                <td><?php echo $team['league']; ?></td>
                <td><?php echo $team['city']; ?></td>
                <td><?php echo $team['last-time-champions'] ?? '-'; ?></td>
                <td><a href="<?php echo $team['url']; ?>"><?php echo $team['url']; ?></a></td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>