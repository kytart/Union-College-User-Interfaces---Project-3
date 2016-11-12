<div class="screen">
	<form name="datatelform" method="post" autocomplete="OFF" action="">
		<div class="mainPanel">
			<tr>
				<td colspan="2">
					<div class="vertical">
						<table class="layout" summary="This panel contains controls that are vertically  aligned.">
							<tr>
								<td colspan="2">
									<div class="envisionWindow" id="GROUP_Grp_LIST_VAR2">
										<input type="hidden" value="LIST.VAR2" name="LIST.VAR2_CONTROLLER"><input type="hidden" value="LIST.VAR2*LIST.VAR3*LIST.VAR4*LIST.VAR5" name="LIST.VAR2_MEMBERS">
										<table summary="Express Registration">
											<tr>
												<th class="groupTitle" colspan="4">Express Registration</th>
											</tr>
											<tr>
												<th class="windowIdx"></th>
												<th class="Grp_LIST_VAR2 left"><input type="hidden" name="LIST.VAR3_MAX" value="10">Course</th>
												<th class="Grp_LIST_VAR2 left"><input type="hidden" name="LIST.VAR5_MAX" value="10">Term</th>
											</tr>
											<?php for ($i = 1; $i <= $linesCount; $i++) { ?>
												<tr>
													<td class="windowIdx"><?= $i ?></td>
													<td class=" LIST_VAR3 left <?php if ($i % 2 === 0) { ?>evenrow<?php } else { ?>oddrow<?php } ?>">
														<div>
															<label class="hidden" for="LIST_VAR3_<?= $i ?>"></label><select id="LIST_VAR3_<?= $i ?>" name="LIST.VAR3_<?= $i ?>">
																<option value=""></option>

																<?php foreach ($departments as $depCode => $depLabel) { ?>
																	<optgroup label="<?= $depLabel ?>">
																		<?php foreach ($courses[$depCode] as $courseCode => $courseLabel) { ?>
																			<option value="<?= $courseCode ?>" <?php if (isset($values[$i]) && $values[$i]['course'] === $courseCode) { ?>selected="selected"<?php } ?>><?= $courseCode ?> <?= $courseLabel ?></option>
																		<?php } ?>
																	</optgroup>
																<?php } ?>
															</select>
														</div>
													</td>
													<td class=" LIST_VAR5 left <?php if ($i % 2 === 0) { ?>evenrow<?php } else { ?>oddrow<?php } ?>">
														<div>
															<label class="hidden" for="LIST_VAR5_<?= $i ?>"></label><select name="LIST.VAR5_<?= $i ?>" id="LIST_VAR5_<?= $i ?>">
																<option value=""></option>
																<option value="17/WI" <?php if (isset($values[$i]) && $values[$i]['term'] === '17/WI') { ?>selected="selected"<?php } ?>>17/WI Winter
																	Term 2016-17
																</option>
															</select>
														</div>
													</td>
												</tr>
											<?php } ?>
										</table>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</div>
		<div class="submit">
			<input type="submit" name="SUBMIT2" value="SUBMIT" class="shortButton" accesskey="S">
		</div>
	</form>
</div>
