<?php
class OrderController {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function processOrder($data) {
        // Validate input data
        $name = $this->sanitizeInput($data['name']);
        $whatsapp = $this->sanitizeInput($data['whatsapp']);
        $email = $this->sanitizeInput($data['email']);
        $product = $this->sanitizeInput($data['product']);
        $quantity = intval($this->sanitizeInput($data['quantity']));

        if ($this->validateOrder($name, $whatsapp, $email, $product, $quantity)) {
            // Insert order into the database
            $stmt = $this->db->prepare("INSERT INTO orders (name, whatsapp, email, product, quantity) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $name, $whatsapp, $email, $product, $quantity);
            if ($stmt->execute()) {
                return true; // Order processed successfully
            } else {
                return false; // Failed to process order
            }
        }
        return false; // Validation failed
    }

    private function sanitizeInput($input) {
        return htmlspecialchars(strip_tags(trim($input)));
    }

    private function validateOrder($name, $whatsapp, $email, $product, $quantity) {
        // Basic validation rules
        return !empty($name) && !empty($whatsapp) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($product) && $quantity > 0;
    }
}
?>