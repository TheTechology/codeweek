<?php

namespace Tests\Feature;

use App\School;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApproveEventTest extends TestCase
{

    use DatabaseMigrations;



    public function setup()
    {
        parent::setUp();
        $this->seed('RolesAndPermissionsSeeder');



    }

    /** @test */
    public function event_can_be_approved_by_admin()
    {

        $this->withExceptionHandling();


        $superadmin = create('App\User');
        $superadmin->assignRole('super admin');

        $this->signIn($superadmin);

        $event = create('App\Event', ['status'=>'PENDING']);

        $this->assertEquals($event->fresh()->status, 'PENDING');

        $this->post(route('event.approve', $event));

        $this->assertEquals($event->fresh()->status, 'APPROVED');


    }

    /** @test */
    public function event_cant_be_approved_by_ambassador_of_other_country()
    {

        $this->withExceptionHandling();


        $ambassador = create('App\User',['country_iso'=>'FR']);
        $ambassador->assignRole('ambassador');

        $this->signIn($ambassador);

        $event = create('App\Event', ['status'=>'PENDING','country_iso'=>'BE']);

        $this->assertEquals($event->fresh()->status, 'PENDING');

        $this->post(route('event.approve', $event))->assertStatus(403);

        //$this->assertEquals($event->fresh()->status, 'PENDING');


    }

    /** @test */
    public function event_can_be_approved_by_ambassador_of_same_country()
    {

        $this->withExceptionHandling();


        $ambassador = create('App\User',['country_iso'=>'FR']);
        $ambassador->assignRole('ambassador');

        $this->signIn($ambassador);

        $event = create('App\Event', ['status'=>'PENDING','country_iso'=>'FR']);

        $this->assertEquals($event->fresh()->status, 'PENDING');

        $this->post(route('event.approve', $event));

        $this->assertEquals($event->fresh()->status, 'APPROVED');


    }




}


