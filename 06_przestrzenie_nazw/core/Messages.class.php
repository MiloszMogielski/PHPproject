<?php
namespace core;

  class Messages {
    private $errors = [];
    private $num = 0;

    public function addError($message) {
      $this->errors[] = $message;
      $this->num++;
    }

    public function isEmpty() {
      return $this->num == 0;
    }

    public function isError() {
      return count($this->errors) > 0;
    }

    public function getErrors() {
      return $this->errors;
    }

    public function clear() {
      $this->errors = [];
      $this->num = 0;
    }
  }
?>