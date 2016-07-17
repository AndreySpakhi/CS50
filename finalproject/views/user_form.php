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
        <?php foreach ($calculations as $calculation): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$calculation["number"]."</td>" ?>
            <?= "<td>".$calculation["country"]."</td>" ?>
            <?= "<td>".$calculation["transformertype"]."</td>" ?>
            <?= "<td>".$calculation["date"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>