Download the starting files attached to this lab into your htdocs folder. There are two files: index.php and investdetails.php. You will only need to modify investdetails.php. In order to test, open index.php, enter values, and click Submit.

In investdetails.php, you will find comments labeled TODO containing the instructions. Here is an outline of steps you will need to complete for the lab:

Read in the following values from the $_POST object: amount, rate, years, extra, and addamount.
Display the values at the top of the page in a summary.
Modify the for loop, so that it loops for the number of years the end user has indicated they would like to invest.
Use a condition in the loop to check to see if the user has selected Yes to contribute an additional amount at the end of each year. If the user selected Yes, add the amount (after adding the year's interest amount) and display both the extra amount and new total in two additional columns in the table.
Add a summary that includes amount invested, total interest earned, total extra amount added, and the final amount.
Note that money_format() is not supported in some versions of PHP. Here is an alternative to the lines using money_format in investdetails.php:

<td><?php printf ( "$%.02f" , $startamount ); ?></td>
<td><?php printf ( "$%.02f" , $interest ); ?></td>
<td><?php printf ( "$%.02f" , $newamount ); ?></td>
Deliverables (Please submit):

Your code (I would prefer a file uploaded or in github as opposed to an image)
Screenshots of investdetails.php rendered in your browser using the following test data:

amount=5000, interest=6%, additional amount=1200, years=20
amount=1000, interest=5%, additional amount=600, years=5
