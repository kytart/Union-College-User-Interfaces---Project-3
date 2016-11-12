<?php

$departments = require __DIR__ . '/departments.php';
$courses     = require __DIR__ . '/courses.php';
$view        = 'form_b';

$linesCount = 10;
$values     = [];
$errors     = [];

if (isset($_POST['SUBMIT2'])) {
	for ($i = 1; $i <= $linesCount; $i++) {
		$department = null;
		$course     = $_POST['LIST_VAR3_' . $i];
		$term       = $_POST['LIST_VAR5_' . $i];

		if ($course === '') {
			continue;
		} else {
			$term = '17/WI';
		}

		foreach ($courses as $depCode => $courseList) {
			foreach ($courseList as $courseCode => $courseLabel) {
				if ($course === $courseCode) {
					$department = $depCode;
					break(2);
				}
			}
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
