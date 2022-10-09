<?php

namespace Tests\Unit;

use Gomzyakov\GitVersion\GitVersion;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gomzyakov\GitVersion\GitVersion::getVersion
 */
final class GetVersionTest extends TestCase
{
    public function test_get_version(): void
    {
        self::assertMatchesRegularExpression('/^v[0-9]+\.[0-9]+\.[0-9]+$/', GitVersion::getVersion());
    }
}
