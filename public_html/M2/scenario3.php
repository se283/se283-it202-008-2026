<?php 
// copilot: disable
// @ts-nocheck
require_once "base.php";

$ucid = "se283"; // <-- set your ucid

// Don't edit the arrays below, they are used to test your code
$array1 = [42, -17, 89, -256, 1024, -4096, 50000, -123456];
$array2 = [3.14159265358979, -2.718281828459, 1.61803398875, -0.5772156649, 0.0000001, -1000000.0];
$array3 = [1.1, -2.2, 3.3, -4.4, 5.5, -6.6, 7.7, -8.8];
$array4 = ["123", "-456", "789.01", "-234.56", "0.00001", "-99999999"];
$array5 = [-1, 1, 2.0, -2.0, "3", "-3.0"];

function bePositive($arr, $arrayNumber)
{
    echo "<div class='problem-item'>";
    // Only make edits between the designated "Start" and "End" comments
    printScenario3ArrayInfo($arr, $arrayNumber);
    // This should be solved without Copilot auto-completion, to toggle it, click the Copilot chat bubble at the top of the editor.
    //  Configure inline suggestions to "Disabled Inline Suggestions" (or similar) when writing code for this problem.
    
    // Challenge 1: Make each value positive
    // Challenge 2: Convert the values back to their original data type and assign it to the proper slot in the `output` array
    // Step 1: sketch out plan using comments (include ucid and date)
    // Step 2: Add/commit your outline of comments (required for full credit)
    // Step 3: Add code to solve the problem (add/commit as needed)

    $output = array_fill(0, count($arr), null); // Initialize output array
    // Start Solution Edits
    /*
    UCID: se283
    Date: 2/22/2026 

    Plan
    - Challenge 1: Create a for-loop that iterate over an array, and make each value in the array positive by turning each value into its absolute value
    - Challenge 2: Inside the same for-loop from Challenge 1, get the original data type of each value of the array and then convert the positive value back to their original data type through if and elseif statements

    */
    
    // Challenge 1: Make each value positive
        // Create an array to store the values turned positive
    $posArr = array(); 
        // Create a for loop that reiterates through an array ($arr) 
    for ($i = 0; $i < count($arr); $i++) { 
        
        // Turn a value from the array into their absolute value and add them into the array for positive arrays
        $posArr[$i] = abs($arr[$i]); 

    // Challenge 2: Convert the values back to their original data type and assign it to the proper slot in the `output` array
        // Get the original data type (integer, double/float, string, etc.)
        $originalType = gettype($arr[$i]);

        // Cast the positive value back to the original type using if and elseif statements depending on which data type
        if ($originalType == "integer") {
            $output[$i] = (int)$posArr[$i];
        } elseif ($originalType == "double") { // PHP uses "double" for floats in gettype()
            $output[$i] = (float)$posArr[$i];
        } elseif ($originalType == "string") {
            $output[$i] = (string)$posArr[$i];
        } else {
            $output[$i] = $posArr[$i];
        }
        
    }

    

    // End Solution Edits
    printScenario3Output($output);
    echo "</div>";
    
}

// Run the problem
printHeader($ucid, 3);
echo "<div class='scenario3-grid'>";
bePositive($array1, 1);
bePositive($array2, 2);
bePositive($array3, 3);
bePositive($array4, 4);
bePositive($array5, 5);
echo "</div>";
printFooter($ucid, 3);