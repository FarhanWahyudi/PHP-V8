<?php
    #[Attribute]
    class NotBlack {

    }

    class LoginRequest {
        #[NotBlack]
        public string $username;

        #[NotBlack]
        public string $password;
    }
?>