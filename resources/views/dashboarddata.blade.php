<!DOCTYPE html>
<html>
<head>
    <title>Students Dashboard</title>
</head>
<body>

<h2>Students List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php foreach($students as $student): ?>

    <tr>
        <td><?= $student->id ?></td>
        <td><?= $student->name ?></td>
        <td><?= $student->email ?></td>
        <td><?= $student->age ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>