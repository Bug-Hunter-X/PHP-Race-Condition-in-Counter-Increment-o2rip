# PHP Race Condition Example

This repository demonstrates a common race condition in PHP that can occur when multiple processes or threads access and modify a shared variable concurrently.

## The Problem

The `bug.php` file contains code that attempts to increment a counter up to 10. However, due to the lack of atomicity in the increment operation, the final counter value might be less than 10 if multiple processes or threads are running concurrently.

## The Solution

The `bugSolution.php` file provides a solution to the race condition by using appropriate synchronization mechanisms to ensure that the counter is incremented atomically.  This prevents the race condition and ensures that the counter reaches the expected value.

## How to run

Run the `bug.php` code in multiple processes simultaneously (e.g. using multiple terminal windows) to observe the race condition.  Compare this to the corrected code in `bugSolution.php`. 