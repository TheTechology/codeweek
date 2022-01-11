<?php

namespace Tests\Feature\Achievements;

use App\Achievements\Types\AchievementType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AchievementTypeTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function it_sets_a_default_name()
    {
        $type = new FakeAchievementType();

        $this->assertEquals('Fake Achievement Type', $type->name());

    }


}

class FakeAchievementType extends AchievementType
{

    public $icon = 'icon.svg';

    public function description()
    {
        return 'Some fake description';
    }

    public function qualifier($user)
    {
        return true;
    }
}