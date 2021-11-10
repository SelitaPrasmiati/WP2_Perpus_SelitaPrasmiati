<?php
class ModelToko extends CI_Model
{
    //Membuat variable untuk menampung nilai
    public $brand, $harga;
    //method pejumlahan
    public function harga($brand = null)
    {
        $this->brand = $brand;
        if ($this->brand == 'Nike') {
            $this->harga = 375000;
        }

        if ($this->brand == 'Adidas') {
            $this->harga = 300000;
        }

        if ($this->brand == 'Kickers') {
            $this->harga = 250000;
        }

        if ($this->brand == 'Eiger') {
            $this->harga = 275000;
        }

        if ($this->brand == 'Bucherri') {
            $this->harga = 400000;
        }
        return $this->harga;
    }
}
