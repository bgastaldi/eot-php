<?php

/*
 * Copyright 2022 eot.ai
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
declare(strict_types=1);

return
    [
        'library' => [
            'default' => 'eot',
            'eot' => [
                'files_folder' => 'files'
            ]
        ],
        'databases' => [
            'default' => 'mysql',
            'config' => [
                'mysql' => [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'dbname' => 'test',
                    'username' => 'root',
                    'password' => 'password',
                    'timeout' => 60,
                    'port' => 3306,
                ],
                'sqlite' => [
                    'driver' => 'sqlite',
                    'dir' => 'db/mydb.sqlite3',
                ],
                'postgres' => [
                    'driver' => 'pgsql',
                    'host' => 'localhost',
                    'dbname' => 'eot',
                    'username' => 'postgres',
                    'password' => 'password',
                    'timeout' => 60,
                    'port' => 5432,
                ]
            ]
        ],
        'logs' => [
            'enable' => false,
            'folder' => 'logs'
        ],
        'mail' => [
            'mail_host' => null,
            'mail_username' => null,
            'mail_password' => null,
            'mail_from' => null,
            'mail_from_name' => null
        ]
    ];
