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

   /**
   * Now to test some objects  
   * These tests more are more representive of tests  
   * you would right in the real world.
   * 
   * Focus on only programming enough logic to make the
   * test pass. Try not to program ahead of the what the
   * Assertions expect.
   */
   
   public function testFizzBuzz1() {
      // Initialize the object you want to test.
      // This object is know as the Subject Under Test
      $fizzbuzz = new FizzBuzz();
      
      // Now insert test data into a function and
      // get the result
      $result = $fizzbuzz->getResultForNumber(1);

      // Use an Assertion to prove that you got the
      // correct result.
      $this->assertEquals(
	 '1',  
	 $result,  
	 'Update FizzBuzz.php to return 1'
      );
   }
   
   public function testFizzBuzz2() {
      $fizzbuzz = new FizzBuzz();
      
      $result = $fizzbuzz->getResultForNumber(2);

      $this->assertEquals(
	 '2',  
	 $result,  
	 'Update FizzBuzz.php to return 2'
      );
   }
   
   public function testFizzBuzz3() {
      $fizzbuzz = new FizzBuzz();
      
      $result = $fizzbuzz->getResultForNumber(3);

      $this->assertEquals(
	 'Fizz',  
	 $result,  
	 'Update FizzBuzz.php to return Fizz'
      );
   }
   
   public function testFizzBuzz5() {
      $fizzbuzz = new FizzBuzz();
      
      $result = $fizzbuzz->getResultForNumber(5);

      $this->assertEquals(
	 'Buzz',  
	 $result,  
	 'Update FizzBuzz.php to return Buzz'
      );
   }
   
   public function testFizzBuzz15() {
      $fizzbuzz = new FizzBuzz();
      
      $result = $fizzbuzz->getResultForNumber(15);

      $this->assertEquals(
	 'FizzBuzz',  
	 $result,  
	 'Update FizzBuzz.php to return FizzBuzz'
      );
   }

   public function testSuccess() {
      echo PHP_EOL;
      echo "=========================" . PHP_EOL;
      echo "=   You are now on the  =" . PHP_EOL;
      echo "= Path Of The Craftsman =" . PHP_EOL;
      echo "=========================" . PHP_EOL;
   }
}
