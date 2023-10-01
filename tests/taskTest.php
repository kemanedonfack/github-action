<?php

require_once('../src/Task.php');
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {
    public function testTaskDescription() {
        $task = new Task('Faire les courses');
        $this->assertEquals('Faire les courses', $task->getDescription());
    }

    public function testTaskCompletion() {
        $task = new Task('Faire les courses');
        $this->assertFalse($task->isCompleted());

        $task->complete();
        $this->assertTrue($task->isCompleted());
    }
}
