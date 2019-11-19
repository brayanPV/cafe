<?php
class Database
{
    public static function StartUp()
    {
        
        $pdo = new PDO('mysql:host=madarme.co;dbname=estudiante_16;charset=utf8', 'estudiante_16', 'LonWFNBfP1');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
    
}