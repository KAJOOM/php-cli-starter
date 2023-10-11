<?php
/**
 * 
 * Unit Tests
 * See : https://symfony.com/doc/current/console.html#testing-commands
 * 
 **/
namespace Kajoom\PhpCliStarter\Tests\Commands;

use Kajoom\PhpCliStarter\Commands\Play;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class PlayTest extends TestCase
{
		/*
		 * 
		 * name: testItDoesNotCrash
		 * 
		 * Test if the app generates an error.
		 * 
		 */ 
    public function testItDoesNotCrash()
    {
        $command = new Play();
        $tester = new CommandTester($command);
        $tester->setInputs([10, 'yes', '', '', 10, 'no']);
        $tester->execute([]);
        $tester->assertCommandIsSuccessful();
    }
}
