<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index() {
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo 'Migrations run successfully!';
        }
    }

    // Reverter para uma versão específica
    public function version($version)
    {
        if ($this->migration->version($version)) {
            echo "Migration reverted to version: " . $version;
        } else {
            show_error($this->migration->error_string());
        }
    }

    // Reverter todas as migrations (para a versão 0)
    public function reset()
    {
        if ($this->migration->version(0)) {
            echo "All migrations reverted.";
        } else {
            show_error($this->migration->error_string());
        }
    }
}