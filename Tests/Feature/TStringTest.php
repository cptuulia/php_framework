<?php
/**
 * SearchTest
 *
 */

namespace Feature;

require_once __DIR__ . '/../BaseTest.php';



use Tests\BaseTest;
use App\Traits\TString;

class TStringTest extends BaseTest
{
    use TString;

    public function testTranslate(): void
    {
    $string = 'snake_to_camel';
    $string = $this->snakeToCamel($string);
    $this->assertEquals('snakeToCamel', $string);


    $string = 'snaKe_tO_Camel';
    $string = $this->snakeToCamel($string);
    $this->assertEquals('snakeToCamel', $string);

    $string = 'snakeToCamel';
    $string = $this->snakeToCamel($string);
    $this->assertEquals('snakeToCamel', $string);

    }

}