<?php
    $users=[
        ["username"=>"abc",
        "password"=>password_hash("abc",PASSWORD_DEFAULT),
        "name"=>"John Doe",
        "email"=>"johndoe@example.com",],

        ["username"=>"johndoe1",
        "password"=>password_hash("password1234",PASSWORD_DEFAULT),
        "name"=>"John Doe1",
        "email"=>"johndoe@example.com1",],
        
    ];
?>