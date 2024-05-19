<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <h1>Question 2</h1>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $x) : ?>
            <tr>
                <td><?php echo htmlspecialchars($x['name']); ?></td>
                <td><?php echo htmlspecialchars($x['program']); ?></td>
                <td><?php echo htmlspecialchars($x['age']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
