<!doctype html>
<html lang="en">
<head>
    <title>
        wednesday One Module Page
    </title>
</head>

<body>
<h1>
    One Module Page
</h1>

<p>
    Module <?= $module->getId() ?>
</p>

<ul>
    <li>
        name = <?= $module->getName() ?>
    </li>
    <li>
        year = <?= $module->getYear() ?>
    </li>
</ul>


</body>
</html>
