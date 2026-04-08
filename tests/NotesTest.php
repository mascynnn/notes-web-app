<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Notes.php';

class NotesTest extends TestCase
{
    public function testAddNote()
    {
        $notes = new Notes();
        $notes->addNote("Test Note");

        $this->assertCount(1, $notes->getNotes());
    }

    public function testGetNotes()
    {
        $notes = new Notes();
        $notes->addNote("Note 1");
        $notes->addNote("Note 2");

        $this->assertEquals(["Note 1", "Note 2"], $notes->getNotes());
    }
}