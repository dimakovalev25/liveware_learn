<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public float $result = 0;
    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate2()
    {
        switch ($this->action) {
            case '+':
                $this->result = $this->number1 + $this->number2;
                break;
            case '-':
                $this->result = $this->number1 - $this->number2;
                break;
            case '*':
                $this->result = $this->number1 * $this->number2;
                break;
            case '/':
                // Проверка деления на ноль
                $this->result = $this->number2 != 0 ? $this->number1 / $this->number2 : 'Error';
                break;
            default:
                $this->result = 'Error';
                break;
        }
    }

    public function reset2()
    {
        $this->number1 = 0;
        $this->number2 = 0;
        $this->result = 0;
//        $this->emit('refreshPage');
    }

    public function calculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;

        if ($this->action == '+'){
            $this->result = $num1+$num2;
        } else if($this->action == '-') {
            $this->result = $num1-$num2;
        } else if($this->action == '*') {
            $this->result = $num1*$num2;
        } else if($this->action == '/') {
            $this->result = $num1/$num2;
        }

    }


}
