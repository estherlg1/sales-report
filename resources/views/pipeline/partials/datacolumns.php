<div class="Data-Columns-Wrapper">
        <?php while ($obj = $pldata->fetch_object()): ?>

            <?php var_dump($obj->name); ?><br>
            <?php var_dump($obj->amount); ?><br>
            <?php var_dump($obj->probability); ?><br>
            <?php var_dump($obj->sales_stage); ?><br>

        <?php endwhile; ?>
</div>