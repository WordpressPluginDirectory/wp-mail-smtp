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

use WPMailSMTP\Vendor\Google\Service\Gmail\ListHistoryResponse;
/**
 * The "history" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google\Service\Gmail(...);
 *   $history = $gmailService->users_history;
 *  </code>
 */
class UsersHistory extends \WPMailSMTP\Vendor\Google\Service\Resource
{
    /**
     * Lists the history of all changes to the given mailbox. History results are
     * returned in chronological order (increasing `historyId`).
     * (history.listUsersHistory)
     *
     * @param string $userId The user's email address. The special value `me` can be
     * used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string historyTypes History types to be returned by the function
     * @opt_param string labelId Only return messages with a label matching the ID.
     * @opt_param string maxResults Maximum number of history records to return.
     * This field defaults to 100. The maximum allowed value for this field is 500.
     * @opt_param string pageToken Page token to retrieve a specific page of results
     * in the list.
     * @opt_param string startHistoryId Required. Returns history records after the
     * specified `startHistoryId`. The supplied `startHistoryId` should be obtained
     * from the `historyId` of a message, thread, or previous `list` response.
     * History IDs increase chronologically but are not contiguous with random gaps
     * in between valid IDs. Supplying an invalid or out of date `startHistoryId`
     * typically returns an `HTTP 404` error code. A `historyId` is typically valid
     * for at least a week, but in some rare circumstances may be valid for only a
     * few hours. If you receive an `HTTP 404` error response, your application
     * should perform a full sync. If you receive no `nextPageToken` in the
     * response, there are no updates to retrieve and you can store the returned
     * `historyId` for a future request.
     * @return ListHistoryResponse
     * @throws \Google\Service\Exception
     */
    public function listUsersHistory($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], \WPMailSMTP\Vendor\Google\Service\Gmail\ListHistoryResponse::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\WPMailSMTP\Vendor\Google\Service\Gmail\Resource\UsersHistory::class, 'WPMailSMTP\\Vendor\\Google_Service_Gmail_Resource_UsersHistory');
