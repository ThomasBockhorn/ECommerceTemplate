<?php

namespace Tests\Unit;

use App\Models\Admin;
use Tests\TestCase;

class AdminTest extends TestCase
{
    public function test_to_see_if_admin_model_exists(): void
    {
        $this->assertTrue(class_exists(Admin::class));
    }
}
