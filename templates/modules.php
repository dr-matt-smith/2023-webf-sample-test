<!doctype html>
<html lang="en">
<head>
    <title>
        wednesday modules page
    </title>
</head>

<body>
<h1>
    modules page
</h1>

<table>
    <?php
    foreach ($modules as $module):
    ?>
    <tr>
        <td>
           <?= $module->getId() ?>: <?= $module->getName() ?>, year <?= $module->getYear() ?>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>

</body>
</html>
