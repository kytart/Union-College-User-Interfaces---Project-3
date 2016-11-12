<div class="screen">
	<table>
		<tr>
			<th>Department</th>
			<th>Course</th>
			<th>Term</th>
		</tr>

		<?php foreach ($values as $item) { ?>
			<tr>
				<td><?= $departments[$item['department']] ?></td>
				<td><?= $item['course'] . ' ' . $courses[$item['department']][$item['course']] ?></td>
				<td><?= $item['term'] ?></td>
			</tr>
		<?php } ?>
	</table>
</div>