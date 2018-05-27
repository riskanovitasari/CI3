<script type="text/javascript">
    $(document).ready(function() {
        $('#dt-basic').DataTable();
    } );
</script>
    <br><br><br>

    <header class=" text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Data Tables</strong>
            </h3><hr>
          </div>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>id_blog</th>
                            <th>judul_blog</th>
                             <th>isi_blog</th>
                            <th>tggl_blog</th>
                            <th>authot_blog</th>
                            <th>email_author</th>
                            <th>alamat_author</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_blog ?></td>
                            <td><?php echo $d->judul_blog ?></td>
                            <td><?php echo $d->isi_blog ?></td>
                            <td><?php echo $d->tggl_blog ?></td>
                            <td><?php echo $d->author_blog ?></td>
                            <td><?php echo $d->email_author ?></td>
                            <td><?php echo $d->alamat_blog ?></td>
                            <td>
                                <a href="<?php echo base_url('/blog/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

  </body>
</html>