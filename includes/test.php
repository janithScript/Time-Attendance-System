<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
            border-radius: 8px;
            font-size: 12px;
        }

        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: normal;
        }

        tr {
            transition: background-color 0.3s;
        }

        tr:nth-child(even) {
            background-color: #DFA7A7;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 8px;
            margin: 0 5px;
            text-decoration: none;
            cursor: pointer;
            color: #4CAF50;
            background-color: #ddd;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .pagination a:hover {
            background-color: #bbb;
        }

        .pagination .arrow {
            margin: 0 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<?php
$csvFilePath = __DIR__ . '/DEVICE LIST (Autosaved) correct.csv';

$rowsPerPage = 12; // Number of rows per page
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

if (file_exists($csvFilePath)) {
    if (($handle = fopen($csvFilePath, 'r')) !== false) {
        $totalRows = count(file($csvFilePath)) - 1; // Subtract 1 to exclude the header row
        $totalPages = ceil($totalRows / $rowsPerPage);
        $start = max(1, min($currentPage - 1, $totalPages - 2)) * $rowsPerPage;

        fseek($handle, 0); // Reset file pointer to the beginning
        $header = true;

        echo '<table>';
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if ($header) {
                $header = false;
                continue; // Skip header row
            }

            if ($start > 0) {
                $start--;
                continue; // Skip rows until the starting point
            }

            echo '<tr>';
            foreach ($data as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';

            $rowsPerPage--;
            if ($rowsPerPage === 0) {
                break; // Stop when reaching the end of the current page
            }
        }
        echo '</table>';

        fclose($handle);

        // Pagination links
        echo '<div class="pagination">';
        if ($currentPage > 1) {
            echo '<a href="?page=' . ($currentPage - 1) . '" class="arrow">&#9664; Previous</a>';
        }

        for ($i = max(1, $currentPage - 1); $i <= min($totalPages, $currentPage + 1); $i++) {
            echo '<a href="?page=' . $i . '">' . $i . '</a>';
        }

        if ($currentPage < $totalPages) {
            echo '<a href="?page=' . ($currentPage + 1) . '" class="arrow">Next &#9654;</a>';
        }

        echo '</div>';
    } else {
        echo "Error reading the CSV file.";
    }
} else {
    echo "CSV file not found at: $csvFilePath";
}
?>
</body>
</html>
