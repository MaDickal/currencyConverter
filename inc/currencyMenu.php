<?php

$currencyArray = ['EUR', 'GBP', 'USD', 'AUD', 'CAD', 'JPY'];

class selectMenu {
    private $items;
    private $options;
    private $selectMenu;

    function __construct($itemArray='') {
        $this->items = $itemArray;
    }

    private function buildOptions() {
        $this->options = "<option value=''>Select a Currency</option>";
        forEach($this->items as $item) {
            $this->options .= "<option value='"
            . $item . "'>"
            . $item . "</option>";
        }
    }

    private function buildFromSelect() {
        $this->selectMenu = "<select name='from'>" . $this->options . "</select>";
    }

    private function buildToSelect() {
        $this->selectMenu = "<select name='to'>" . $this->options . "</select>";
    }

    public function setOptions($array) {
        $this->items = $array;
    }

    public function makeFromMenu() {
        $this->buildOptions();
        $this->buildFromSelect();
        return $this->selectMenu;
    }

    public function makeToMenu() {
        $this->buildOptions();
        $this->buildToSelect();
        return $this->selectMenu;
    }
}

?>
