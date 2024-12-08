<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Function to generate multiplication results
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Generate multiplication table for number 2
    $tableData = multiplication(2);
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['multiplier']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
