<?php
/**
 * Tests for MintNode
 */

use PHPUnit\Framework\TestCase;
use Mintnode\Mintnode;

class MintnodeTest extends TestCase {
    private Mintnode $instance;

    protected function setUp(): void {
        $this->instance = new Mintnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mintnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
