<?php 
class database
{
    protected $pdo,$sql,$statement;
    function __construct()
    {
        try{
            $options = [];
            $this->pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DBNAME,USERNAME,PASSWORD,$options);  
        }catch(PDOException $e)
        {
            //return false;
            exit($e->getMessage());
        }
    }
    function setquery($sql)
    {
        $this->sql = trim($sql);
        return $this;
    }
    function getquery()
    {
       return $this->sql;
    }
    function row($params = [])
    {
        try{
            $this->statement = $this->pdo->prepare($this->sql);
            $this->statement->execute($params);
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function rows($params = [])
    {
        try{
            $this->statement = $this->pdo->prepare($this->sql);
            $this->statement->execute($params);
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function save($params = [])
    {
        try{
            $this->statement = $this->pdo->prepare($this->sql);
            return $this->statement->execute($params);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function disconnect()
    {
        $this->pdo = $this->statement = null;
    }
}