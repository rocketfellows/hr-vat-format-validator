<?php

namespace rocketfellows\HRVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\HRVatFormatValidator\HRVatFormatValidator;

class HRVatFormatValidatorTest extends TestCase
{
    /**
     * @var HRVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new HRVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => '00000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '22222222222',
                'isValid' => true,
            ],
            [
                'vatNumber' => '33333333333',
                'isValid' => true,
            ],
            [
                'vatNumber' => '44444444444',
                'isValid' => true,
            ],
            [
                'vatNumber' => '55555555555',
                'isValid' => true,
            ],
            [
                'vatNumber' => '66666666666',
                'isValid' => true,
            ],
            [
                'vatNumber' => '77777777777',
                'isValid' => true,
            ],
            [
                'vatNumber' => '88888888888',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678912',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'HR99999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999999A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'A9999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => '999999A9999',
                'isValid' => false,
            ],
            [
                'vatNumber' => '999999!9999',
                'isValid' => false,
            ],
            [
                'vatNumber' => '9999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => '999999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'H99999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'R99999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE99999999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'hr99999999999',
                'isValid' => false,
            ],
        ];
    }
}
