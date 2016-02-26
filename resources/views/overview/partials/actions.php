    <div class="actions-wrapper">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form method="GET" action="">
                    Starting Date : <input type="date" name="date" id="date" value="<?php if(isset($date)){ echo $date; } ?>" />
                    <input type="submit" name="setDate" value="Go"/>
                </form>

                <h1>Starting Date: <?php $date = $report->getStartingDate(); echo $date; ?> </h1>
                <?php $month = $report->getMonth(); ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <Form Name="form1" Method="GET" ACTION="">
                    <input type="submit" name="submitoverview" value="Switch View">
                </Form>
            </div>
        </div>
    </div>