# PHP Loose Comparison Pitfall: '0' vs 0

This repository demonstrates a subtle bug in PHP related to loose comparison (==) and strict comparison (===).

The `bug.php` file contains a function that attempts to remove elements from an array that have a value of '0'.  Due to PHP's loose comparison, the function fails to remove elements containing the string '0'.

The `bugSolution.php` file provides a corrected version that uses strict comparison to accurately identify and remove elements.

This highlights the importance of using strict comparison (===) when dealing with mixed data types in PHP to avoid unexpected behavior.