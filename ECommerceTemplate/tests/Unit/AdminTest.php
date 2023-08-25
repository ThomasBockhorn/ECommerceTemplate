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

    public function test_to_see_if_admin_model_has_property_adminname(): void
    {
        $admin = new Admin();
        $admin->AdminName = 'admin';
        $this->assertEquals('admin', $admin->AdminName);
    }

    public function test_to_see_if_admin_model_has_property_adminpassword(): void
    {
        $admin = new Admin();
        $admin->AdminPassword = 'password';
        $this->assertEquals('password', $admin->AdminPassword);
    }

    public function test_to_see_if_admin_model_has_property_fillable(): void
    {
        $admin = new Admin();
        $this->assertEquals(['AdminName', 'AdminPassword'], $admin->getFillable());
    }

    public function test_to_see_if_admin_model_has_property_hidden(): void
    {
        $admin = new Admin();
        $this->assertEquals(['AdminPassword'], $admin->getHidden());
    }
}
