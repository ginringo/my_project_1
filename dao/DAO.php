<?php

class DAO
{
    public function dbConnect()
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

    public function update($sql, $bindParams)
    {
        $dbh = $this->dbConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute($bindParams);
        return [
            'rowCount' => $stmt->rowCount(),
            'lastInsertId' => $dbh->lastInsertId(),
        ];
    }

    public function selectAllRow($sql, $bindParams)
    {
        $dbh = $this->dbConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute($bindParams);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectOneRow($sql, $bindParams)
    {
        $dbh = $this->dbConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute($bindParams);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
