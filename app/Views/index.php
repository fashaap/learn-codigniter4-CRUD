<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <script>
    const showModal = () => {
      document.getElementById('showModal').style.display = 'block'

    }

    const closeModal = () => {
      document.getElementById('showModal').style.display = 'none'
    }
  </script>

  <!-- navbar -->
  <nav class="navbar bg-primary mb-5">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-light text-xl" href="#">TOKO MAKMUR SEJATI</a>
    </div>
  </nav>
  <section class="container border p-0">
    <div class="d-flex justify-content-between align-items-center bg-light p-3">
      <h2 class="mb-0">Daftar Barang</h2>
      <button type="button" onclick="showModal('add')" class="btn btn-warning rounded-0 fw-bold">Tambahkan +</button>
    </div>
    <div class="p-3">
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Gambar</th>
            <th>Deskripsi Barang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products->getResultArray() as $v): ?>
            <tr>
              <td>
                <?= $v['id']; ?>
              </td>
              <td>
                <?= $v['Nama_barang']; ?>
              </td>
              <td>
                <?= $v['Harga_barang']; ?>
              </td>
              <td>
                <img src="<?= $v['Gambar_barang']; ?>" alt="<?= $v['Nama_barang']; ?>" style="max-width: 100px;">

              </td>
              <td>
                <?= $v['Deskripsi_barang']; ?>
              </td>
              <td>
                <button type="button" onclick="showModal('edit', 1)" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" onclick="deleteItem(1)" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>


  <article class="modal bg-light  " id="showModal" tabindex="-1">
    <section class="modal-dialog modal-dialog-centered  ">
      <div class="modal-content rounded-0">
        <header class="modal-header">
          <h2 class="modal-title"> Barang</h2>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
            onclick="closeModal()"></button>
        </header>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputText" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputAnotherText" class="form-label">Harga Barang</label>
              <input type="text" class="form-control" id="exampleInputAnotherText">
            </div>

            <div class="mb-3">
              <label for="myFile" class="form-label">Gambar Barang</label>
              <input class="form-control mb-3" type="file" id="myFile" name="filename">
              <input type="text" class="form-control" placeholder="url gambar" id="exampleInputAnotherText">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
        </div>
        <footer class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
          <button type="button" class="btn btn-success">Submit</button>
        </footer>
      </div>
    </section>
  </article>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>