<?php

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        return new PDO(
            "pgsql:host=ec2-52-45-179-101.compute-1.amazonaws.com;port=5432;dbname=dfkk8f25cub514;",
            'pxegmzkkwikpoh',
            '1c811a9c3e3b10250d905348542c87035d54cfd830024957fa3e0434e8b8da2b',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ],
        );
    }
}
