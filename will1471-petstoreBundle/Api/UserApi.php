<?php

namespace Will1471\PetStoreBundle\Api;

use Will1471\PetStoreServerGenBundle\Api\UserApiInterface;
use Will1471\PetStoreServerGenBundle\Api\Will1471;
use Will1471\PetStoreServerGenBundle\Model\User;

class UserApi implements UserApiInterface
{

    /**
     * Operation createUser
     *
     * Create user
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\User $user Created user object (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function createUser(User $user, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement createUser() method.
    }

    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\User[] $user List of user object (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function createUsersWithArrayInput(array $user, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement createUsersWithArrayInput() method.
    }

    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\User[] $user List of user object (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function createUsersWithListInput(array $user, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement createUsersWithListInput() method.
    }

    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param  string $username The name that needs to be deleted (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deleteUser($username, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement deleteUser() method.
    }

    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param  string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\User[]
     *
     */
    public function getUserByName($username, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement getUserByName() method.
    }

    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param  string $username The user name for login (required)
     * @param  string $password The password for login in clear text (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return string
     *
     */
    public function loginUser($username, $password, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement loginUser() method.
    }

    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function logoutUser(&$responseCode, array &$responseHeaders)
    {
        // TODO: Implement logoutUser() method.
    }

    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param  string $username name that need to be deleted (required)
     * @param  \Will1471\PetStoreServerGenBundle\Model\User $user Updated user object (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updateUser($username, User $user, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement updateUser() method.
    }
}