<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static ?self $instance = null;
    private array $settings;

    private function __construct()
    {
        $this->settings = require __DIR__ . '/../config/config.php';
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        $keys = explode('.', $key);
        $value = $this->settings;

        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                return null;
            }
            $value = $value[$k];
        }

        return $value;
    }

    // Empêcher le clonage
    private function __clone() {}

    // Empêcher la désérialisation
    public function __wakeup() {}
}