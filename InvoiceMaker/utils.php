<?php
function convertNumberToWords($number)
{
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

    $units = ['', 'Thousand', 'Million', 'Billion', 'Trillion'];

    if ($number == 0)
        return $words[0];

    if ($number < 0)
        return 'Negative ' . convertNumberToWords(abs($number));

    $number_parts = explode('.', $number);
    $integer_part = strrev($number_parts[0]);
    $fractional_part = isset($number_parts[1]) ? $number_parts[1] : '';

    $integer_words = [];
    foreach (str_split($integer_part, 3) as $index => $chunk) {
        $chunk = strrev($chunk);
        $chunk_number = intval($chunk);

        if ($chunk_number) {
            $chunk_words = [];
            if ($chunk_number < 20) {
                $chunk_words[] = $words[$chunk_number];
            } else {
                $chunk_words[] = $words[$chunk_number - $chunk_number % 10];
                if ($chunk_number % 10) {
                    $chunk_words[] = $words[$chunk_number % 10];
                }
            }
            if ($chunk_number >= 100) {
                array_unshift($chunk_words, $words[intval($chunk[0])] . ' Hundred');
            }
            $integer_words[] = implode(' ', $chunk_words) . ' ' . $units[$index];
        }
    }

    $integer_words = array_reverse($integer_words);
    $fractional_words = $fractional_part ? 'and ' . (isset($words[$fractional_part]) ? $words[$fractional_part] : $words[$fractional_part[0] * 10] . ' ' . $words[$fractional_part[1]]) . ' Cents' : '';

    return implode(' ', $integer_words) . ' Rupees ' . $fractional_words;
}
?>