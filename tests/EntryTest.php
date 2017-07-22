<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class EntryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $entries = json_decode($this->json('GET', 'entries/')->response->getContent());
        $this->assertEquals(
            count($entries), 5
        );
    }
}
