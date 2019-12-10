<?php
include dirname( __FILE__ ) . '/../baseFront.php';
checkLoggedIn();
$fidelities = $fidelityController->getFidelities();
$user       = $userController->findUserById( Config::getUserSession()->getId() );
$myfidelity   = $fidelityController->findFidelityById( $user->getFidelity() );
?>
<?php startblock( 'content' ) ?>
    <main class="app-conten container">
        <div class="app-title mt-15">
            <div>
                <h4><i class="fa fa-th-list"></i> List of Fidelity Cards</h4>
            </div>
        </div>
        <div class="container row">
            <div class="p-3">
				<?php
				if ( $myfidelity != null ) {
					echo 'You alread have a fidelity card';
				}
				?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php
							foreach ( $fidelities as $fidelity ) {
								?>
                                <tr>
                                    <td> <?php echo $fidelity["id"] ?> </td>
                                    <td> <?php echo $fidelity["name"] ?> </td>
                                    <td> <?php echo $fidelity["code"] ?> </td>
                                    <td> <?php echo $fidelity["value"] ?> %</td>
									<?php
									if ( $myfidelity == null ) {
										?>
                                        <td>
                                            <form class="mr-2" style="float: left;" action="add.php" method="post">
                                                <input type="hidden" value="<?PHP echo $fidelity['id']; ?>" name="id">
                                                <input type="submit" class="btn btn-info" value="Request">
                                            </form>
                                        </td>
										<?php
									} else {
										echo '<td></td>';
									}
									?>
                                </tr>
								<?php
							}
							?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php endblock() ?>