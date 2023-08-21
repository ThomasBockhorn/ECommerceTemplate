<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Admin;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_to_see_if_admin_model_exists(): void
    {
        $this->assertTrue(class_exists(Admin::class));
    }
}
