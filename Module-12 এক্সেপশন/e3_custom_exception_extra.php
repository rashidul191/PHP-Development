<?php

class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}


interface NetworkStorage
{
    function connect();

    function getName();
}

class MySQLServer implements NetworkStorage
{
    function connect()
    {
        throw new DiskFullException();
    }
    function getName()
    {
        return "MySQLServer";
    }
}
class PostgreSQLServer implements NetworkStorage
{
    function connect()
    {
        return $this;
    }
    function getName()
    {
        return "PostgreSQLServer";
    }
}
class MsSQLServer implements NetworkStorage
{
    function connect()
    {
        throw new NetworkException();
    }
    function getName()
    {
        return "MsSQLServer";
    }
}


class ConnectionPool
{
    private $connection;
    private $storage;

    function __construct()
    {
        $this->storage = array();
    }
    function addStorage(NetworkStorage $storage)
    {
        array_push($this->storage, $storage);
    }

    function getConnection()
    {
        foreach ($this->storage as $storage) {

            try {
                $this->connection =  $storage->connect();
            } catch (ServerLoadException $error) {
                echo $storage->getName() . " is facing huge load \n";
            } catch (NetworkException $error) {
                echo $storage->getName() . " is having some problem with it's network\n";
            } catch (DiskFullException $error) {
                echo $storage->getName() . " has it's disk full\n";
            }
            if ($this->connection) {
                break;
            }
        }

        if ($this->connection) {
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MsSQLServer();

$cp = new ConnectionPool();

$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
