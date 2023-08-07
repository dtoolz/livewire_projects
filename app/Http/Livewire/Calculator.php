<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $numberOne = 0;
    public $numberTwo = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
         $numOne = (float)$this->numberOne;
         $numTwo = (float)$this->numberTwo;

         if($this->action === '-')
         {
           $this->result = $numOne - $numTwo;
         } 
         else if ($this->action === '+')
         {
           $this->result = $numOne + $numTwo;
         }
         else if ($this->action === '*')
         {
           $this->result = $numOne * $numTwo;
         }
         else if ($this->action === '/')
         {
           $this->result = $numOne / $numTwo;
         }
         else if ($this->action === '%')
         {
           $this->result = $numOne/100 * $numTwo;
         }
    }

    public function updated($property)
    {
      if($this->numberOne == '' || $this->numberTwo == '')
      {
          $this->disabled = true;
      } else {
          $this->disabled = false;
      }
    }
}
