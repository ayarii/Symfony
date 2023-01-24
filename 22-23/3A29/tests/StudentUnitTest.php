<?php

namespace App\Tests;

use App\Entity\Student;
use PHPUnit\Framework\TestCase;

class StudentUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $student = new Student();
        $student->setUsername("asmayari");
        $student->setNce(10);
        $student->setMoyenne(15.5);
        $this->assertTrue($student->getUsername() === "asmayari");
        $this->assertTrue($student->getNce() === 10);
        $this->assertTrue($student->getMoyenne() === 15.5);
    }

}
