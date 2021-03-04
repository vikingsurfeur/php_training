<?php

    print_r($_POST['user']);

    function getUser(): array
    {

        $user           = $_POST['user'];
        $userIndex      = count($user);
        $userFormatted  = [];

        for ($i = 0; $i < $userIndex; $i++) { 
            $userFormatted [] = [
                $user[$i]
                // $user[$i + 1],
                // $user[$i + 2]
            ];
        }

        return $userFormatted;
    }

    print_r(getUser());