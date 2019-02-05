 <?php
include('core/connect.php');

$sql5 = "SELECT * FROM filestb ";
$query5 = mysqli_query($con, $sql5);

?>



                    <?php
                    while ($rw5 = mysqli_fetch_array($query5))
                    {
                  ?>
                   
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon media_w">
                            <h6>Media</h6>
                            <h2>10GB <small class="info">of 1Tb</small></h2>                            
                            <div class="progress m-t-10">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
           <?php
                }
                ?>