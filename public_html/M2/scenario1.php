<?php 
// copilot: disable
// @ts-nocheck
require_once "base.php";

$ucid = "se283"; // <-- set your ucid

// Don't edit the arrays below, they are used to test your code
$array1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$array2 = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
$array3 = [0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9];
$array4 = [9, 9, 8, 8, 7, 7, 6, 6, 5, 5, 4, 4, 3, 3, 2, 2, 1, 1, 0, 0];

function printOdds($arr, $arrayNumber)
{
    // Only make edits between the designated "Start" and "End" comments
    echo "<div class='problem-item'>";
    printScenario1ArrayInfo($arr, $arrayNumber);
    // This should be solved without Copilot auto-completion, to toggle it, click the Copilot chat bubble at the top of the editor.
    //  Configure inline suggestions to "Disabled Inline Suggestions" (or similar) when writing code for this problem.
    
    // Challenge 1: From each passed in array, print odd values only in a single line separated by commas and a space after each comma (should not have leading or trailing commas)
    // Step 1: sketch out plan using comments (include ucid and date)
    // Step 2: Add/commit your outline of comments (required for full credit)
    // Step 3: Add code to solve the problem (add/commit as needed)

    
    $output_result = "";
    // Start Solution Edits
    // set solution to $output_result variable
    /*
    UCID: se283
    Date: 2/22/2026 

    Plan
    - Create a for loop that iterate over an array, check if each value in the array is an odd value, then add those values to the $output_result variable 

    */

    // Create a temporary array to store odd numbers
    $odd_numbers = array();

    // Create a for loop that reiterates through an array ($arr) 
    for ($i = 0; $i < count($arr); $i++) { 
        
        // Check if a value in an array is an odd value or not using the modulus operator (%)
        if ($arr[$i] % 2 != 0) {  

            // if a value in an array is an odd value, the odd value is stored into the $odd_numbers array
            $odd_numbers[] = $arr[$i]; 
        }
 
    }

    // Use implode to join the odd numbers into a single line, separated by ", "
    $output_result = implode(", ", $odd_numbers);

    


    // End Solution Edits
    printScenario1Output($output_result);
    echo "</div>";
}

// Run the problem
printHeader($ucid, 1);
echo "<div class='scenario1-grid'>";

printOdds($array1, 1);
printOdds($array2, 2);
printOdds($array3, 3);
printOdds($array4, 4);
echo "</div>";
printFooter($ucid, 1);