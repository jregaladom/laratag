<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;

class TagsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_slug()
    {
        $tag = new Tag();
        $tag->name = 'PHP';
        $this->assertEquals('php', $tag->slug);
    }
}
