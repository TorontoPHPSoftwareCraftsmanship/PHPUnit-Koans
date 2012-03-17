<?php

include 'FizzBuzz.php';

class PHPUnitKoansTest extends PHPUnit_Framework_TestCase {
   
   public function testIntroAssertTrue() {
      // This is the most basic type of Assertion. It excepts that 
      // its input evalutes to true.
      $this->assertTrue(
	 false,
	 'Hey I am suppose to be true!'
      );
   }

   public function testAssertTrueWithStatement() {
      $this->assertTrue(
	 1 == 0,
	 'Make me equal TRUE'
      );
   }

   public function testAssertTrueWithFunction() {
      $this->assertTrue(
	 in_array( 'foo', array('bar') ),
	 'Make this function return TRUE'
      );
   }
   
   public function testAssertFalseIsLikeAssertTrue() {
      $this->assertFalse(
	 1 == 1,
	 'Make this function return FALSE'
      );
   }

   public function testAssertEqualsIntro() {
      // assertEquals passes if it's two arguments are equal
      // to each other.
      $this->assertEquals(
	 'foo',  // This is the expected result
	 '___',  // This is the actual result
	 'Fill in the blank.'
      );
   }
   
   public function testAssertEqualsWithStatement() {
      $this->assertEquals(
	 19,  
	 10 + 1,  
	 'This statement should equal 19.'
      );
   }
   
   public function testAssertEqualsWithFunction() {
      $this->assertEquals(
	 3,  
	 count( array('foo','bar') ),  
	 'Make this function return 3.'
      );
   }
   
   public function testAssertEqualsWithClassFunction() {
      $fizzbuzz = new FizzBuzz();
      $this->assertEquals(
	 1,  
	 count( array('foo','bar') ),  
	 'Make this function return 3.'
      );
   }
   
   
}
