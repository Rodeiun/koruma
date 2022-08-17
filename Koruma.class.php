<?php
    namespace Main;
    class Koruma 
    {
        public static function QueryString($str)
        {
            $yeni = trim($str);
            $yeni = strip_tags($yeni);
            $yeni = str_replace(["insert", "INSERT", "delete", "DELETE", "select", "SELECT", "exec", "EXEC", "union", "UNION", "drop", "DROP", "{", "?", "'", """, "="], "", $yeni);
            return $yeni;
        }
        public static function Input($str)
        {
            $yeni = trim($str);
            $yeni = strip_tags($yeni);
            $yeni = htmlspecialchars($yeni, ENT_QUOTES);
            return $yeni;
        }
        public static function Exists($value)
        {
            switch($value)
            {
                case 'POST':
                    {
                        return (!empty($_SERVER["REQUEST_METHOD"] == "POST")) ? true : false;
                        break;
                    }
                case 'GET':
                    {
                        return (!empty($_GET)) ? true : false;
                        break;
                    }
                default:
                    {
                        return false;
                        break;
                    }
            }
        }
    }
?>
