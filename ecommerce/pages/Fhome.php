<?php include 'pages/header.php'; ?>

<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-header">File Upload</div>
          <div class="card-body">
            <form action="action.php" method="POST" enctype="multipart/form-data">

              <div class="row mb-3">
                <label for="" class="col-md-3">File Name: </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>

              <div class="row">
                <label for="" class="col-md-3">Image:</label>
                <div class="col-md-9">
                  <input type="file" class="form-control" name="image_f">
                </div>
              </div>

              <div class="row mt-3">
                <label for="" class="col-md-3"></label>
                <div class="col-md-9">
                  <input type="submit" class="btn btn-outline-success btn-sm" name="uploadBtn" value="Upload">
                </div>
              </div>
            </form>
          </div>
        </div>

        <hr>

        <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <td>Uploaded File Name</td>
              <td><?php echo $result['name']; ?></td>
            </tr>
            <tr>
              <td>Uploaded Image</td>
              <td>
                <img src="<?php echo $result['image_path']; ?>" alt="" width="200" height="200" class="img-thumbnail">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php include 'pages/footer.php'; ?>