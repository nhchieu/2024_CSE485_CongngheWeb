<?php
    $users = [
        [
        "username" => "abc",
        "password" => password_hash("abc", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
        ],
        [
        "username" => "abcd",
        "password" => password_hash("abc", PASSWORD_DEFAULT),
        "name" => "Bố",
        "email" => "janedoe@example.com",
        "role" => "admin"
        ],
        // ... add more users
    ];

    $authorization_levels = [
        "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
        ],
        "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
        ],
        // ... add more levels
    ];
    ?>