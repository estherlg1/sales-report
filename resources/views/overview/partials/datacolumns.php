 <div class="Data-Columns-Wrapper">




        <?php 

        $i = 1;
        $month = $report->getMonth();
        $year = $report->getYear();
        while ($i <= 12)
        {
            // Create if statement if month = 12, increase year by 1, reset month to 1
            if($month == 12){
                $year++;
                $month = 1;
            }
            // Insert date if above
        	echo '<div class="col-md-2 col-lg-2">';
        	echo $i++;
            echo '</br>';
            echo 'Month :' . $month++;
            echo '</br>';
            echo 'Year :' . $year;
        	echo "</div>";

        }

        ?>



        <?php while ($obj = $data->fetch_object()): ?>
            <!-- <?php var_dump($obj->name); ?><br> -->
            <?php
                if($obj->name == 'Logo Design')
                {
                    var_dump($obj->name);
                }
             ?>

        <?php endwhile; ?>

</div>