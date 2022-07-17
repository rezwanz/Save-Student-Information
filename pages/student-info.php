<?php
include 'includes/header.php'
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Student Information</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                </tr>
                                <?php
                                foreach ($students as $key => $student) {
                                ?>
                                <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $student['email'] ?></td>
                                    <td><?php echo $student['phone'] ?></td>
                                    <td>
                                        <img src="<?php echo $student['image'] ?>" alt="" style="height: 100px; width: 100px;">
                                    </td>
                                </tr>
                                    <?php
                                }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php'
?>