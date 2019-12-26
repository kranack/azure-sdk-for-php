<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */

namespace Tests\unit\WindowsAzure\ServiceManagement\Models;

use WindowsAzure\ServiceManagement\Models\DeploymentSlot;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for class DeploymentSlot.
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @version   Release: 0.6.0_2019-12
 *
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */
class DeploymentSlotTest extends TestCase
{
    /**
     * @covers \WindowsAzure\ServiceManagement\Models\DeploymentSlot::isValid
     */
    public function testIsValidWithValid()
    {
        // Test
        $actual = DeploymentSlot::isValid(DeploymentSlot::STAGING);

        // Assert
        $this->assertTrue($actual);
    }

    /**
     * @covers \WindowsAzure\ServiceManagement\Models\DeploymentSlot::isValid
     */
    public function testIsValidWithInvalid()
    {
        // Test
        $actual = DeploymentSlot::isValid('invalid');

        // Assert
        $this->assertFalse($actual);
    }
}
