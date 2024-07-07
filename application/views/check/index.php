<div class="container">

<?php if($this->session->flashdata('flash')) : ?>

<div class="row mt-3">
  <div class="col-md-6">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Has been successfully</strong> <?= $this->session->flashdata('flash');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
  </div>
</div>

<?php endif; ?>

<h3 class="mt-3"><?= $title ?></h3>
<div class="container">
  <div class="row mt-3">
    <div class="col-md-4">
        <a href="<?= base_url('app/add_data') ?>" class="btn btn-primary">Add Employee</a>
    </div>
</div>
    </div>
  </div>
</div>
<div class="container"><table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee id</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Location</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php foreach($leave as $chck) :?>
  <tbody>
    <tr>
      <th scope="row"><?= $chck['id'] ?></th>
      <td><?= $chck['employee_id'] ?></td>
      <td><?= $chck['start_date'] ?></td>
      <td><?= $chck['end_date'] ?></td>
      <td><?= $chck['location'] ?></td>
      <td><?= $chck['status'] ?></td>
      <td>
        <a href="<?= base_url('app/delete/'.$chck['id'] ?? '')?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');">Delete</a>
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
        </div>
    </div>
</div>
