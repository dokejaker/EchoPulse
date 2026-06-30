<?php
/**
 * Tests for EchoPulse
 */

use PHPUnit\Framework\TestCase;
use Echopulse\Echopulse;

class EchopulseTest extends TestCase {
    private Echopulse $instance;

    protected function setUp(): void {
        $this->instance = new Echopulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echopulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
