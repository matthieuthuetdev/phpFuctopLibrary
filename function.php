<?php
class PhpFunctionLibrary
{
    private PDO $connection;
    public function __construct(PDO $pdoInstance)
    {
        $this->connection = $pdoInstance;
    }
}
