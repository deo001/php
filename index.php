<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php | Learning Page</title>
    <style>
        body {
            display: grid;
            background-color: teal;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 50px;
            height: 100vh;
        }
        h1 {
            color: white;
        }
        
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            color: #333;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        
    </style>
</head>
<body>
    <h1>
        <?php
            // $bookTitle = "Learning PHP";
            // $read = false
            $books =[
                [
                    "name" => "Learning PHP",
                    "read" => false,
                    "author" => "John Doe",
                    "year" => 2021,
                ],
                [
                    "name" => "Learning JavaScript",
                    "read" => true,
                    "author" => "Jane Doe",
                    "year" => 2020,
                ],
                [
                    "name" => "Learning JavaScript",
                    "read" => true,
                    "author" => "Jane Doe",
                    "year" => 2020,
                ],
                [
                    "name" => "Learning HTML",
                    "read" => true,
                    "author" => "Jack Doe",
                    "year" => 2022,
                ],
                [
                    "name" => "Learning CSS",
                    "read" => false,
                    "author" => "Jill Doe",
                    "year" => 2023,
                ],
                [
                    "name" => "Learning Python",
                    "read" => false,
                    "author" => "Jim Doe",
                    "year" => 2019,
                ],
            ]

            
        ?>

        <ul>
           <?php
            foreach (array_filter($books, filterByAuthor('Jim Doe')) as $book) {
                echo "<li>" . $book['name'] . " by " . $book['author'] . " (" . $book['year'] . ")</li>";
                
            }?>
        </ul> 
<?php
        function filterByAuthor( $author): callable {
            return function ($book) use ($author) {
                return $book['author'] === 'Jim Doe';
            };
        }

        ?>



    </h1>
</body>
</html>