<?
class Reverser
{
    static function revertCharacters($str)
    {
        //return strrev($str);

        $r = '';
        for ($i = strlen($str); $i>=0; $i--) {
            $r .= substr($str, $i, 1);
        }
        return $r;
    }

}

// $result = Reverser::revertCharacters("Привет! Давно не виделись.");
// echo($result);