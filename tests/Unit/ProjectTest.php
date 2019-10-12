<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
	use RefreshData;

	/** @test */
	
	public function it_has_a_path()
	{
		$project = factory('App\Project')->create();

		$this->assertEquals('/projects' . '/' . $project->id, $project->path());
	}
}
