<?php
if (!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
include 'includes/header.php'
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Save Student Info</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($message))
                            {
                                ?>
                                <h6 class="text-center text-success"><?php echo $message; ?></h6>
                                <?php
                            }
                            ?>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">E-mail</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Phone Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="studentInfoBtn" class="form-control btn-success" value="Save Student Info" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php'
?>