<?php
/**
 * Tests for SketchGyrate
 */

use PHPUnit\Framework\TestCase;
use Sketchgyrate\Sketchgyrate;

class SketchgyrateTest extends TestCase {
    private Sketchgyrate $instance;

    protected function setUp(): void {
        $this->instance = new Sketchgyrate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchgyrate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
