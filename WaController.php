<?php

class WhatsAppMessage {
    private $phoneNumber;
    private $name;
    private $message;

    public function __construct($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function setName($name) {
        $this->name = urlencode($name);
    }

    public function setMessage($message) {
        $this->message = urlencode($message);
    }

    public function send() {
        $whatsappUrl = "https://wa.me/{$this->phoneNumber}?text=Nama:%20{$this->name}%0A%0APesan:%20{$this->message}";
        header("Location: $whatsappUrl");
        exit();
    }
}

?>
