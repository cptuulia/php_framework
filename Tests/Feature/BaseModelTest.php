<?php

/**
 * Test the functions for the BaseModel
 */

namespace Feature;

require_once __DIR__ . '/../BaseTest.php';

use App\Factory\FModel;
use App\Models\Test;
use Tests\BaseTest;


class BaseModelTest extends BaseTest
{
    public function testInsertAndUpdateByArray(): void
    {
        /** Test $mTest */
        $mTest = FModel::build('Test');


        //
        // Insert
        //
        $data =  [
            'name' => 'test1',
            'dummy' => 'not to be inserted, because not a property'
        ];
        $id = $mTest->insert($data);
        // Check
        $savedTestItem = $mTest->get($id);
        $this->assertEquals($data['name'], $savedTestItem[0]['name']);


        //
        // Update
        // 
        $data =  [
            'id' => $id,
            'name' => 'test1 updated',
            'dummy' => 'not to be inserted, because not a property'
        ];
        $mTest->update($data);
        $updatedTestItem = $mTest->get($id);
        $this->assertEquals($data['name'], $updatedTestItem[0]['name']);
    }


    public function testInsertAndUpdateByeSetModelProperties(): void
    {
        /** Test $mTest */
        $mTest = FModel::build('Test');


        //
        // Insert
        //
        $data =  [
            'name' => 'test2',
            'dummy' => 'not to be inserted, because not a property'
        ];
        $mTest->setModelProperties($data);
        $id = $mTest->insert();
        // Check
        $savedTestItem = $mTest->get($id);
        $this->assertEquals($data['name'], $savedTestItem[0]['name']);



        //
        // Update
        // 

        /** Test $mTest2 */
        $mTest2 = FModel::build('Test');
        $data =  [
            'id' => $id,
            'name' => 'test2 updated',
            'dummy' => 'not to be inserted, because not a property'
        ];
        $mTest->setModelProperties($data);
        $mTest->update();
        $updatedTestItem = $mTest->get($id);
        $this->assertEquals($data['name'], $updatedTestItem[0]['name']);
    }
}
