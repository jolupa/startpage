<div class="card">
	<div class="card-header">
		<p class="card-header-title">Coses per fer:</p>
	</div>
	<div class="card-content">
		<?php if(isset($isempty)): ?>
			<p class="title has-text-centered">No tens res a fer!</p>
		<?php else: ?>
			<table class="table is-fullwidth is-hoverable is-borderless">
				<tbody>
					<?php foreach($todos as $todo): ?>
						<form action="<?= base_url('/todo/editordelete') ?>" method="post">
							<tr>
								<input type="hidden" name="id" value="<?= $todo->id ?>">
								<td>
									<?php if($todo->expired <= date('d-m-Y H:i:s')): ?>
										<p class="has-text-danger"><?= $todo->expired->humanize() ?></p>
									<?php else: ?>
										<p><?= $todo->expired->humanize(); ?></p>
									<?php endif; ?>
								</td>
								<td>
									<?php if($todo->done==1): ?>
										<p><strike><?= $todo->todo ?></strike></p>
									<?php else: ?>
										<p><?= $todo->todo ?></p>
									<?php endif; ?>
								</td>
								<td>
									<div class="field is-grouped is-grouped-centered">
										<div class="control">
											<button class="button" name="option" value="done">
												<span class="icon has-text-primary">
													<i class="fa-solid fa-check"></i>
												</span>
											</button>
										</div>
										<div class="control">
											<button class="button" name="option" value="delete">
												<span class="icon has-text-danger">
													<i class="fa-solid fa-trash"></i>
												</span>
											</button>
										</div>
									</div>
								</td>
							</tr>
						</form>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
		<hr>
		<form action="<?= base_url('/todo/new') ?>" method="post">
			<div class="field">
				<div class="control is-expanded">
					<textarea class="textarea" name="todo" rows="2"></textarea>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">Fins Quant temps tens?</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="datetime-local" name="expired" class="input">
						</div>
					</div>
					<div class="field">
						<div class="field is-grouped is-grouped-right">
							<div class="control">
								<button class="button" name="add" value="true">Cosa a fer nova!</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>