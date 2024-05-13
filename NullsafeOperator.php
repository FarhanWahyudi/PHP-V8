<?php
    class Address {
        public ?string $country;
    }

    class User {
        public ?Address $address;
    }

    function getCountry(?User $user): ?string{
        // if($user != null) {
        //     if($user->address != null) {
        //         return $user->address->country;
        //     }
        // }
        // return null;
        return $user?->address?->country;
    }

    $address = new Address();
    $address->country = null;
    $user = new User();
    $user->address = $address;
    echo getCountry($user);
?>