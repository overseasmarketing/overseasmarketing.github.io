<?php
function convertNumberToWords($number)
{
    // Word mappings for numbers
    $words = [
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety'
    ];

    // Units for large numbers
    $units = ['', 'Thousand', 'Million', 'Billion', 'Trillion'];

    // Handle zero
    if ($number == 0) {
        return $words[0] . ' Rupees';
    }

    // Handle negative numbers
    if ($number < 0) {
        return 'Negative ' . convertNumberToWords(abs($number));
    }

    // Split number into integer and fractional parts
    $number_parts = explode('.', number_format($number, 2, '.', '')); // Ensure 2 decimal points
    $integer_part = strrev($number_parts[0]); // Reverse for chunking
    $fractional_part = isset($number_parts[1]) ? $number_parts[1] : '';

    // Convert integer part
    $integer_words = [];
    foreach (str_split($integer_part, 3) as $index => $chunk) {
        $chunk = strrev($chunk); // Reverse back the chunk
        $chunk_number = intval($chunk);

        if ($chunk_number) {
            $chunk_words = [];

            // Handle hundreds
            if ($chunk_number >= 100) {
                $hundreds = intval($chunk_number / 100);
                $chunk_words[] = $words[$hundreds] . ' Hundred';
                $chunk_number %= 100; // Remove hundreds place for next calculations
            }

            // Handle tens and ones
            if ($chunk_number > 0) {
                if ($chunk_number < 20) {
                    $chunk_words[] = $words[$chunk_number];
                } else {
                    $tens = intval($chunk_number / 10) * 10;
                    $ones = $chunk_number % 10;
                    $chunk_words[] = $words[$tens];
                    if ($ones) {
                        $chunk_words[] = $words[$ones];
                    }
                }
            }

            // Append the unit (Thousand, Million, etc.)
            $integer_words[] = implode(' ', $chunk_words) . ' ' . $units[$index];
        }
    }

    // Reverse the integer words array to correct the order
    $integer_words = array_reverse($integer_words);

    // Convert fractional part
    $fractional_words = '';
    if ($fractional_part && intval($fractional_part) > 0) {
        $fractional_words = ' and ' . (isset($words[intval($fractional_part)])
            ? $words[intval($fractional_part)]
            : $words[intval($fractional_part[0]) * 10] . ' ' . $words[intval($fractional_part[1])]) . ' Cents';
    }

    // Combine integer and fractional words
    return implode(' ', $integer_words) . ' Rupees' . $fractional_words;
}
?>