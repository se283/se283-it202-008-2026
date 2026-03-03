<?php 
// copilot: disable
// @ts-nocheck
require_once "base.php";

$ucid = "se283"; // <-- set your ucid

// Don't edit the arrays below, they are used to test your code
$array1 = ["hello world!", "php programming", "special@#$%^&characters", "numbers 123 456", "mIxEd CaSe InPut!"];
$array2 = ["hello world", "php programming", "this is a title case test", "capitalize every word", "mixEd CASE input"];
$array3 = ["  hello   world  ", "php    programming  ", "  extra    spaces  between   words   ",
    "      leading and trailing spaces      ", "multiple      spaces"];
$array4 = ["hello world", "php programming", "short", "a", "even"];


function transformText($arr, $arrayNumber) {
    echo "<div class='problem-item'>";
    // Only make edits between the designated "Start" and "End" comments
    printScenario4ArrayInfo($arr, $arrayNumber);
    // This should be solved without Copilot auto-completion, to toggle it, click the Copilot chat bubble at the top of the editor.
    //  Configure inline suggestions to "Disabled Inline Suggestions" (or similar) when writing code for this problem.
   
    // Challenge 1: Remove non-alphanumeric characters except spaces
    // Challenge 2: Convert text to Title Case
    // Challenge 3: Remove leading/trailing spaces and remove duplicate spaces between words
    // Result 1-3: Assign final phrase to `placeholderForModifiedPhrase`
    // Challenge 4 (extra credit): Extract up to middle 3 characters (beginning starts at middle of phrase, exclude the first and last character for shorter phrases, effectively middle index +/- 1)
    // Assign result to 'placeholderForMiddleCharacters'
    // If not enough characters in a word, instead assign "Not enough characters" to `placeholderForMiddleCharacters`

    $placeholderForModifiedPhrase = "";
    $placeholderForMiddleCharacters = "";
    foreach ($arr as $index => $text) {
        // Start Solution Edits
        // Step 1: sketch out plan using comments (include ucid and date)
        // Step 2: Add/commit your outline of comments (required for full credit)
        // Step 3: Add code to solve the problem (add/commit as needed)

        /*
        UCID: se283
        Date: 2/22/2026 

        Plan
        - Challenge 1: Use preg_replace() to remove non-alphanumeric characters, leaving only uppercase and lowercase alphabet, numbers, and spaces
        - Challenge 2: Lowercase everything first, then use ucwords for Title Case
        - Challenge 3: Use trim() for ends and preg_replace to collapse multiple internal spaces
        - Challenge 4: Calculate middle index; use substr to grab index-1, index, and index+1 if length >= 3

        */

        // Challenge 1: Remove non-alphanumeric characters except spaces
            // Use preg_replace to keep only a-z, A-Z, 0-9, and spaces
        $cleaned = preg_replace("/[^a-zA-Z0-0\s]/", "", $text);

        // Challenge 2: Convert text to Title Case
            // Lowercase first to handle "mIxEd" cases correctly
        $titled = ucwords(strtolower($cleaned));

        // Challenge 3: Remove leading/trailing spaces and remove duplicate spaces between words
        $noExtraSpaces = preg_replace("/\s+/", " ", trim($titled)); 

        // Result 1-3: Assign final phrase to `placeholderForModifiedPhrase`
        $placeholderForModifiedPhrase = $noExtraSpaces;

        // Challenge 4 (extra credit): Extract up to middle 3 characters (beginning starts at middle of phrase, exclude the first and last character for shorter phrases, effectively middle index +/- 1)
        $len = strlen($placeholderForModifiedPhrase);
        if ($len >= 3) {
            $mid = floor($len / 2);
            // Grab 3 chars starting from one before the middle and assign result to 'placeholderForMiddleCharacters'
            $placeholderForMiddleCharacters = substr($placeholderForModifiedPhrase, $mid - 1, 3);
        } else {
            // If not enough characters in a word, instead assign "Not enough characters" to `placeholderForMiddleCharacters`
            $placeholderForMiddleCharacters = "Not enough characters";
        }


        // End Solution Edits
    
        printScenario4Transformations($index, $placeholderForModifiedPhrase, $placeholderForMiddleCharacters);
        
    }

    echo "</div>";
}

// Run the problem
printHeader($ucid, 4);
echo "<div class='scenario4-grid'>";
transformText($array1, 1);
transformText($array2, 2);
transformText($array3, 3);
transformText($array4, 4);
echo "</div>";
printFooter($ucid, 4);

?>