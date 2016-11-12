<?php

$departments = require __DIR__ . '/departments.php';
$courses     = require __DIR__ . '/courses.php';
$view        = 'form_a';

$linesCount = 10;
$values     = [];
$errors     = [];

if (isset($_POST['SUBMIT2'])) {
	for ($i = 1; $i <= $linesCount; $i++) {
		$department = $_POST['LIST_VAR2_' . $i];
		$course     = $_POST['LIST_VAR3_' . $i];
		$term       = $_POST['LIST_VAR5_' . $i];

		if ($department !== '' || $course !== '') {
			if ($department === '' || $course === '') {
				$errors[] = 'Row ' . $i . ' - Please enter a subject AND a course';
			} else {
				$term = '17/WI';
			}
		} else {
			continue;
		}

		$values[$i] = [
			'department' => $department,
			'course'     => $course,
			'term'       => $term,
		];
	}
}

if (count($values) > 0 && count($errors) === 0) {
	$view = 'success';
}

require __DIR__ . '/view/form_base.php';
