<?php

use Structural\Bridge\BridgeBookAuthorTitle;
use Structural\Bridge\BridgeBookTitleAuthor;

class BridgeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function bridge()
    {
        //first implementation with same interface
        $book = new BridgeBookAuthorTitle('Larry Truett', "PHP for Cats", 'CAPS');
        $this->assertEquals($book->showAuthor(), "LARRY TRUETT");
        $this->assertEquals($book->showAuthorTitle(), "LARRY TRUETT's PHP FOR CATS");

        //second implementation with same interface
        $book = new BridgeBookTitleAuthor('Larry Truett', "PHP for Cats", 'STARS');
        $this->assertEquals($book->showAuthor(), "Larry*Truett");
        $this->assertEquals($book->showAuthorTitle(), "Larry*Truett's PHP*for*Cats");
    }
}
