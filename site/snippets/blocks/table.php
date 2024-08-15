<?php 
$table = $block->table()->toTable();
if (!empty($table['headers']) && !empty($table['rows'])): ?>
  <table class="table table-bordered table-stripped">
    <thead>
      <tr>
        <?php foreach ($table['headers'] as $header): ?>
          <th scope="col"><?= $header ?></th>
        <?php endforeach ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($table['rows'] as $row): ?>
        <tr>
          <?php foreach ($row as $cell): ?>
            <td><?= $cell ?></td>
          <?php endforeach ?>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php endif ?>