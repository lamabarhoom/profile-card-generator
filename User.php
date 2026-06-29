<?php
class User {
    public function __construct(
        public string $name,
        public string $role,
        public string $status
    ) {}

    public function getStatusText(): string {
        return $this->status == 'online' ? "● متصل الآن" : "○ غير متصل";
    }

    public function getStatusClass(): string {
        return $this->status == 'online' ? "status-online" : "status-offline";
    }
}
?>