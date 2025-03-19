<?php
/**
 * SearchTest
 *
 */

namespace Feature;

require_once __DIR__ . '/../BaseTest.php';



use Tests\BaseTest;


class DatabaseConnectionTest extends BaseTest
{
    public function testDatabaseConnection(): void
    {
        $result = $this->db->executeSelectQuery('SELECT * FROM test');
        $this->assertEquals("This is test Name", $result[0]['name']);
       
    }

}