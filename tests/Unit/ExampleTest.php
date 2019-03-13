<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /*public function testTitlesCount() {
        $titles = new Title;
        $this->assertTrue(count($titles->all() ) === 6, 'It should have 6 titles');
    }

    public function testLastTitlesShouldBeProfessor() {
        $titles = new Title;
        $titles_array = $titles->all();
        $this->assertEquals('Professor', array_pop( $titles_array ), 'Titles last element should be professor');
    }*/

    
}
