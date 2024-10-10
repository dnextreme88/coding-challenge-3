<?php

namespace App\Livewire;

use Livewire\Component;

class CalculateDestinyNumber extends Component
{
    public $numerology_number_charts = [];
    public $one_pointers = [];
    public $two_pointers = [];
    public $three_pointers = [];
    public $four_pointers = [];
    public $five_pointers = [];
    public $six_pointers = [];
    public $seven_pointers = [];
    public $eight_pointers = [];

    public $input;
    public $is_submitted;
    public $destiny_number = 0;
    public $hearts_desire_number = 0;
    public $personality_number = 0;

    public function submit_input()
    {
        // Reset
        $this->destiny_number = 0;
        $this->hearts_desire_number = 0;
        $this->personality_number = 0;

        $this->validate(
            ['input' => ['required', 'regex:/^[a-zA-Z\s]+$/']],
            ['regex' => 'The name field only accepts alphabetical characters']
        );

        $replaced_whitespaces = preg_replace('/\s+/', '', $this->input);
        $splitted_input = str_split(trim(strtoupper($replaced_whitespaces)));

        $temporary_destiny_number = 0;
        $temporary_hearts_desire_number = 0;
        $temporary_personality_number = 0;

        foreach ($splitted_input as $key => $letter) {
            foreach ($this->numerology_number_charts as $numerical_value => $letter_array) {
                $numerical_value += 1; // Add 1 since arrays are index-based
                if (in_array($letter, $letter_array)) {
                    $temporary_destiny_number += $numerical_value;

                    $is_vowel_or_consonant = $this->is_vowel_or_consonant($letter);

                    if ($is_vowel_or_consonant == 'vowel') {
                        $temporary_hearts_desire_number += $numerical_value;
                    } else {
                        $temporary_personality_number += $numerical_value;
                    }

                    break;
                }
            }
        }

        foreach (str_split($temporary_destiny_number) as $number) {
            $this->destiny_number += $number;
        }

        foreach (str_split($temporary_hearts_desire_number) as $number) {
            $this->hearts_desire_number += $number;
        }

        foreach (str_split($temporary_personality_number) as $number) {
            $this->personality_number += $number;
        }

        $this->is_submitted = true;
    }

    public function is_vowel_or_consonant($character)
    {
        if (in_array($character, ['A', 'E', 'I', 'O', 'U'])) {
            return 'vowel';
        } else {
            return 'consonant';
        }
    }

    public function mount()
    {
        $this->one_pointers = ['A', 'I', 'J', 'Q', 'Y'];
        $this->two_pointers = ['B', 'K', 'R'];
        $this->three_pointers = ['C', 'G', 'L', 'S'];
        $this->four_pointers = ['D', 'M', 'T'];
        $this->five_pointers = ['E', 'H', 'N', 'X'];
        $this->six_pointers = ['U', 'V', 'W'];
        $this->seven_pointers = ['O', 'Z'];
        $this->eight_pointers = ['F', 'P'];

        $this->numerology_number_charts = array_merge([
            $this->one_pointers,
            $this->two_pointers,
            $this->three_pointers,
            $this->four_pointers,
            $this->five_pointers,
            $this->six_pointers,
            $this->seven_pointers,
            $this->eight_pointers
        ]);
    }

    public function render()
    {
        return view('livewire.calculate-destiny-number');
    }
}
