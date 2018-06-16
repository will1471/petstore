<?php

namespace Will1471\PetStoreBundle\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Will1471\PetStoreServerGenBundle\Api\PetApiInterface;
use Will1471\PetStoreServerGenBundle\Model\Pet;

class PetApi implements PetApiInterface
{
    /**
     * Sets authentication method petstore_auth
     *
     * @param string $value Value of the petstore_auth authentication method.
     *
     * @return void
     */
    public function setpetstore_auth($value)
    {
        // TODO: Implement setpetstore_auth() method.
    }

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
     * Operation addPet
     *
     * Add a new pet to the store
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\Pet $pet Pet object that needs to be added to the store (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function addPet(Pet $pet, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement addPet() method.
    }

    /**
     * Operation deletePet
     *
     * Deletes a pet
     *
     * @param  int $petId Pet id to delete (required)
     * @param  string $apiKey (optional)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deletePet($petId, $apiKey = null, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement deletePet() method.
    }

    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status
     *
     * @param  string[] $status Status values that need to be considered for filter (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\Pet[]
     *
     */
    public function findPetsByStatus(array $status, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement findPetsByStatus() method.
    }

    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags
     *
     * @param  string[] $tags Tags to filter by (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\Pet[]
     *
     */
    public function findPetsByTags(array $tags, &$responseCode, array &$responseHeaders)
    {
        $pet = new Pet();
        $pet->setName('Some Pet');
        $pet->setId(1);
        return [$pet];
    }

    /**
     * Operation getPetById
     *
     * Find pet by ID
     *
     * @param  int $petId ID of pet to return (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\Pet[]
     *
     */
    public function getPetById($petId, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement getPetById() method.
    }

    /**
     * Operation updatePet
     *
     * Update an existing pet
     *
     * @param  \Will1471\PetStoreServerGenBundle\Model\Pet $pet Pet object that needs to be added to the store (required)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updatePet(Pet $pet, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement updatePet() method.
    }

    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data
     *
     * @param  int $petId ID of pet that needs to be updated (required)
     * @param  string $name Updated name of the pet (optional)
     * @param  string $status Updated status of the pet (optional)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updatePetWithForm($petId, $name = null, $status = null, &$responseCode, array &$responseHeaders)
    {
        // TODO: Implement updatePetWithForm() method.
    }

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param  int $petId ID of pet to update (required)
     * @param  string $additionalMetadata Additional data to pass to server (optional)
     * @param  UploadedFile $file file to upload (optional)
     * @param  integer $responseCode The HTTP response code to return
     * @param  array $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return \Will1471\PetStoreServerGenBundle\Model\ApiResponse[]
     *
     */
    public function uploadFile(
        $petId,
        $additionalMetadata = null,
        UploadedFile $file = null,
        &$responseCode,
        array &$responseHeaders
    ) {
        // TODO: Implement uploadFile() method.
    }
}