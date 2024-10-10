# Coding Challenge 3

## Coding Challenge Description
Numerology. A name has various meanings in the manner of numerals math. The main name's numeral is called destiny or expression number, which is the sum of all alphabets in a name. The second number is a Soul Urge or Heart Desire number, which is calculated from vowels in a name, and the third is called dream or personality number, which is calculated from consonants in a name.

Write a program that will calculate a persons Destiny, Heart Desire and Personality number by entering a Name.

> You can use your first or full name to calculate the Destiny Number.
> For example: Teena
> Now look at the name number's chart to find the corresponding digits.
> | T | E | E | N | A |
> | - | - | - | - | - |
> | 4 | 5 | 5 | 5 | 1 |

> Now add these digits and reduce to a single digit unless it is a master number.
> Sum of values = 20 (This is said to be a compound number)
> Single digit = 2 + 0 = 2
> The destiny number is 2
> Your program should ask for user's fullname and will output the 3 numbers
> e.g.
> Enter your full name: Vincent
> Your Destiny Number is 11
> Your Hearts Desire number is 6
> Your Personality Number is 5

## How to run
### Pre-requisites
This coding challenge uses the [Laravel framework](https://laravel.com/docs/11.x) so this will require package managers to install the dependencies.
1. Download the latest version of Composer from https://getcomposer.org/
2. Download the latest version of NodeJs from https://nodejs.org/en.
3. Download the latest version of XAMPP from https://www.apachefriends.org/ that uses PHP 8.2.12. After downloading, the plugins that matter is PHP from the installation window. Since this doesn't use any database logic, MySQL isn't required.
4. You need to set the environment variables of the PHP version. This must point to the PHP version that XAMPP is using. Search for `environment variables` in your computer. Click the `Environment Variables...` button.
5. From here, find the `Path` variable and double-click it. Click the `New` button and add the directory where PHP is installed. Usually, this would be `C:\xampp\php`.

### Instructions
1. Unzip the contents of this repository to your desired location, preferably the Desktop for easy access.
2. Using Powershell/CMD or any terminal program, open up two instances of your terminal from your OS.
3. Using one of the terminals, go to the location where the contents of the repository was unzipped. For example `cd Desktop`.
4. Run both `composer install` and `npm install` to install the dependencies.
5. Run both `npm run dev` to run a Vite instance and `php artisan serve` for the server.
6. Open a web browser and navigate to `http://127.0.0.1:8000`. Simply enter words into the input below. You may toggle dark mode on the upper right screen, if desired.
7. If it complains about dependencies not installing, try running `composer update` and `npm update`.

## Challenges
- This wasn't much of a challenge - it's actually the easiest of the three. The challenge was more on verifying if my calculations were correct, specifically calculating the dream number. At first, I thought I got the incorrect one, so I looked up the actual calculations online, but then I realized I forgot to split the numerical equivalents of the characters.
- The highlight of the code is more on the aesthetics - this one has light mode/dark mode and a simple, clean interface. I do love how the table looks, though.
- Error handling is handled pretty well so that only alphabetical characters from A-Z are handled correctly. Input is also sanitized so it automatically transform into an uppercase letter based on the chart.

## Defects
- There's no part of the code that needs refactoring, they all work as intended.
- The code will break if the arrays are modified. The numerical value equivalent is used as keys for ease of use, and if that is refactored or the line that automatically adds 1 to the key is removed/changed, the final outputs will differ and will be incorrect.

## Disclaimer
- Credits to the people at TechTaxi Inc. for giving me the opportunity to do this wonderful coding challenge. I'm grateful to have learned from this coding challenge, whether I get hired for this or not.

All rights reserved &copy; October 10, 2024
