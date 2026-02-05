<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Task3: SQL Functions</title>

        <style>
            table {
                margin-bottom: 20px;
            }
            td, p {
                font-family: 'Courier New', Courier, monospace;
            }
        </style>
    </head>
    <body style="padding: 15px;">
        <h1>IT223 (Task 3): SQL FUNCTIONS</h1>
        <p>KIMBIE J. BATILONG BSIT-2B</p>
        <br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th colspan="4" style="background-color: black; color: white;">STRING FUNCTIONS</th>
            </tr>
            <tr>
                <th>SQL Functions</th>
                <th>Description</th>
                <th>Example Code</th>
                <th>Example Output</th>
            </tr>
            <tr>
                <td>ASCII()</td>
                <td>Returns the ASCII value for the specific character.</td>
                <td>SELECT lastname, ASCII(lastname) AS ascii_value FROM student_data;</td>
                <td><a href="MySQL String functions/ascii_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CHAR()</td>
                <td>Returns the character based on the ASCII code.</td>
                <td>SELECT CONCAT(lastname, ' is ', CHAR(97), ' student from ', program) AS student_program;</td>
                <td><a href="MySQL String functions/char_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CONCAT()</td>
                <td>Combines two or more strings together.</td>
                <td>SELECT CONCAT(firstname, ' ', lastname) AS fullname FROM student_data;</td>
                <td><a href="MySQL String functions/concat_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CONCAT_WS()</td>
                <td>Adds two or more strings together with a separator.</td>
                <td>SELECT CONCAT_WS(' ', firstname, lastname) AS fullname FROM student_data;</td>
                <td><a href="MySQL String functions/concat_ws_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>FORMAT()</td>
                <td>Formats a value with the specified format.</td>
                <td>SELECT lastname, grade, FORMAT(grade, 1) AS formatted_grade FROM student_data;;</td>
                <td><a href="MySQL String functions/format_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LEFT()</td>
                <td>Extracts a number of characters from a string (starting from left).</td>
                <td>SELECT firstname, LEFT(firstname, 3) AS first_three_chars FROM student_data;</td>
                <td><a href="MySQL String functions/left_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LENGTH()</td>
                <td>Returns the length of a string.</td>
                <td>SELECT lastname, LENGTH(lastname) AS lastname_length FROM student_data;</td>
                <td><a href="MySQL String functions/len_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LOWER()</td>
                <td>Converts a string to lower-case.</td>
                <td>SELECT LOWER(program) AS lowercase_program FROM student_data;</td>
                <td><a href="MySQL String functions/lower_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LTRIM()</td>
                <td>Removes leading spaces from a string.</td>
                <td>SELECT CONCAT(firstname, lastname) AS fullname, CONCAT(firstname, LTRIM(lastname)) AS trimmed_lastname FROM student_data;</td>
                <td><a href="MySQL String functions/ltrim_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>REPLACE()</td>
                <td>Replaces all occurrences of a substring within a string, with a new substring.</td>
                <td>SELECT firstname, REPLACE(firstname, 'e', 'E') AS replaced_firstname FROM student_data;</td>
                <td><a href="MySQL String functions/replace_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>REVERSE()</td>
                <td>Reverses a string and returns the result.</td>
                <td>SELECT firstname, REVERSE(firstname) AS reversed_firstname FROM student_data;</td>
                <td><a href="MySQL String functions/reverse_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>RIGHT()</td>
                <td>Extracts a number of characters from a string (starting from right).</td>
                <td>SELECT firstname, RIGHT(firstname, 3) AS last_three_chars FROM student_data;</td>
                <td><a href="MySQL String functions/right_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>RTRIM()</td>
                <td>Removes trailing spaces from a string.</td>
                <td>SELECT CONCAT(lastname, firstname) AS fullname, CONCAT(RTRIM(lastname), firstname) AS trimmed_lastname FROM student_data;</td>
                <td><a href="MySQL String functions/rtrim_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SOUNDEX()</td>
                <td>Returns a four-character code to evaluate the similarity of two strings.</td>
                <td>SELECT lastname FROM student_data WHERE SOUNDEX(lastname) = SOUNDEX('Golocino');</td>
                <td><a href="MySQL String functions/soundex_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SPACE()</td>
                <td>Returns a string of the specified number of space characters.</td>
                <td>SELECT CONCAT(firstname, SPACE(5), lastname) AS fullname_with_spaces FROM student_data;</td>
                <td><a href="MySQL String functions/space_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SUBSTRING()</td>
                <td>Extracts some characters from a string.</td>
                <td>SELECT firstname, SUBSTRING(firstname, 1, 3) AS first_three_chars FROM student_data;</td>
                <td><a href="MySQL String functions/substring_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TRIM()</td>
                <td>Removes leading and trailing spaces (or other specified characters) from a string.</td>
                <td>SELECT CONCAT(firstname,lastname) AS fullname, CONCAT(firstname, TRIM(lastname)) AS trimmed_lastname FROM student_data;</td>
                <td><a href="MySQL String functions/trim_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>UPPER()</td>
                <td>Converts a string to upper-case.</td>
                <td>SELECT firstname, UPPER(lastname) AS uppercase_lastname FROM student_data;</td>
                <td><a href="MySQL String functions/upper_output.php">View Output</a></td>
            </tr>
        </table>

        <br>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th colspan="4" style="background-color: black; color: white;">NUMERIC FUNCTIONS</th>
            </tr>
            <tr>
                <th>SQL Functions</th>
                <th>Description</th>
                <th>Example Code</th>
                <th>Example Output</th>
            </tr>
            <tr>
                <td>ABS()</td>
                <td>Returns the absolute value of a number.</td>
                <td>SELECT lastname, grade, ABS(grade) AS absolute_value FROM student_data;</td>
                <td><a href="MySQL Numeric functions/abs_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ACOS()</td>
                <td>Returns the arc cosine of a number.</td>
                <td>SELECT ACOS(-1) AS arc_cosine;</td>
                <td><a href="MySQL Numeric functions/acos_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ASIN()</td>
                <td>Returns the arc sine of a number.</td>
                <td>SELECT ASIN(0.5) AS arc_sine;</td>
                <td><a href="MySQL Numeric functions/asin_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ATAN()</td>
                <td>Returns the arc tangent of a number.</td>
                <td>SELECT ATAN(1) AS arc_tangent;</td>
                <td><a href="MySQL Numeric functions/atan_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>AVG()</td>
                <td>Returns the average value of an expression.</td>
                <td>SELECT program, AVG(grade) AS avg_grade FROM student_data GROUP BY program;</td>
                <td><a href="MySQL Numeric functions/avg_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CEILING()</td>
                <td>Returns the smallest integer value that is >= a number.</td>
                <td>SELECT lastname, grade, CEILING(grade) AS ceiling_value FROM student_data ORDER BY grade DESC;</td>
                <td><a href="MySQL Numeric functions/ceiling_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>COUNT()</td>
                <td>Returns the number of records returned by a select query.</td>
                <td>SELECT program, COUNT(program) AS total_students FROM student_data GROUP BY program;</td>
                <td><a href="MySQL Numeric functions/count_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>COS()</td>
                <td>Returns the cosine of a number.</td>
                <td>SELECT COS(3) AS cosine_value;</td>
                <td><a href="MySQL Numeric functions/cos_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>COT()</td>
                <td>Returns the cotangent of a number.</td>
                <td>SELECT COT(-5) AS cotangent_value;</td>
                <td><a href="MySQL Numeric functions/cot_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DEGREES()</td>
                <td>Converts a value in radians to degrees.</td>
                <td>SELECT DEGREES(6.283) AS degrees_value;</td>
                <td><a href="MySQL Numeric functions/degrees_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>EXP()</td>
                <td>Returns e raised to the power of a specified number.</td>
                <td>SELECT EXP(2) AS exponential_value;</td>
                <td><a href="MySQL Numeric functions/exp_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>FLOOR()</td>
                <td>Returns the largest integer value that is <= to a number.</td>
                <td>SELECT lastname, grade, FLOOR(grade) AS floor_value FROM student_data ORDER BY grade DESC;</td>
                <td><a href="MySQL Numeric functions/floor_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LOG()</td>
                <td>Returns the natural logarithm of a number, or the logarithm of a number to a specified base.</td>
                <td>SELECT LOG(2, 10) AS log_value;</td>
                <td><a href="MySQL Numeric functions/log_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LOG10()</td>
                <td>Returns the natural logarithm of a number to base 10.</td>
                <td>SELECT LOG10(2) AS log10_value;</td>
                <td><a href="MySQL Numeric functions/log10_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MAX()</td>
                <td>Returns the maximum value in a set of values.</td>
                <td>SELECT MAX(grade) AS max_grade FROM student_data;</td>
                <td><a href="MySQL Numeric functions/max_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MIN()</td>
                <td>Returns the minimum value in a set of values.</td>
                <td>SELECT MIN(grade) AS min_grade FROM student_data;</td>
                <td><a href="MySQL Numeric functions/min_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>PI()</td>
                <td>Returns the value of PI.</td>
                <td>SELECT PI() AS pi_value;</td>
                <td><a href="MySQL Numeric functions/pi_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>POWER()</td>
                <td>Returns the value of a number raised to the power of another number.</td>
                <td>SELECT lastname, grade, POWER(grade, 2) AS squared_grade FROM student_data;</td>
                <td><a href="MySQL Numeric functions/power_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>RADIANS()</td>
                <td>Converts a degree value into radians.</td>
                <td>SELECT RADIANS(180) AS radians_value;</td>
                <td><a href="MySQL Numeric functions/radians_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>RAND()</td>
                <td>Returns a random number.</td>
                <td>SELECT RAND() AS random_value;</td>
                <td><a href="MySQL Numeric functions/rand_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ROUND()</td>
                <td>Rounds a number to a specified number of decimal places.</td>
                <td>SELECT lastname, grade, ROUND(grade, 1) AS rounded_grade FROM student_data;</td>
                <td><a href="MySQL Numeric functions/round_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SIGN()</td>
                <td>Returns the sign of a number.</td>
                <td>SELECT lastname, grade, SIGN(grade) AS sign_value FROM student_data;</td>
                <td><a href="MySQL Numeric functions/sign_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SIN()</td>
                <td>Returns the sine of a number.</td>
                <td>SELECT SIN(3) AS sin_value;</td>
                <td><a href="MySQL Numeric functions/sin_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SQRT()</td>
                <td>Returns the square root of a number.</td>
                <td>SELECT lastname, grade, SQRT(grade) AS sqrt_value FROM student_data;</td>
                <td><a href="MySQL Numeric functions/sqrt_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SUM()</td>
                <td>Calculates the sum of a set of values.</td>
                <td>SELECT program, SUM(grade) AS total_grade FROM student_data GROUP BY program;</td>
                <td><a href="MySQL Numeric functions/sum_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TAN()</td>
                <td>Returns the tangent of a number.</td>
                <td>SELECT TAN(-3) AS tan_value;</td>
                <td><a href="MySQL Numeric functions/tan_output.php">View Output</a></td>
            </tr>
        </table>

        <br>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th colspan="4" style="background-color: black; color: white;">DATE FUNCTIONS</th>
            </tr>
            <tr>
                <th>SQL Functions</th>
                <th>Description</th>
                <th>Example Code</th>
                <th>Example Output</th>
            </tr>
            <tr>
                <td>ADDDATE()</td>
                <td>Adds a time/date interval to a date and then returns the date.</td>
                <td>SELECT lastname, enrolled_datetime, ADDDATE(enrolled_datetime, INTERVAL 1 DAY) AS new_date FROM student_data;</td>
                <td><a href="MySQL Date functions/adddate_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ADDTIME()</td>
                <td>Adds a time interval to a time/datetime and then returns the time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, ADDTIME(enrolled_datetime, '01:00:00') AS new_datetime FROM student_data;</td>
                <td><a href="MySQL Date functions/addtime_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURDATE()</td>
                <td>Returns the current date.</td>
                <td>SELECT CURDATE() AS cur_date;</td>
                <td><a href="MySQL Date functions/curdate_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURRENT_DATE()</td>
                <td>Returns the current date.</td>
                <td>SELECT CURRENT_DATE() AS cur_date;</td>
                <td><a href="MySQL Date functions/current_date_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURRENT_TIME()</td>
                <td>Returns the current time.</td>
                <td>SELECT CURRENT_TIME() AS cur_time;</td>
                <td><a href="MySQL Date functions/current_time_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURRENT_TIMESTAMP()</td>
                <td>Returns the current date and time.</td>
                <td>SELECT CURRENT_TIMESTAMP() AS cur_timestamp;</td>
                <td><a href="MySQL Date functions/current_timestamp_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURTIME()</td>
                <td>Returns the current time.</td>
                <td>SELECT CURTIME() AS cur_time;</td>
                <td><a href="MySQL Date functions/curtime_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATE()</td>
                <td>Extracts the date part from a datetime expression.</td>
                <td>SELECT lastname, enrolled_datetime, DATE(enrolled_datetime) AS extracted_date FROM student_data;</td>
                <td><a href="MySQL Date functions/date_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATEDIFF()</td>
                <td>Returns the number of days between two dates.</td>
                <td>SELECT lastname, enrolled_datetime, CURDATE(), DATEDIFF(CURDATE(), enrolled_datetime) AS days_difference FROM student_data;</td>
                <td><a href="MySQL Date functions/datediff_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATE_ADD()</td>
                <td>Adds a time/date interval to a date and then returns the date.</td>
                <td>SELECT lastname, enrolled_datetime, DATE_ADD(enrolled_datetime, INTERVAL 1 DAY) AS new_date FROM student_data;</td>
                <td><a href="MySQL Date functions/date_add_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATE_FORMAT()</td>
                <td>Formats a date or datetime value according to a specified format.</td>
                <td>SELECT lastname, DATE_FORMAT(enrolled_datetime, '%Y-%m-%d') AS formatted_date FROM student_data;</td>
                <td><a href="MySQL Date functions/date_format_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATE_SUB()</td>
                <td>Subtracts a time/date interval from a date and then returns the date.</td>
                <td>SELECT lastname, enrolled_datetime, DATE_SUB(enrolled_datetime, INTERVAL 1 DAY) AS new_date FROM student_data;</td>
                <td><a href="MySQL Date functions/date_sub_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DAY()</td>
                <td>Returns the day of the month for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, DAY(enrolled_datetime) AS day_number FROM student_data;</td>
                <td><a href="MySQL Date functions/day_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DAYNAME()</td>
                <td>Extracts the name of the day for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, DAYNAME(enrolled_datetime) AS day_name FROM student_data;</td>
                <td><a href="MySQL Date functions/dayname_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DAYOFMONTH()</td>
                <td>Returns the day of the month for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, DAYOFMONTH(enrolled_datetime) AS day_number FROM student_data;</td>
                <td><a href="MySQL Date functions/dayofmonth_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DAYOFWEEK()</td>
                <td>Returns the day of the week for a given date (1 = Sunday, 2 = Monday, ..., 7 = Saturday).</td>
                <td>SELECT lastname, enrolled_datetime, DAYOFWEEK(enrolled_datetime) AS day_number FROM student_data;</td>
                <td><a href="MySQL Date functions/dayofweek_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DAYOFYEAR()</td>
                <td>Returns the day of the year for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, DAYOFYEAR(enrolled_datetime) AS day_number FROM student_data;</td>
                <td><a href="MySQL Date functions/dayofyear_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>EXTRACT()</td>
                <td>Extracts a specific part (e.g., year, month, day) from a date or datetime value.</td>
                <td>SELECT lastname, enrolled_datetime, EXTRACT(YEAR FROM enrolled_datetime) AS extracted_year FROM student_data;</td>
                <td><a href="MySQL Date functions/extract_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>FROM_DAYS()</td>
                <td>Converts a day number to a date value.</td>
                <td>SELECT lastname, FROM_DAYS(TO_DAYS(enrolled_datetime)) AS converted_date FROM student_data;</td>
                <td><a href="MySQL Date functions/from_days_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>HOUR()</td>
                <td>Extracts the hour part from a datetime expression.</td>
                <td>SELECT lastname, enrolled_datetime, HOUR(enrolled_datetime) AS extracted_hour FROM student_data;</td>
                <td><a href="MySQL Date functions/hour_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LAST_DAY()</td>
                <td>Returns the last day of the month for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, LAST_DAY(enrolled_datetime) AS last_day FROM student_data;</td>
                <td><a href="MySQL Date functions/last_day_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LOCALTIME()</td>
                <td>Returns the current date and time.</td>
                <td>SELECT LOCALTIME() AS cur_time;</td>
                <td><a href="MySQL Date functions/localtime_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LOCALTIMESTAMP()</td>
                <td>Returns the current date and time.</td>
                <td>SELECT LOCALTIMESTAMP() AS cur_timestamp;</td>
                <td><a href="MySQL Date functions/localtimestamp_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MAKEDATE()</td>
                <td>Creates and returns a date based on a year and a number of days value.</td>
                <td>SELECT lastname, YEAR(enrolled_datetime) AS year, DAYOFYEAR(enrolled_datetime) AS day_of_year, MAKEDATE(YEAR(enrolled_datetime), DAYOFYEAR(enrolled_datetime)) AS made_date FROM student_data;</td>
                <td><a href="MySQL Date functions/makedate_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MAKETIME()</td>
                <td>Creates and returns a time based on an hour, minute, and second value.</td>
                <td>SELECT lastname, MAKETIME(HOUR(enrolled_datetime), MINUTE(enrolled_datetime), SECOND(enrolled_datetime)) AS made_time FROM student_data;</td>
                <td><a href="MySQL Date functions/maketime_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MICROSECOND()</td>
                <td>Returns the microsecond part of a time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, MICROSECOND(enrolled_datetime) AS microsecond_value FROM student_data;</td>
                <td><a href="MySQL Date functions/microsecond_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MINUTE()</td>
                <td>Returns the minute part of a time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, MINUTE(enrolled_datetime) AS extracted_minute FROM student_data;</td>
                <td><a href="MySQL Date functions/minute_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MONTH()</td>
                <td>Returns the month part of a date.</td>
                <td>SELECT lastname, enrolled_datetime, MONTH(enrolled_datetime) AS extracted_month FROM student_data;</td>
                <td><a href="MySQL Date functions/month_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>MONTHNAME()</td>
                <td>Returns the name of the month for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, MONTHNAME(enrolled_datetime) AS month_name FROM student_data;</td>
                <td><a href="MySQL Date functions/monthname_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>NOW()</td>
                <td>Returns the current date and time.</td>
                <td>SELECT NOW() AS current_datetime;</td>
                <td><a href="MySQL Date functions/now_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>PERIOD_ADD()</td>
                <td>Adds a specified number of months to a period.</td>
                <td>SELECT lastname, enrolled_datetime, PERIOD_ADD(DATE_FORMAT(enrolled_datetime, '%Y%m'), 3) AS period_added FROM student_data;</td>
                <td><a href="MySQL Date functions/period_add_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>PERIOD_DIFF()</td>
                <td>Returns the difference between two periods.</td>
                <td>SELECT lastname, enrolled_datetime, PERIOD_DIFF(DATE_FORMAT(enrolled_datetime, '%Y%m'), 202401) AS period_diff FROM student_data;</td>
                <td><a href="MySQL Date functions/period_diff_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>QUARTER()</td>
                <td>Returns the quarter of the year for a given date value.</td>
                <td>SELECT lastname, enrolled_datetime, QUARTER(enrolled_datetime) AS quarter_value FROM student_data;</td>
                <td><a href="MySQL Date functions/quarter_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SECOND()</td>
                <td>Returns the second part of a time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, SECOND(enrolled_datetime) AS extracted_second FROM student_data;</td>
                <td><a href="MySQL Date functions/second_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SEC_TO_TIME()</td>
                <td>Returns a time value based on the specified seconds.</td>
                <td>SELECT lastname, TIME_TO_SEC(enrolled_datetime) AS time_in_seconds, SEC_TO_TIME(TIME_TO_SEC(enrolled_datetime)) AS converted_time FROM student_data;</td>
                <td><a href="MySQL Date functions/sec_to_time_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>STR_TO_DATE()</td>
                <td>Returns a date based on a string and a format.</td>
                <td>SELECT STR_TO_DATE('2023-01-01', '%Y-%m-%d') AS converted_date;</td>
                <td><a href="MySQL Date functions/str_to_date_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SUBDATE()</td>
                <td>Subtracts a time/date interval from a date and then returns the date.</td>
                <td>SELECT lastname, enrolled_datetime, SUBDATE(enrolled_datetime, INTERVAL 1 MONTH) AS sub_date FROM student_data;</td>
                <td><a href="MySQL Date functions/subdate_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SUBTIME()</td>
                <td>Subtracts a time interval from a datetime and then returns the time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, SUBTIME(enrolled_datetime, '01:00:00') AS sub_time FROM student_data;</td>
                <td><a href="MySQL Date functions/subtime_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SYSDATE()</td>
                <td>Returns the current system date and time.</td>
                <td>SELECT SYSDATE() AS system_date_time;</td>
                <td><a href="MySQL Date functions/sysdate_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TIME()</td>
                <td>Extracts the time part from given time/datetime.</td>
                <td>SELECT lastname, enrolled_datetime, TIME(enrolled_datetime) AS extracted_time FROM student_data;</td>
                <td><a href="MySQL Date functions/time_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TIME_FORMAT()</td>
                <td>Formats a time by a specified format.</td>
                <td>SELECT lastname, TIME_FORMAT(enrolled_datetime, '%H:%i:%s') AS formatted_time FROM student_data;</td>
                <td><a href="MySQL Date functions/time_format_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TIME_TO_SEC()</td>
                <td>Converts a time value into seconds.</td>
                <td>SELECT lastname, TIME(enrolled_datetime) AS extracted_time, TIME_TO_SEC(enrolled_datetime) AS converted_seconds FROM student_data;</td>
                <td><a href="MySQL Date functions/time_to_sec_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TIMEDIFF()</td>
                <td>Returns the difference between two datetime expressions.</td>
                <td>SELECT lastname, TIME(enrolled_datetime) AS extracted_time, TIMEDIFF(enrolled_datetime, NOW()) AS time_difference FROM student_data;</td>
                <td><a href="MySQL Date functions/timediff_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TIMESTAMP()</td>
                <td>Creates a datetime value from a date and time.</td>
                <td>SELECT lastname, TIMESTAMP(enrolled_datetime) AS timestamp_value FROM student_data;</td>
                <td><a href="MySQL Date functions/timestamp_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>TO_DAYS()</td>
                <td>Returns the number of days between a date and date "0000-00-00".</td>
                <td>SELECT lastname, enrolled_datetime, TO_DAYS(enrolled_datetime) AS days_since_zero FROM student_data;</td>
                <td><a href="MySQL Date functions/to_days_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>WEEK()</td>
                <td>Returns the week number of a given date.</td>
                <td>SELECT lastname, enrolled_datetime, WEEK(enrolled_datetime) AS week_number FROM student_data;</td>
                <td><a href="MySQL Date functions/week_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>WEEKDAY()</td>
                <td>Returns the weekday number for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, WEEKDAY(enrolled_datetime) AS weekday_number FROM student_data;</td>
                <td><a href="MySQL Date functions/weekday_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>WEEKOFYEAR()</td>
                <td>Returns the week number of a given date within the year.</td>
                <td>SELECT lastname, enrolled_datetime, WEEKOFYEAR(enrolled_datetime) AS week_of_year FROM student_data;</td>
                <td><a href="MySQL Date functions/weekofyear_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>YEAR()</td>
                <td>Returns the year part of a given date.</td>
                <td>SELECT lastname, enrolled_datetime, YEAR(enrolled_datetime) AS extracted_year FROM student_data;</td>
                <td><a href="MySQL Date functions/year_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>YEARWEEK()</td>
                <td>Returns the year and week number for a given date.</td>
                <td>SELECT lastname, enrolled_datetime, YEARWEEK(enrolled_datetime) AS year_week_number FROM student_data;</td>
                <td><a href="MySQL Date functions/yearweek_output.php">View Output</a></td>
            </tr>
        </table>

        <br>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th colspan="4" style="background-color: black; color: white;">ADVANCED FUNCTIONS</th>
            </tr>
            <tr>
                <th>SQL Functions</th>
                <th>Description</th>
                <th>Example Code</th>
                <th>Example Output</th>
            </tr>
            <tr>
                <td>BIN()</td>
                <td>Returns a binary representation of a number.</td>
                <td>SELECT lastname, units, BIN(units) AS binary_value FROM student_data;</td>
                <td><a href="MySQL Advanced functions/bin_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>BINARY()</td>
                <td>Converts a value to a binary string.</td>
                <td>SELECT lastname, units, BINARY(BIN(units)) AS binary_units FROM student_data;</td>
                <td><a href="MySQL Advanced functions/binary_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CASE()</td>
                <td>Goes through conditions and return a value when the first condition is met.</td>
                <td>SELECT lastname, units, CASE WHEN units > 19 THEN 'High' ELSE 'Low' END AS unit_category FROM student_data;</td>
                <td><a href="MySQL Advanced functions/case_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CAST()</td>
                <td>Converts a value (of any type) into a specified datatype.</td>
                <td>SELECT lastname, units, CAST(units AS CHAR) AS units_char FROM student_data;</td>
                <td><a href="MySQL Advanced functions/cast_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>COALESCE()</td>
                <td>Returns the first non-null value in a list.</td>
                <td>SELECT lastname, program, COALESCE(units, grade, enrolled_datetime) AS non_null_value FROM student_data;</td>
                <td><a href="MySQL Advanced functions/coalesce_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CONNECTION_ID()</td>
                <td>Returns the unique connection ID for the current connection.</td>
                <td>SELECT CONNECTION_ID() AS connection_id;</td>
                <td><a href="MySQL Advanced functions/connection_id_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CONV()</td>
                <td>Converts a number from one numeric base system to another.</td>
                <td>SELECT lastname, units, CONV(units, 10, 2) AS binary_value FROM student_data;</td>
                <td><a href="MySQL Advanced functions/conv_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CONVERT()</td>
                <td>Converts a value into the specified datatype or character set.</td>
                <td>SELECT lastname, CONVERT(units, CHAR) AS units_char FROM student_data;</td>
                <td><a href="MySQL Advanced functions/convert_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>CURRENT_USER()</td>
                <td>Returns the user name and host name for the MySQL account that the server used to authenticate the current client.</td>
                <td>SELECT CURRENT_USER() AS cur_user;</td>
                <td><a href="MySQL Advanced functions/current_user_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>DATABASE()</td>
                <td>Returns the name of the current database.</td>
                <td>SELECT DATABASE() AS current_database;</td>
                <td><a href="MySQL Advanced functions/database_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>IF()</td>
                <td>Returns a value if a condition is TRUE, or another value if a condition is FALSE.</td>
                <td>SELECT lastname, grade, IF(grade > 80, 'Pass', 'Fail') AS result FROM student_data;</td>
                <td><a href="MySQL Advanced functions/if_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>IFNULL()</td>
                <td>Return a specified value if the expression is NULL, otherwise return the expression.</td>
                <td>SELECT lastname, IFNULL(units, 0) AS num_of_units FROM student_data;</td>
                <td><a href="MySQL Advanced functions/ifnull_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>ISNULL()</td>
                <td>Returns 1 or 0 depending on whether an expression is NULL</td>
                <td>SELECT lastname, ISNULL(units) AS is_units_null FROM student_data;</td>
                <td><a href="MySQL Advanced functions/isnull_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>LAST_INSERT_ID()</td>
                <td>Returns the AUTO_INCREMENT id of the last row that has been inserted in a table.</td>
                <td>SELECT firstname, LAST_INSERT_ID(id) AS last_inserted_id FROM student_data;</td>
                <td><a href="MySQL Advanced functions/last_insert_id_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>NULLIF()</td>
                <td>Compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned.</td>
                <td>SELECT lastname, units, NULLIF(units, 2) AS nullif_units FROM student_data;</td>
                <td><a href="MySQL Advanced functions/nullif_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SESSION_USER()</td>
                <td>Returns the current MySQL user name and host name.</td>
                <td>SELECT SESSION_USER() AS session_user;</td>
                <td><a href="MySQL Advanced functions/session_user_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>SYSTEM_USER()</td>
                <td>Returns the current MySQL user name and host name.</td>
                <td>SELECT SYSTEM_USER() AS system_user;</td>
                <td><a href="MySQL Advanced functions/system_user_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>USER()</td>
                <td>Returns the current MySQL user name and host name.</td>
                <td>SELECT USER() AS cur_user;</td>
                <td><a href="MySQL Advanced functions/user_output.php">View Output</a></td>
            </tr>
            <tr>
                <td>VERSION()</td>
                <td>Returns the current version of the MySQL database.</td>
                <td>SELECT VERSION() AS mysql_version;</td>
                <td><a href="MySQL Advanced functions/version_output.php">View Output</a></td>
            </tr>
        </table>
    </body>
</html>