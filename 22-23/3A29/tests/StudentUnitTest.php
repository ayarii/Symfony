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

    public function testIsFalse()
    {
        $student= new Student();
        $student->setUsername("asmayari");
        $student->setNce(10);
        $student->setMoyenne(15.5);
        $this->assertFalse($student->getUsername()==="asma");
        $this->assertFalse($student->getNce()===15);
        $this->assertFalse($student->getMoyenne()===10.5);
    }

    public function testIsEmpty(){
        $student= new Student();
        $this->assertEmpty($student->getUsername());
        $this->assertEmpty($student->getNce());
        $this->assertEmpty($student->getMoyenne());
    }

    public function testVerifMoyenne(){
        $student= new Student();
        $student->setMoyenne(10.5);
        $this->assertEquals("10.5",$student->getMoyenne());

    }
}
