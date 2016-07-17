<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>Thickness</strong></td>
            <td><strong>Fillfactor</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($corematerials as $corematerial): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$corematerial["name"]."</td>" ?>
            <?= "<td>".$corematerial["thickness"]."</td>" ?>
            <?= "<td>".$corematerial["fillfactor"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>