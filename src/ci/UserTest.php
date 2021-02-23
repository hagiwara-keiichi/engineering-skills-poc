<?php
declare(strict_types=1);

namespace myapp\ci;

use PHPUnit\Framework\TestCase;

/**
 * Class UserTest
 */
class UserTest extends TestCase
{
    /**
     * @test フルネームが返るか
     */
    public function testReturnsFullName()
    {
        $user = new User;
        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    /**
     * @test デフォルトのフルネームは空か
     */
    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test ユーザーがファーストネームを持っている場合
     */
    public function userHasFirstName()
    {
        $user = new User;
        $user->first_name = "Teresa";
        $this->assertEquals('Teresa', $user->first_name);
    }
}
