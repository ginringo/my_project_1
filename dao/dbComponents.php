<?php

// DB接続関数
function dbConnect()
{
    try {
        $dbh = new PDO('mysql:dbname=my_db; host=db;', 'tanaka', 'pass');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $dbh;
    } catch (PDOException $e) {
        echo 'DebuggingError: ' . $e->getMessage();
        exit();
    }
}

function update($sql, $bindParams)
{
    $dbh = dbConnect();
    $stmt = $dbh->prepare($sql);
    $stmt->execute($bindParams);
    return $stmt->rowCount();
}

function selectAllRow($sql, $bindParams)
{
    $dbh = dbConnect();
    $stmt = $dbh->prepare($sql);
    $stmt->execute($bindParams);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function selectOneRow($sql, $bindParams)
{
    $dbh = dbConnect();
    $stmt = $dbh->prepare($sql);
    $stmt->execute($bindParams);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
