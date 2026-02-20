<?php

namespace Tests\Services\V1\Orders;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;
use Tests\UnsupportedMockTests;

/**
 * @internal
 */
#[CoversNothing]
final class ChangeRequestsTest extends TestCase
{
    protected Client $client;

    protected function setUp(): void
    {
        parent::setUp();

        $testUrl = Util::getenv('TEST_API_BASE_URL') ?: 'http://127.0.0.1:4010';
        $client = new Client(apiKey: 'My API Key', baseUrl: $testUrl);

        $this->client = $client;
    }

    #[Test]
    public function testCreate(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Mock server tests are disabled');
        }

        $result = $this->client->v1->orders->changeRequests->create(
            'orderId',
            proposedChanges: []
        );

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(OrderChangeRequest::class, $result);
    }

    #[Test]
    public function testCreateWithOptionalParams(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Mock server tests are disabled');
        }

        $result = $this->client->v1->orders->changeRequests->create(
            'orderId',
            proposedChanges: [
                'arrivalDate' => '2024-01-01',
                'blDate' => '2024-01-01',
                'blNumber' => 'BL-67890',
                'departureDate' => '2024-01-01',
                'destinationArrivalDateTime' => new \DateTimeImmutable(
                    '2024-01-02T18:00:00Z'
                ),
                'destinationDepartureDateTime' => new \DateTimeImmutable(
                    '2024-01-02T19:00:00Z'
                ),
                'intraCommunicator' => 'Unknown',
                'licensePlate' => 'ABC-1234',
                'loadingDate' => '2024-01-02',
                'loadingTime' => 'loadingTime',
                'notes' => 'Some notes about the order',
                'orderDeliveryMode' => 'pallet',
                'originArrivalDateTime' => new \DateTimeImmutable(
                    '2024-01-01T08:00:00Z'
                ),
                'originDepartureDateTime' => new \DateTimeImmutable(
                    '2024-01-01T09:00:00Z'
                ),
                'purchaseLineChanges' => [
                    [
                        'lineID' => 'lineId',
                        'batchNumber' => 'batchNumber',
                        'destinationDryMatterPercentage' => 0,
                        'destinationLotID' => 'destinationLotId',
                        'destinationQuantity' => 0,
                        'expirationDate' => 'expirationDate',
                        'grossWeight' => 0,
                        'loadingAddressID' => 'loadingAddressId',
                        'loadingReference' => 'loadingReference',
                        'loadingRemarks' => 'loadingRemarks',
                        'manufactureDate' => 'manufactureDate',
                        'mode' => 'update',
                        'numberOfPackages' => 0,
                        'origin' => 'origin',
                        'originForIntrastat' => 'originForIntrastat',
                        'packagingID' => 'packagingId',
                        'packingCount' => 0,
                        'palletCount' => 0,
                        'palletID' => 'palletId',
                        'quantityPerPacking' => 0,
                        'sourceDryMatterPercentage' => 0,
                        'sourceQuantity' => 0,
                        'supplierInstructions' => 'supplierInstructions',
                        'supplierReference' => 'supplierReference',
                        'unloadingAddressID' => 'unloadingAddressId',
                        'unloadingReference' => 'unloadingReference',
                        'unloadingRemarks' => 'unloadingRemarks',
                        'warehouseReference' => 'warehouseReference',
                    ],
                ],
                'salesLineChanges' => [
                    [
                        'lineID' => 'lineId',
                        'destinationDryMatterPercentage' => 0,
                        'destinationQuantity' => 0,
                        'grossWeight' => 0,
                        'loadingAddressID' => 'loadingAddressId',
                        'loadingReference' => 'loadingReference',
                        'loadingRemarks' => 'loadingRemarks',
                        'mode' => 'update',
                        'packagingID' => 'packagingId',
                        'packingCount' => 0,
                        'palletCount' => 0,
                        'palletID' => 'palletId',
                        'quantityPerPacking' => 0,
                        'sourceDryMatterPercentage' => 0,
                        'sourceLotID' => 'sourceLotId',
                        'sourceQuantity' => 0,
                        'unloadingAddressID' => 'unloadingAddressId',
                        'unloadingReference' => 'unloadingReference',
                        'unloadingRemarks' => 'unloadingRemarks',
                        'warehouseReference' => 'warehouseReference',
                    ],
                ],
                'transferLineChanges' => [
                    [
                        'lineID' => 'lineId',
                        'destinationGrossWeight' => 0,
                        'destinationLotID' => 'destinationLotId',
                        'destinationPackagingID' => 'destinationPackagingId',
                        'destinationPackingCount' => 0,
                        'destinationPalletCount' => 0,
                        'destinationQuantity' => 0,
                        'loadingReference' => 'loadingReference',
                        'loadingRemarks' => 'loadingRemarks',
                        'mode' => 'update',
                        'originForIntrastat' => 'originForIntrastat',
                        'sourceGrossWeight' => 0,
                        'sourceQuantity' => 0,
                        'specification' => 'specification',
                        'unloadingAddressID' => 'unloadingAddressId',
                        'unloadingAddressText' => 'unloadingAddressText',
                        'unloadingReference' => 'unloadingReference',
                        'unloadingRemarks' => 'unloadingRemarks',
                        'warehouseReference' => 'warehouseReference',
                    ],
                ],
                'transport' => [
                    'currency' => 'Currency Code',
                    'relationID' => 'Transporter Id. Use relations endpoint to get the id.',
                    'totalEstimatedAmount' => 2500.75,
                    'costPerTon' => 125.5,
                ],
                'transporterBookingNo' => 'TB-123456',
                'unloadingDate' => '2024-01-03',
                'unloadingTime' => 'unloadingTime',
                'unloadingTimeSchedule' => 'unloadingTimeSchedule',
            ],
            remarks: 'remarks',
            sourceReference: 'sourceReference',
        );

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(OrderChangeRequest::class, $result);
    }

    #[Test]
    public function testList(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Mock server tests are disabled');
        }

        $result = $this->client->v1->orders->changeRequests->list('orderId');

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertIsList($result);
    }
}
