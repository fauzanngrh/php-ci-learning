<div class="container">

<h3 class="mt-3"><?= $title ?></h3>
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url('quota/checkQuota') ?>" class="btn btn-primary">Check Leave Quota</a>
    </div>
</div>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Join Year</th>
      <th scope="col">Total Days</th>
      <th scope="col">Used Days</th>
    </tr>
  </thead>
  <?php foreach($leave_quota as $qts) :?>
  <tbody>
    <tr>
      <th scope="row"><?= $qts['id'] ?></th>
      <td><?= $qts['employee_id'] ?></td>
      <td><?= $qts['first_name'] ?></td>
      <td><?= $qts['last_name'] ?></td>
      <td><?= $qts['year'] ?></td>
      <td><?= $qts['total_days'] ?></td>
      <td><?= $qts['used_days'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>
