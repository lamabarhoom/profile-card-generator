<?php
class User {
    public function __construct(
        public string $name,
        public string $role,
        public string $image,
        public bool $isActive
    ) {}
}

class Message {
    public function __construct(
        public string $sender,
        public string $email,
        public string $text
    ) {}
}
?>