<?php

namespace Babak271\SharedHostArtisanCommand\Tests;

use Babak271\SharedHostArtisan\SharedHostArtisanCommand;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ExampleTest extends TestCase
{
    protected \ReflectionMethod $artisanCommand;
    /**
     * @var SharedHostArtisanCommand
     */
    protected SharedHostArtisanCommand $shareHostArtisanCommand;

    protected function setUp(): void
    {
        parent::setUp();
        $this->shareHostArtisanCommand = new SharedHostArtisanCommand();
    }

    /**
     * @param string $trans_key associated translation key.
     * @return \Illuminate\Http\JsonResponse
     * @throws \ReflectionException
     */
    protected function generateSuccessResponse(string $trans_key)
    {
        $this->artisanCommand = new \ReflectionMethod(SharedHostArtisanCommand::class, 'generateSuccessResponse');
        $this->artisanCommand->setAccessible(true);
        return $this->artisanCommand->invoke(new SharedHostArtisanCommand(), $trans_key);
    }

    /** @test */
    public function testCommandsReturnProperResponse()
    {
        $shareHostArtisanCommand = new \ReflectionClass(SharedHostArtisanCommand::class);
        foreach ($shareHostArtisanCommand->getMethods(\ReflectionMethod::IS_FINAL) as $method) {
            $command = call_user_func([$this->shareHostArtisanCommand, $method->getName()]);
            $this->assertInstanceOf(JsonResponse::class, $command);
        }
    }

    /** @test */
    public function testIndexReturnsABlade()
    {
        $this->assertInstanceOf(View::class, $this->shareHostArtisanCommand->index());
    }
}
