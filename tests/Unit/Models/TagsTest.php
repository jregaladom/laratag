<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Tag;

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
        $tag->name = 'un texto';
        $this->assertEquals('un-texto', $tag->slug);
    }
}
