<?php
// DatabaseFunctions.php
// Function library for all SQL operations

function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function totalJokes($pdo)
{
    $query = query($pdo, 'SELECT COUNT(*) FROM joke');
    $row = $query->fetch();
    return $row[0];
}

function getJoke($pdo, $id)
{
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM joke WHERE id = :id', $parameters);
    return $query->fetch();
}

function updateJoke($pdo, $id, $joketext, $authorid, $categoryid)
{
    $parameters = [
        ':id' => $id,
        ':joketext' => $joketext,
        ':authorid' => $authorid,
        ':categoryid' => $categoryid
    ];
    query($pdo, 'UPDATE joke SET joketext = :joketext, authorid = :authorid, categoryid = :categoryid WHERE id = :id', $parameters);
}

function deleteJoke($pdo, $id)
{
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM joke WHERE id = :id', $parameters);
}

function insertJoke($pdo, $joketext, $authorid, $categoryid)
{
    $parameters = [
        ':joketext' => $joketext,
        ':authorid' => $authorid,
        ':categoryid' => $categoryid
    ];
    query($pdo, 'INSERT INTO joke (joketext, jokedate, authorid, categoryid) VALUES (:joketext, CURDATE(), :authorid, :categoryid)', $parameters);
}

function allJokes($pdo)
{
    $query = query($pdo, 'SELECT joke.id, joketext, jokedate, name AS authorname, categoryname 
                          FROM joke 
                          INNER JOIN author ON authorid = author.id 
                          INNER JOIN category ON categoryid = category.id');
    return $query->fetchAll();
}

function allAuthors($pdo)
{
    $query = query($pdo, 'SELECT * FROM author');
    return $query->fetchAll();
}

function allCategories($pdo)
{
    $query = query($pdo, 'SELECT * FROM category');
    return $query->fetchAll();
}
?>
