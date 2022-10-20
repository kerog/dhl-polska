<?php

namespace Kerogos\DhlPolska\Services;

use Kerogos\DhlPolska\DTO\BookCourier;
use Kerogos\DhlPolska\DTO\BookCourierResponse;
use Kerogos\DhlPolska\DTO\CancelCourierBooking;
use Kerogos\DhlPolska\DTO\CancelCourierBookingResponse;
use Kerogos\DhlPolska\DTO\CreateShipment;
use Kerogos\DhlPolska\DTO\CreateShipmentResponseCase2;
use Kerogos\DhlPolska\DTO\CreateShipmentReturn;
use Kerogos\DhlPolska\DTO\CreateShipmentReturnResponse;
use Kerogos\DhlPolska\DTO\CreateShipments;
use Kerogos\DhlPolska\DTO\CreateShipmentsResponse;
use Kerogos\DhlPolska\DTO\DeleteShipment;
use Kerogos\DhlPolska\DTO\DeleteShipmentResponseCase2;
use Kerogos\DhlPolska\DTO\DeleteShipments;
use Kerogos\DhlPolska\DTO\DeleteShipmentsResponse;
use Kerogos\DhlPolska\DTO\GetInternationalParams;
use Kerogos\DhlPolska\DTO\GetInternationalParams2;
use Kerogos\DhlPolska\DTO\GetInternationalParams2Response;
use Kerogos\DhlPolska\DTO\GetInternationalParamsResponseCase2;
use Kerogos\DhlPolska\DTO\GetLabels;
use Kerogos\DhlPolska\DTO\GetLabelsData;
use Kerogos\DhlPolska\DTO\GetLabelsDataResponse;
use Kerogos\DhlPolska\DTO\GetLabelsResponse;
use Kerogos\DhlPolska\DTO\GetMyShipments;
use Kerogos\DhlPolska\DTO\GetMyShipmentsCount;
use Kerogos\DhlPolska\DTO\GetMyShipmentsCountResponse;
use Kerogos\DhlPolska\DTO\GetMyShipmentsResponse;
use Kerogos\DhlPolska\DTO\GetNearestServicepoints;
use Kerogos\DhlPolska\DTO\GetNearestServicepointsResponseCase2;
use Kerogos\DhlPolska\DTO\GetPieceId;
use Kerogos\DhlPolska\DTO\GetPieceIdResponseCase2;
use Kerogos\DhlPolska\DTO\GetPnp;
use Kerogos\DhlPolska\DTO\GetPnpResponse;
use Kerogos\DhlPolska\DTO\GetPostalCodeServices;
use Kerogos\DhlPolska\DTO\GetPostalCodeServicesResponse;
use Kerogos\DhlPolska\DTO\GetReturnByWaybill;
use Kerogos\DhlPolska\DTO\GetReturnByWaybillResponse;
use Kerogos\DhlPolska\DTO\GetReturnParams;
use Kerogos\DhlPolska\DTO\GetReturnParamsResponseCase2;
use Kerogos\DhlPolska\DTO\GetShipmentScan;
use Kerogos\DhlPolska\DTO\GetShipmentScanResponse;
use Kerogos\DhlPolska\DTO\GetTrackAndTraceInfo;
use Kerogos\DhlPolska\DTO\GetTrackAndTraceInfoResponse;
use Kerogos\DhlPolska\DTO\GetVersion;
use Kerogos\DhlPolska\DTO\GetVersionResponse;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;
use SoapClient;
use SoapHeader;

/**
 * DHL24WebapiService class
 *
 * @author wsdl2php
 */
class DHL24WebapiService extends SoapClient
{
    /**
     * Namespace for service calls.
     */
    const SERVICE_NAMESPACE = 'https://sandbox.dhl24.com.pl/webapi2/provider/service.html?ws=1';

    /**
     * Default class mapping for this service.
     *
     * @var array
     */
    private static $classMap = [
        'Address'                             => 'Kerogos\DhlPolska\DTO\Address',
        'AddressData'                         => 'Kerogos\DhlPolska\DTO\AddressData',
        'Addressat'                           => 'Kerogos\DhlPolska\DTO\Addressat',
        'ArrayOfCreatereturnshipmentresponse' => 'Kerogos\DhlPolska\DTO\ArrayOfCreatereturnshipmentresponse',
        'ArrayOfCreateshipmentresponse'       => 'Kerogos\DhlPolska\DTO\ArrayOfCreateshipmentresponse',
        'ArrayOfCustomsitemdata'              => 'Kerogos\DhlPolska\DTO\ArrayOfCustomsitemdata',
        'ArrayOfDeletenotification'           => 'Kerogos\DhlPolska\DTO\ArrayOfDeletenotification',
        'ArrayOfInternationalparam'           => 'Kerogos\DhlPolska\DTO\ArrayOfInternationalparam',
        'ArrayOfItemtolabeldata'              => 'Kerogos\DhlPolska\DTO\ArrayOfItemtolabeldata',
        'ArrayOfItemtolabeldataresponse'      => 'Kerogos\DhlPolska\DTO\ArrayOfItemtolabeldataresponse',
        'ArrayOfItemtoprint'                  => 'Kerogos\DhlPolska\DTO\ArrayOfItemtoprint',
        'ArrayOfItemtoprintresponse'          => 'Kerogos\DhlPolska\DTO\ArrayOfItemtoprintresponse',
        'ArrayOfPackage'                      => 'Kerogos\DhlPolska\DTO\ArrayOfPackage',
        'ArrayOfPiece'                        => 'Kerogos\DhlPolska\DTO\ArrayOfPiece',
        'ArrayOfPiecedefinition'              => 'Kerogos\DhlPolska\DTO\ArrayOfPiecedefinition',
        'ArrayOfPiecedefinitionlabeldata'     => 'Kerogos\DhlPolska\DTO\ArrayOfPiecedefinitionlabeldata',
        'ArrayOfPieceshipment'                => 'Kerogos\DhlPolska\DTO\ArrayOfPieceshipment',
        'ArrayOfPieceshipmentitem'            => 'Kerogos\DhlPolska\DTO\ArrayOfPieceshipmentitem',
        'ArrayOfPoint'                        => 'Kerogos\DhlPolska\DTO\ArrayOfPoint',
        'ArrayOfReturnitemtoprint'            => 'Kerogos\DhlPolska\DTO\ArrayOfReturnitemtoprint',
        'ArrayOfReturnpackage'                => 'Kerogos\DhlPolska\DTO\ArrayOfReturnpackage',
        'ArrayOfReturnparam'                  => 'Kerogos\DhlPolska\DTO\ArrayOfReturnparam',
        'ArrayOfReturnpip2country'            => 'Kerogos\DhlPolska\DTO\ArrayOfReturnpip2country',
        'ArrayOfReturnpip2param'              => 'Kerogos\DhlPolska\DTO\ArrayOfReturnpip2param',
        'ArrayOfReturnservice'                => 'Kerogos\DhlPolska\DTO\ArrayOfReturnservice',
        'ArrayOfService'                      => 'Kerogos\DhlPolska\DTO\ArrayOfService',
        'ArrayOfShipmentbasicdata'            => 'Kerogos\DhlPolska\DTO\ArrayOfShipmentbasicdata',
        'ArrayOfShipmentfulldata'             => 'Kerogos\DhlPolska\DTO\ArrayOfShipmentfulldata',
        'ArrayOfString'                       => 'Kerogos\DhlPolska\DTO\ArrayOfString',
        'ArrayOfTrackandtraceevent'           => 'Kerogos\DhlPolska\DTO\ArrayOfTrackandtraceevent',
        'AuthData'                            => 'Kerogos\DhlPolska\DTO\AuthData',
        'Billing'                             => 'Kerogos\DhlPolska\DTO\Billing',
        'CreateReturnShipmentRequest'         => 'Kerogos\DhlPolska\DTO\CreateReturnShipmentRequest',
        'CreateReturnShipmentResponse'        => 'Kerogos\DhlPolska\DTO\CreateReturnShipmentResponse',
        'CreateShipmentRequest'               => 'Kerogos\DhlPolska\DTO\CreateShipmentRequest',
        'CreateShipmentResponse'              => 'Kerogos\DhlPolska\DTO\CreateShipmentResponseCase1',
        'CustomsAgreementData'                => 'Kerogos\DhlPolska\DTO\CustomsAgreementData',
        'CustomsData'                         => 'Kerogos\DhlPolska\DTO\CustomsData',
        'CustomsItemData'                     => 'Kerogos\DhlPolska\DTO\CustomsItemData',
        'DeleteNotification'                  => 'Kerogos\DhlPolska\DTO\DeleteNotification',
        'DeleteShipmentRequest'               => 'Kerogos\DhlPolska\DTO\DeleteShipmentRequest',
        'DeleteShipmentResponse'              => 'Kerogos\DhlPolska\DTO\DeleteShipmentResponseCase1',
        'GetInternationalParamsResponse'      => 'Kerogos\DhlPolska\DTO\GetInternationalParamsResponseCase1',
        'GetNearestServicepointsRequest'      => 'Kerogos\DhlPolska\DTO\GetNearestServicepointsRequest',
        'GetNearestServicepointsResponse'     => 'Kerogos\DhlPolska\DTO\GetNearestServicepointsResponseCase1',
        'GetPieceIdRequest'                   => 'Kerogos\DhlPolska\DTO\GetPieceIdRequest',
        'GetPieceIdResponse'                  => 'Kerogos\DhlPolska\DTO\GetPieceIdResponseCase1',
        'GetPip2Response'                     => 'Kerogos\DhlPolska\DTO\GetPip2Response',
        'GetReturnParamsResponse'             => 'Kerogos\DhlPolska\DTO\GetReturnParamsResponseCase1',
        'InternationalParam'                  => 'Kerogos\DhlPolska\DTO\InternationalParam',
        'ItemToLabelData'                     => 'Kerogos\DhlPolska\DTO\ItemToLabelData',
        'ItemToLabelDataResponse'             => 'Kerogos\DhlPolska\DTO\ItemToLabelDataResponse',
        'ItemToPrint'                         => 'Kerogos\DhlPolska\DTO\ItemToPrint',
        'ItemToPrintResponse'                 => 'Kerogos\DhlPolska\DTO\ItemToPrintResponse',
        'Label'                               => 'Kerogos\DhlPolska\DTO\Label',
        'LabelDataServiceDefinition'          => 'Kerogos\DhlPolska\DTO\LabelDataServiceDefinition',
        'NeighbourAddress'                    => 'Kerogos\DhlPolska\DTO\NeighbourAddress',
        'Package'                             => 'Kerogos\DhlPolska\DTO\Package',
        'PaymentData'                         => 'Kerogos\DhlPolska\DTO\PaymentData',
        'Piece'                               => 'Kerogos\DhlPolska\DTO\Piece',
        'PieceDefinition'                     => 'Kerogos\DhlPolska\DTO\PieceDefinition',
        'PieceDefinitionLabelData'            => 'Kerogos\DhlPolska\DTO\PieceDefinitionLabelData',
        'PieceShipment'                       => 'Kerogos\DhlPolska\DTO\PieceShipment',
        'PieceShipmentItem'                   => 'Kerogos\DhlPolska\DTO\PieceShipmentItem',
        'PnpRequest'                          => 'Kerogos\DhlPolska\DTO\PnpRequest',
        'PnpResponse'                         => 'Kerogos\DhlPolska\DTO\PnpResponse',
        'Point'                               => 'Kerogos\DhlPolska\DTO\Point',
        'PostalCodeServicesResponse'          => 'Kerogos\DhlPolska\DTO\PostalCodeServicesResponse',
        'PreavisoContact'                     => 'Kerogos\DhlPolska\DTO\PreavisoContact',
        'ReceiverAddress'                     => 'Kerogos\DhlPolska\DTO\ReceiverAddress',
        'ReceiverAddressData'                 => 'Kerogos\DhlPolska\DTO\ReceiverAddressData',
        'ReceiverAddressLabelData'            => 'Kerogos\DhlPolska\DTO\ReceiverAddressLabelData',
        'ReceiverAddressat'                   => 'Kerogos\DhlPolska\DTO\ReceiverAddressat',
        'ReturnAddressat'                     => 'Kerogos\DhlPolska\DTO\ReturnAddressat',
        'ReturnItemToPrint'                   => 'Kerogos\DhlPolska\DTO\ReturnItemToPrint',
        'ReturnPackage'                       => 'Kerogos\DhlPolska\DTO\ReturnPackage',
        'ReturnParam'                         => 'Kerogos\DhlPolska\DTO\ReturnParam',
        'ReturnPip2Country'                   => 'Kerogos\DhlPolska\DTO\ReturnPip2Country',
        'ReturnPip2Param'                     => 'Kerogos\DhlPolska\DTO\ReturnPip2Param',
        'ReturnService'                       => 'Kerogos\DhlPolska\DTO\ReturnService',
        'ReturnShip'                          => 'Kerogos\DhlPolska\DTO\ReturnShip',
        'ReturnShipmentInfo'                  => 'Kerogos\DhlPolska\DTO\ReturnShipmentInfo',
        'ReturnShipmentTime'                  => 'Kerogos\DhlPolska\DTO\ReturnShipmentTime',
        'Routing'                             => 'Kerogos\DhlPolska\DTO\Routing',
        'ScanToPrintResponse'                 => 'Kerogos\DhlPolska\DTO\ScanToPrintResponse',
        'SearchAddress'                       => 'Kerogos\DhlPolska\DTO\SearchAddress',
        'Service'                             => 'Kerogos\DhlPolska\DTO\Service',
        'ServiceDefinition'                   => 'Kerogos\DhlPolska\DTO\ServiceDefinition',
        'ServicePoint'                        => 'Kerogos\DhlPolska\DTO\ServicePoint',
        'Ship'                                => 'Kerogos\DhlPolska\DTO\Ship',
        'ShipmentBasicData'                   => 'Kerogos\DhlPolska\DTO\ShipmentBasicData',
        'ShipmentFullData'                    => 'Kerogos\DhlPolska\DTO\ShipmentFullData',
        'ShipmentInfo'                        => 'Kerogos\DhlPolska\DTO\ShipmentInfo',
        'ShipmentOrderInfo'                   => 'Kerogos\DhlPolska\DTO\ShipmentOrderInfo',
        'ShipmentTime'                        => 'Kerogos\DhlPolska\DTO\ShipmentTime',
        'ShipmentTimeLabelData'               => 'Kerogos\DhlPolska\DTO\ShipmentTimeLabelData',
        'ShipperAddress'                      => 'Kerogos\DhlPolska\DTO\ShipperAddress',
        'ShipperAddressLabelData'             => 'Kerogos\DhlPolska\DTO\ShipperAddressLabelData',
        'TrackAndTraceEvent'                  => 'Kerogos\DhlPolska\DTO\TrackAndTraceEvent',
        'TrackAndTraceResponse'               => 'Kerogos\DhlPolska\DTO\TrackAndTraceResponse',
        'bookCourier'                         => 'Kerogos\DhlPolska\DTO\bookCourier',
        'bookCourierResponse'                 => 'Kerogos\DhlPolska\DTO\bookCourierResponse',
        'cancelCourierBooking'                => 'Kerogos\DhlPolska\DTO\cancelCourierBooking',
        'cancelCourierBookingResponse'        => 'Kerogos\DhlPolska\DTO\cancelCourierBookingResponse',
        'createShipment'                      => 'Kerogos\DhlPolska\DTO\createShipment',
        'createShipmentResponse'              => 'Kerogos\DhlPolska\DTO\createShipmentResponseCase2',
        'createShipmentReturn'                => 'Kerogos\DhlPolska\DTO\createShipmentReturn',
        'createShipmentReturnResponse'        => 'Kerogos\DhlPolska\DTO\createShipmentReturnResponse',
        'createShipments'                     => 'Kerogos\DhlPolska\DTO\createShipments',
        'createShipmentsResponse'             => 'Kerogos\DhlPolska\DTO\createShipmentsResponse',
        'deleteShipment'                      => 'Kerogos\DhlPolska\DTO\deleteShipment',
        'deleteShipmentResponse'              => 'Kerogos\DhlPolska\DTO\deleteShipmentResponseCase2',
        'deleteShipments'                     => 'Kerogos\DhlPolska\DTO\deleteShipments',
        'deleteShipmentsResponse'             => 'Kerogos\DhlPolska\DTO\deleteShipmentsResponse',
        'getInternationalParams'              => 'Kerogos\DhlPolska\DTO\getInternationalParams',
        'getInternationalParams2'             => 'Kerogos\DhlPolska\DTO\getInternationalParams2',
        'getInternationalParams2Response'     => 'Kerogos\DhlPolska\DTO\getInternationalParams2Response',
        'getInternationalParamsResponse'      => 'Kerogos\DhlPolska\DTO\getInternationalParamsResponseCase2',
        'getLabels'                           => 'Kerogos\DhlPolska\DTO\getLabels',
        'getLabelsData'                       => 'Kerogos\DhlPolska\DTO\getLabelsData',
        'getLabelsDataResponse'               => 'Kerogos\DhlPolska\DTO\getLabelsDataResponse',
        'getLabelsResponse'                   => 'Kerogos\DhlPolska\DTO\getLabelsResponse',
        'getMyShipments'                      => 'Kerogos\DhlPolska\DTO\getMyShipments',
        'getMyShipmentsCount'                 => 'Kerogos\DhlPolska\DTO\getMyShipmentsCount',
        'getMyShipmentsCountResponse'         => 'Kerogos\DhlPolska\DTO\getMyShipmentsCountResponse',
        'getMyShipmentsResponse'              => 'Kerogos\DhlPolska\DTO\getMyShipmentsResponse',
        'getNearestServicepoints'             => 'Kerogos\DhlPolska\DTO\getNearestServicepoints',
        'getNearestServicepointsResponse'     => 'Kerogos\DhlPolska\DTO\getNearestServicepointsResponseCase2',
        'getPieceId'                          => 'Kerogos\DhlPolska\DTO\getPieceId',
        'getPieceIdResponse'                  => 'Kerogos\DhlPolska\DTO\getPieceIdResponseCase2',
        'getPnp'                              => 'Kerogos\DhlPolska\DTO\getPnp',
        'getPnpResponse'                      => 'Kerogos\DhlPolska\DTO\getPnpResponse',
        'getPostalCodeServices'               => 'Kerogos\DhlPolska\DTO\getPostalCodeServices',
        'getPostalCodeServicesResponse'       => 'Kerogos\DhlPolska\DTO\getPostalCodeServicesResponse',
        'getReturnByWaybill'                  => 'Kerogos\DhlPolska\DTO\getReturnByWaybill',
        'getReturnByWaybillResponse'          => 'Kerogos\DhlPolska\DTO\getReturnByWaybillResponse',
        'getReturnParams'                     => 'Kerogos\DhlPolska\DTO\getReturnParams',
        'getReturnParamsResponse'             => 'Kerogos\DhlPolska\DTO\getReturnParamsResponseCase2',
        'getShipmentScan'                     => 'Kerogos\DhlPolska\DTO\getShipmentScan',
        'getShipmentScanResponse'             => 'Kerogos\DhlPolska\DTO\getShipmentScanResponse',
        'getTrackAndTraceInfo'                => 'Kerogos\DhlPolska\DTO\getTrackAndTraceInfo',
        'getTrackAndTraceInfoResponse'        => 'Kerogos\DhlPolska\DTO\getTrackAndTraceInfoResponse',
        'getVersion'                          => 'Kerogos\DhlPolska\DTO\getVersion',
        'getVersionResponse'                  => 'Kerogos\DhlPolska\DTO\getVersionResponse',
    ];

    /**
     * Service Constructor
     *
     * @param string $wsdl    The location of the WSDL file.
     * @param array  $options Any additional parameters to add to the service.
     */
    public function __construct(string $wsdl = NULL, array $options = [])
    {
        // Use the optional WSDL file location if it is supplied.
        $wsdl = is_null($wsdl) ? (
        config('dhl.isSandbox') ?
            'https://sandbox.dhl24.com.pl/webapi2'
            : 'https://dhl24.com.pl/webapi2'
        ) : $wsdl;

        // Add the classmap to the options.
        foreach( self::$classMap as $serviceClassName => $mappedClassName ){
            if ( !isset($options['classmap'][ $serviceClassName ]) ){
                $options['classmap'][ $serviceClassName ] = $mappedClassName;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * Service call proxy.
     *
     * @param string       $serviceName    The name of the service being called.
     * @param array        $parameters     The parameters being supplied to the service.
     * @param SOAPHeader[] $requestHeaders An array of SOAPHeaders.
     *
     * @return mixed The service response.
     */
    protected function callProxy(string $serviceName, array $parameters = NULL, array $requestHeaders = NULL)
    {
        $result = $this->__soapCall(
            $serviceName,
            $parameters,
            [
                'uri'        => 'http://tempuri.org/',
                'soapaction' => '',
            ],
            !empty($requestHeaders) ? array_filter($requestHeaders) : NULL,
            $responseHeaders
        );

        if ( !empty($responseHeaders) ){
            foreach( $responseHeaders as $headerName => $headerData ){
                $this->$headerName = $headerData;
            }
        }

        return $result;
    }

    /**
     * Build and populate a SOAP header.
     *
     * @param string       $headerName    The name of the services SOAP Header.
     * @param array|object $rawHeaderData Any data that can be mapped to the SOAP Header. Public properties of objects will be used if an object is supplied.
     * @param string       $namespace     The namespace which will default to this service's namespace.
     *
     * @throws ReflectionException
     */
    public function assignSoapHeader(string $headerName, $rawHeaderData = NULL, string $namespace = self::SERVICE_NAMESPACE)
    {
        // Is there a corresponding property of this service for the requested SOAP Header?
        // Is there a mapped class for this SOAP Header?
        // Do we have any data to populate the SOAP Header with?
        if ( property_exists($this, $headerName) && isset(self::$classMap[ $headerName ]) && !empty($rawHeaderData) ){
            // Start with no data for the SOAP Header.
            $dataForSoapHeader = [];
            $mappedData = [];

            // Get the mapped class and get the properties defined for the SOAP Header.
            $reflectedHeader = new ReflectionClass(self::$classMap[ $headerName ]);
            $reflectedHeaderProperties = $reflectedHeader->getProperties();

            // Produce an array of public data from an object.
            if ( is_object($rawHeaderData) ){
                $reflectedData = new ReflectionClass($rawHeaderData);
                $reflectedDataProperties = $reflectedData->getProperties(ReflectionProperty::IS_PUBLIC);
                $mappedData = [];
                foreach( $reflectedDataProperties as $property ){
                    $propertyName = $property->name;
                    $mappedData[ $propertyName ] = $rawHeaderData->$propertyName;
                }
            }
            elseif ( is_array($rawHeaderData) ) {
                $mappedData = $rawHeaderData;
            }

            // Process the data as an array.
            if ( !empty($mappedData) ){
                foreach( $reflectedHeaderProperties as $property ){
                    $propertyName = $property->name;
                    if ( isset($mappedData[ $propertyName ]) ){
                        $dataForSoapHeader[ $propertyName ] = $mappedData[ $propertyName ];
                    }
                }
            }

            // Build the SOAP Header and assign it the corresponding property.
            $this->$headerName = new SoapHeader($namespace, $headerName, $dataForSoapHeader);
        }
    }

    /**
     * Sprawdzenie wersji webapi.
     *
     * @param GetVersion $parameters
     *
     * @return GetVersionResponse
     */
    public function getVersion(GetVersion $parameters)
    {
        return $this->callProxy('GetVersion', [ $parameters ]);
    }

    /**
     * Definiowanie przesyłek w systemie DHL
     *
     * @param CreateShipments $parameters
     *
     * @return CreateShipmentsResponse
     */
    public function createShipments(CreateShipments $parameters)
    {
        return $this->callProxy('CreateShipments', [ $parameters ]);
    }

    /**
     * Zwrot danych
     *
     * @param GetReturnByWaybill $parameters
     *
     * @return GetReturnByWaybillResponse
     */
    public function getReturnByWaybill(GetReturnByWaybill $parameters)
    {
        return $this->callProxy('GetReturnByWaybill', [ $parameters ]);
    }

    /**
     * Stwórz przesyłkę zwrotną
     *
     * @param CreateShipmentReturn $parameters
     *
     * @return CreateShipmentReturnResponse
     */
    public function createShipmentReturn(CreateShipmentReturn $parameters)
    {
        return $this->callProxy('CreateShipmentReturn', [ $parameters ]);
    }

    /**
     * Usuwanie przesyłek w systemie DHL
     *
     * @param DeleteShipments $parameters
     *
     * @return DeleteShipmentsResponse
     */
    public function deleteShipments(DeleteShipments $parameters)
    {
        return $this->callProxy('DeleteShipments', [ $parameters ]);
    }

    /**
     * Pobieranie podstawowych danych o przesyłkach Maksymalny zakres dat to 90 dni. Zwracane jest
     * maksimum 100 przesyłek, jeśli jest ich więcej należy korzystać z offsetu.
     *
     * @param GetMyShipments $parameters
     *
     * @return GetMyShipmentsResponse
     */
    public function getMyShipments(GetMyShipments $parameters)
    {
        return $this->callProxy('GetMyShipments', [ $parameters ]);
    }

    /**
     * Pobieranie podstawowych danych o ilości przesyłek Maksymalny zakres dat to 90 dni.
     *
     * @param GetMyShipmentsCount $parameters
     *
     * @return GetMyShipmentsCountResponse
     */
    public function getMyShipmentsCount(GetMyShipmentsCount $parameters)
    {
        return $this->callProxy('GetMyShipmentsCount', [ $parameters ]);
    }

    /**
     * Weryfikacja poprawności kodu pocztowego oraz pobranie dostępnych w danej chwili usług
     * przewozowych. Odpowiedź metody jest funkcją godziny, w jakiej przychodzi żądanie (usługi
     * terminowe są dostępne do ustalonych godzin).
     *
     * @param GetPostalCodeServices $parameters
     *
     * @return GetPostalCodeServicesResponse
     */
    public function getPostalCodeServices(GetPostalCodeServices $parameters)
    {
        return $this->callProxy('GetPostalCodeServices', [ $parameters ]);
    }

    /**
     * Pobranie danych na temat zdarzeń związanych z przesyłką o przekazanym identyfikatorze.
     *
     * @param GetTrackAndTraceInfo $parameters
     *
     * @return GetTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo(GetTrackAndTraceInfo $parameters)
    {
        return $this->callProxy('GetTrackAndTraceInfo', [ $parameters ]);
    }

    /**
     * Zamawianie kuriera
     *
     * @param BookCourier $parameters
     *
     * @return BookCourierResponse
     */
    public function bookCourier(BookCourier $parameters)
    {
        return $this->callProxy('bookCourier', [ $parameters ]);
    }

    /**
     * Anulowanie zamówionego kuriera
     *
     * @param CancelCourierBooking $parameters
     *
     * @return CancelCourierBookingResponse
     */
    public function cancelCourierBooking(CancelCourierBooking $parameters)
    {
        return $this->callProxy('cancelCourierBooking', [ $parameters ]);
    }

    /**
     * Pobranie różnego rodzaju etykiet związanych z przesyłkami. Za jednym wywołaniem można
     * pobrać maksymalnie 3 etykiety
     *
     * @param GetLabels $parameters
     *
     * @return GetLabelsResponse
     */
    public function getLabels(GetLabels $parameters)
    {
        return $this->callProxy('GetLabels', [ $parameters ]);
    }

    /**
     * Pobranie raportu Potwierdzenie Nadanych Przesyłek (PNP)
     *
     * @param GetPnp $parameters
     *
     * @return GetPnpResponse
     */
    public function getPnp(GetPnp $parameters)
    {
        return $this->callProxy('GetPnp', [ $parameters ]);
    }

    /**
     * Pobieranie skanów LP w systemie DHL
     *
     * @param GetShipmentScan $parameters
     *
     * @return GetShipmentScanResponse
     */
    public function getShipmentScan(GetShipmentScan $parameters)
    {
        return $this->callProxy('GetShipmentScan', [ $parameters ]);
    }

    /**
     * Definiowanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param CreateShipment $parameters
     *
     * @return CreateShipmentResponseCase2
     */
    public function createShipment(CreateShipment $parameters)
    {
        return $this->callProxy('CreateShipment', [ $parameters ]);
    }

    /**
     * Usuwanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param DeleteShipment $parameters
     *
     * @return DeleteShipmentResponseCase2
     */
    public function deleteShipment(DeleteShipment $parameters)
    {
        return $this->callProxy('DeleteShipment', [ $parameters ]);
    }

    /**
     * Pobieranie najbliższych punktów serwisowych typu Last Mile bez COD
     *
     * @param GetNearestServicepoints $parameters
     *
     * @return GetNearestServicepointsResponseCase2
     */
    public function getNearestServicepoints(GetNearestServicepoints $parameters)
    {
        return $this->callProxy('GetNearestServicepoints', [ $parameters ]);
    }

    /**
     * Pobieranie informacji o możliwościach przesyłek międzynarodowych
     *
     * @param GetInternationalParams $parameters
     *
     * @return GetInternationalParamsResponseCase2
     */
    public function getInternationalParams(GetInternationalParams $parameters)
    {
        return $this->callProxy('GetInternationalParams', [ $parameters ]);
    }

    /**
     * Pobieranie informacji o możliwościach przesyłek międzynarodowych
     *
     * @param GetReturnParams $parameters
     *
     * @return GetReturnParamsResponseCase2
     */
    public function getReturnParams(GetReturnParams $parameters)
    {
        return $this->callProxy('GetReturnParams', [ $parameters ]);
    }

    /**
     * Fetching data of all products available in each country
     *
     * @param GetInternationalParams2 $parameters
     *
     * @return GetInternationalParams2Response
     */
    public function getInternationalParams2(GetInternationalParams2 $parameters)
    {
        return $this->callProxy('GetInternationalParams2', [ $parameters ]);
    }

    /**
     * Fetching data of all products available in each country
     *
     * @param GetPieceId $parameters
     *
     * @return GetPieceIdResponseCase2
     */
    public function getPieceId(GetPieceId $parameters)
    {
        return $this->callProxy('GetPieceId', [ $parameters ]);
    }

    /**
     * Pobieranie informacji o przesyłkach
     *
     * @param GetLabelsData $parameters
     *
     * @return GetLabelsDataResponse
     */
    public function getLabelsData(GetLabelsData $parameters)
    {
        return $this->callProxy('GetLabelsData', [ $parameters ]);
    }
}
