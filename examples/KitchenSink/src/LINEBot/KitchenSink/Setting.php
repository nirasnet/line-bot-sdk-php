<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'GisRbNPenbT2yUm8+AbDWIYgXZX17GoYa4FbBlia9cB7xMj87uzTTY7vVQO0/tHd/qZhdtT+AnOdurOvKaR4LM/PQpxkQsL+t7+msL1fE63c2RNyIIkufnpLjj0xxIObLXv1JhdXcq9Fw5Cy3ZOuFgdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '1ce56e8d64d66d5ad38f79f4c973e1e8',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
