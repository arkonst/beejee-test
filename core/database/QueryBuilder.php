<?php

/**
* Create a query builder
*/
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
              
        $sql = "SELECT * FROM {$table} WHERE 1=1";
        if (!empty($_GET['sortby']) && $_GET['sortby'] = 'name') {
            $sql .= ' GROUP BY username';
        }
        else if (!empty($_GET['sortby']) && $_GET['sortby'] = 'email') {
            $sql .= ' GROUP BY useremail';
        }
        else if (!empty($_GET['sortby']) && $_GET['sortby'] = 'status') {
            $sql .= ' GROUP BY status';
        }
        else if (empty($_GET['sortby'])) {
            $sql .= ' GROUP BY id DESC';
        }

	    $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectUserFromDB($table, $name, $password)
    {
        $statement = $this->pdo->prepare("select * from {$table} where 
            name='{$name}' and
            password='{$password}';");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertIntoDatabase($table, $parameters)
    {
        

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );


        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);
    }

    public function updateStatusInDB($table, $taskId)
    {
        $statement = $this->pdo->prepare("update {$table} set status='1' where 
            id={$taskId}");

        $statement->execute();
    }

    public function updateTextInDB($table, $taskId, $text)
    {
        $statement = $this->pdo->prepare("update {$table} set text='{$text}' where 
            id={$taskId}");

        $statement->execute();
    }   

}