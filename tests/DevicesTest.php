<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Tests\Fixture;
use GuzzleHttp\Client;

final class DevicesTest extends TestCase
{
  public function testGetAndListDevices(): void
  {
    $seam = Fixture::getTestServer(true);
    $devices = $seam->devices->list();
    $this->assertIsArray($devices);

    $device_id = $devices[0]->device_id;
    $device = $seam->devices->get(device_id: $device_id);
    $this->assertTrue($device->device_id === $device_id);
  }
}