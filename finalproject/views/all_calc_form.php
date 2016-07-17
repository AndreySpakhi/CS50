<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Number</strong></td>
            <td><strong>Country</strong></td>
            <td><strong>Transformer type</strong></td>
            <td><strong>Date</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($allcalculations as $allcalculation): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$allcalculation["id"]."</td>" ?>
            <?= "<td>".$allcalculation["number"]."</td>" ?>
            <?= "<td>".$allcalculation["country"]."</td>" ?>
            <?= "<td>".$allcalculation["transformertype"]."</td>" ?>
            <?= "<td>".$allcalculation["date"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>