<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client;

use Psr\Log\NullLogger;
use Psr\Log\Test\LoggerInterfaceTest;
use Test\Amadeus\BaseTestCase;

/**
 * ParamsTest
 *
 * @package Amadeus\Client
 */
class ParamsTest extends BaseTestCase
{
    public function testCanMakeParamsFromArray()
    {
        $theParamArray = [
            'sessionHandlerParams' => [
                'wsdl' => '/var/fake/file/path',
                'stateful' => true,
                'logger' => new NullLogger(),
                'authParams' => [
                    'officeId' => 'BRUXXXXXX',
                    'originatorTypeCode' => 'U',
                    'originator' => 'WSXXXXXX',
                    'organizationId' => 'NMC-XXXXXX',
                    'passwordLength' => '4',
                    'passwordData' => base64_encode('TEST')
                ]
            ],
            'requestCreatorParams' => [
                'originatorOfficeId' => 'BRUXXXXXX',
                'receivedFrom' => 'some RF string'
            ]
        ];

        $params = new Params($theParamArray);

        $this->assertNull($params->requestCreator);
        $this->assertNull($params->sessionHandler);

        $this->assertInstanceOf('Amadeus\Client\Params\SessionHandlerParams', $params->sessionHandlerParams);
        $this->assertTrue($params->sessionHandlerParams->stateful);
        $this->assertInstanceOf('Psr\Log\LoggerInterface', $params->sessionHandlerParams->logger);
        $this->assertInternalType('string', $params->sessionHandlerParams->wsdl);
        $this->assertEquals('/var/fake/file/path', $params->sessionHandlerParams->wsdl);

        $this->assertInstanceOf('Amadeus\Client\Params\AuthParams', $params->sessionHandlerParams->authParams);
        $this->assertEquals('BRUXXXXXX', $params->sessionHandlerParams->authParams->officeId);
        $this->assertEquals('NMC-XXXXXX', $params->sessionHandlerParams->authParams->organizationId);
        $this->assertEquals('WSXXXXXX', $params->sessionHandlerParams->authParams->originator);
        $this->assertEquals('U', $params->sessionHandlerParams->authParams->originatorTypeCode);
        $this->assertEquals(base64_encode('TEST'), $params->sessionHandlerParams->authParams->passwordData);
        $this->assertEquals(4, $params->sessionHandlerParams->authParams->passwordLength);

        //Defaults:
        $this->assertEquals('SU', $params->sessionHandlerParams->authParams->dutyCode);
        $this->assertEquals('ofGvk2gWUIP1nDo4KZ', $params->sessionHandlerParams->authParams->nonceBase);

        $this->assertInstanceOf('Amadeus\Client\Params\RequestCreatorParams', $params->requestCreatorParams);
        $this->assertEquals('BRUXXXXXX', $params->requestCreatorParams->originatorOfficeId);
        $this->assertEquals('some RF string', $params->requestCreatorParams->receivedFrom);
    }
}