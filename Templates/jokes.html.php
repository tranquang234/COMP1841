<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jokes with Images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #fafafa;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        img {
            max-width: 100px;
            border-radius: 8px;
        }
        caption {
            margin-bottom: 10px;
            font-size: 1.5em;
            font-weight: bold;
        }
        .animal-gallery {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        .animal-gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <table>
        <caption>😂 Jokes Table</caption>
        <tr>
            <th>ID</th>
            <th>Joke Text</th>
            <th>Date</th>
            <th>Image</th>
        </tr>
        <?php foreach ($jokes as $joke): ?>
            <tr>
                <td><?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></td>
                <td>
                    <?php
                        $date = date('D, d M Y', strtotime($joke['jokedate']));
                        echo $date;
                    ?>
                </td>
                <td>
                    <?php if (!empty($joke['image'])): ?>
                        <img src="../jokes_pic/<?= htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Joke image">
                    <?php else: ?>
                        <em>No image</em>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="animal-gallery">
        <img src="../jokes_pic/pig.jpg" alt="Pig">
        <img src="../jokes_pic/bird.jpg" alt="Bird">
        <img src="../jokes_pic/dog.jpg" alt="Dog">
    </div>
</body>
</html>
