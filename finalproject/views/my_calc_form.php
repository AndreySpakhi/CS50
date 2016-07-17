<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Number</strong></td>
            <td><strong>Country</strong></td>
            <td><strong>Transformer type</strong></td>
            <td><strong>Date</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($mycalculations as $mycalculation): ?>
    
        <?= "<tr>" ?>
            
            <?= "<td>".$mycalculation["number"]."</td>" ?>
            <?= "<td>".$mycalculation["country"]."</td>" ?>
            <?= "<td>".$mycalculation["transformertype"]."</td>" ?>
            <?= "<td>".$mycalculation["date"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>