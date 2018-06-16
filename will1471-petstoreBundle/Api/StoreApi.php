<?php

namespace Will1471\PetStoreBundle\Api;

use Will1471\PetStoreServerGenBundle\Api\StoreApiInterface;
use Will1471\PetStoreServerGenBundle\Model\Order;

class StoreApi implements StoreApiInterface
{

    /**
     * Sets authentication method api_key
     *
     * @param string $value Value of the api_key authentication method.
     *
     * @return void
     */
    public function setapi_key($value)
    {
        // TODO: Implement setapi_key() method.
    }

    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID
     *
     * @param  string $orderId ID of the order that needs to be deleted (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deleteOrder($orderId, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement deleteOrder() method.
    }

    /**
     * Operation getInventory
     *
     * Returns pet inventories by status
     *
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return int
     *
     */
    public function getInventory(&$responseCode, array &$responseHeaders)
    {
        // TODO: Implement getInventory() method.
    }

    /**
     * Operation getOrderById
     *
     * Find purchase order by ID
     *
     * @param  int $orderId ID of pet that needs to be fetched (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\Order[]
     *
     */
    public function getOrderById($orderId, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement getOrderById() method.
    }

    /**
     * Operation placeOrder
     *
     * Place an order for a pet
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\Order $order order placed for purchasing the pet (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\Order[]
     *
     */
    public function placeOrder(Order $order, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement placeOrder() method.
    }
}