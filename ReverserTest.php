<?
require_once 'PHPUnit/Framework.php';
require_once 'Reverser.php';

use PHPUnit\Framework\TestCase;
use Reverser;

class ReverserTest extends TestCase
{
    public function revertCharactersTest($a, $b)
    {
        $this->assertEquals($b, Reverser::revertCharacters($a));
    }

    public function providerPower ()
    {
        return array (
            array ('abc', 'cba'),
            array ('123', '321'),
            array ('Привет! Давно не виделись.', '.ьсиледив ен онваД !тевирП')
        );
    }
}
