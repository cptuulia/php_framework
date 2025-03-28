<?php

namespace App\Controllers;

use App\Plugins\Http\Response as Status;

class IndexController extends BaseController
{
    /**
     * Controller function used to test whether the project was set up properly.
     *
     * @return void
     */
    public function test()
    {
        // Respond with 200 (OK):
        (new Status\Ok(['message' => 'Hello world!']))->send();
    }
    protected function getValidationRules(): array
    {
        return [];
    }
}
