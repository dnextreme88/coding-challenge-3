<div x-data="{ isSubmitted: @entangle('is_submitted') }" class="mt-4 space-y-4 lg:w-3/4">
    <h1 class="text-2xl dark:text-gray-200">Coding Challenge 3</h1>

    <p class="text-xl text-justify dark:text-gray-200">Challenge: Numerology. A name has various meanings in the manner of numerals math. The main name's numeral is called destiny or expression number, which is the sum of all alphabets in a name. The second number is a Soul Urge or Heart Desire number, which is calculated from vowels in a name, and the third is called dream or personality number, which is calculated from consonants in a name.</p>

    <p class="text-xl text-justify dark:text-gray-200">Write a program that will calculate a persons Destiny, Heart Desire and Personality number by entering a Name.</p>

    <div class="py-4 px-2 bg-gray-400 dark:bg-gray-600 dark:text-gray-200">
        <p>You can use your first or full name to calculate the Destiny Number.</p>
        <p>For example: Teena</p>
        <p>Now look at the name number's chart to find the corresponding digits.</p>

        <table class="my-2 w-1/6 border border-gray-600 dark:border-gray-300">
            <thead>
                <th>T</th>
                <th>E</th>
                <th>E</th>
                <th>N</th>
                <th>A</th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">1</td>
                </tr>
            </tbody>
        </table>

        <p>Now add these digits and reduce to a single digit unless it is a master number.</p>
        <p>Sum of values = 20 (This is said to be a compound number)</p>
        <p>Single digit = 2 + 0 = 2</p>
        <p>The destiny number is 2</p>
        <p>Your program should ask for user's fullname and will output the 3 numbers</p>
        <p>e.g.</p>
        <p>Enter your full name: Vincent</p>
        <p>Your Destiny Number is 11</p>
        <p>Your Hearts Desire number is 6</p>
        <p>Your Personality Number is 5</p>
    </div>

    <div>
        <table class="my-6 w-full border border-gray-600 dark:border-gray-300 bg-gray-200 dark:bg-gray-600">
            <caption class="py-4 text-lg text-gray-200 bg-gray-700 dark:bg-gray-400 dark:text-gray-800">Numerology Number Chart</caption>

            <thead class="text-gray-200 bg-gray-600 dark:bg-gray-300 dark:text-gray-800">
                <th class="py-2">1</th>
                <th class="py-2">2</th>
                <th class="py-2">3</th>
                <th class="py-2">4</th>
                <th class="py-2">5</th>
                <th class="py-2">6</th>
                <th class="py-2">7</th>
                <th class="py-2">8</th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-gray-800 dark:text-gray-200 text-center">A</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">B</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">C</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">D</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">E</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">U</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">O</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">F</td>
                </tr>
                <tr>
                    <td class="text-gray-800 dark:text-gray-200 text-center">I</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">K</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">G</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">M</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">H</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">V</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">Z</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">P</td>
                </tr>
                <tr>
                    <td class="text-gray-800 dark:text-gray-200 text-center">J</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">R</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">L</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">T</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">N</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">W</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                </tr>
                <tr>
                    <td class="text-gray-800 dark:text-gray-200 text-center">Q</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">S</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center">X</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                </tr>
                <tr>
                    <td class="text-gray-800 dark:text-gray-200 text-center">Y</td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                    <td class="text-gray-800 dark:text-gray-200 text-center"></td>
                </tr>
            </tbody>
        </table>

        <form wire:submit="submit_input">
            <label class="block my-2 font-medium text-sm text-gray-700 dark:text-gray-300">
                <span>Enter your name:</span>
                <span class="text-red-500 dark:text-red-300">*</span>
            </label>

            <input wire:model="input" type="text" class="p-2 rounded-md shadow-lg w-full lg:w-3/4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" />

            @error ('input')
                <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror

            <button wire.loading.attr="disabled" type="submit" class="block py-2 px-4 mt-4 transition duration-200 rounded-lg dark:text-gray-200 bg-gray-400 dark:bg-gray-600 hover:text-gray-200 hover:bg-gray-600 dark:hover:bg-gray-400 dark:hover:text-black">
                <span wire:loading.flex wire:target="submit_input">
                    <div wire:loading class="flex justify-center items-center">
                        <svg class="inline-block align-middle animate-spin h-4 w-4" width="512px" height="512px" viewBox="0 0 24 24" fill="#0f72ba" x="0" y="0" role="img" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#0f72ba">
                                {{-- Ring background --}}
                                <path class="fill-gray-600 dark:fill-white" opacity=".35" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                {{-- Ring that spins --}}
                                <path class="fill-gray-600 dark:fill-white" d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z" />
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-900 dark:text-gray-300">Submitting</span>
                    </div>
                </span>

                <span wire:loading.remove wire:target="submit_input">Submit</span>
            </button>

            <div x-show="isSubmitted" class="mt-2 text-gray-700 dark:text-gray-300">
                <p>Your Destiny Number is: {{ $destiny_number }}</p>
                <p>Your Hearts Desire Number is: {{ $hearts_desire_number }}</p>
                <p>Your Personality Number is: {{ $personality_number }}</p>
            </div>
        </form>
    </div>
</div>
