<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace WPMailSMTP\Vendor\Google\Service\Gmail\Resource;

use WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair;
use WPMailSMTP\Vendor\Google\Service\Gmail\DisableCseKeyPairRequest;
use WPMailSMTP\Vendor\Google\Service\Gmail\EnableCseKeyPairRequest;
use WPMailSMTP\Vendor\Google\Service\Gmail\ListCseKeyPairsResponse;
use WPMailSMTP\Vendor\Google\Service\Gmail\ObliterateCseKeyPairRequest;
/**
 * The "keypairs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google\Service\Gmail(...);
 *   $keypairs = $gmailService->users_settings_cse_keypairs;
 *  </code>
 */
class UsersSettingsCseKeypairs extends \WPMailSMTP\Vendor\Google\Service\Resource
{
    /**
     * Creates and uploads a client-side encryption S/MIME public key certificate
     * chain and private key metadata for the authenticated user. (keypairs.create)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param CseKeyPair $postBody
     * @param array $optParams Optional parameters.
     * @return CseKeyPair
     * @throws \Google\Service\Exception
     */
    public function create($userId, \WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair::class);
    }
    /**
     * Turns off a client-side encryption key pair. The authenticated user can no
     * longer use the key pair to decrypt incoming CSE message texts or sign
     * outgoing CSE mail. To regain access, use the EnableCseKeyPair to turn on the
     * key pair. After 30 days, you can permanently delete the key pair by using the
     * ObliterateCseKeyPair method. (keypairs.disable)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param string $keyPairId The identifier of the key pair to turn off.
     * @param DisableCseKeyPairRequest $postBody
     * @param array $optParams Optional parameters.
     * @return CseKeyPair
     * @throws \Google\Service\Exception
     */
    public function disable($userId, $keyPairId, \WPMailSMTP\Vendor\Google\Service\Gmail\DisableCseKeyPairRequest $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'keyPairId' => $keyPairId, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('disable', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair::class);
    }
    /**
     * Turns on a client-side encryption key pair that was turned off. The key pair
     * becomes active again for any associated client-side encryption identities.
     * (keypairs.enable)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param string $keyPairId The identifier of the key pair to turn on.
     * @param EnableCseKeyPairRequest $postBody
     * @param array $optParams Optional parameters.
     * @return CseKeyPair
     * @throws \Google\Service\Exception
     */
    public function enable($userId, $keyPairId, \WPMailSMTP\Vendor\Google\Service\Gmail\EnableCseKeyPairRequest $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'keyPairId' => $keyPairId, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('enable', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair::class);
    }
    /**
     * Retrieves an existing client-side encryption key pair. (keypairs.get)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param string $keyPairId The identifier of the key pair to retrieve.
     * @param array $optParams Optional parameters.
     * @return CseKeyPair
     * @throws \Google\Service\Exception
     */
    public function get($userId, $keyPairId, $optParams = [])
    {
        $params = ['userId' => $userId, 'keyPairId' => $keyPairId];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\CseKeyPair::class);
    }
    /**
     * Lists client-side encryption key pairs for an authenticated user.
     * (keypairs.listUsersSettingsCseKeypairs)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize The number of key pairs to return. If not provided,
     * the page size will default to 20 entries.
     * @opt_param string pageToken Pagination token indicating which page of key
     * pairs to return. If the token is not supplied, then the API will return the
     * first page of results.
     * @return ListCseKeyPairsResponse
     * @throws \Google\Service\Exception
     */
    public function listUsersSettingsCseKeypairs($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\ListCseKeyPairsResponse::class);
    }
    /**
     * Deletes a client-side encryption key pair permanently and immediately. You
     * can only permanently delete key pairs that have been turned off for more than
     * 30 days. To turn off a key pair, use the DisableCseKeyPair method. Gmail
     * can't restore or decrypt any messages that were encrypted by an obliterated
     * key. Authenticated users and Google Workspace administrators lose access to
     * reading the encrypted messages. (keypairs.obliterate)
     *
     * @param string $userId The requester's primary email address. To indicate the
     * authenticated user, you can use the special value `me`.
     * @param string $keyPairId The identifier of the key pair to obliterate.
     * @param ObliterateCseKeyPairRequest $postBody
     * @param array $optParams Optional parameters.
     * @throws \Google\Service\Exception
     */
    public function obliterate($userId, $keyPairId, \WPMailSMTP\Vendor\Google\Service\Gmail\ObliterateCseKeyPairRequest $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'keyPairId' => $keyPairId, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('obliterate', [$params]);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\WPMailSMTP\Vendor\Google\Service\Gmail\Resource\UsersSettingsCseKeypairs::class, 'WPMailSMTP\\Vendor\\Google_Service_Gmail_Resource_UsersSettingsCseKeypairs');
