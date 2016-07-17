<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Description</strong></td>
            <td><strong>H section</strong></td>
            <td><strong>V section</strong></td>
            <td><strong>G section</strong></td>
            <td><strong>T section</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($coretypes as $coretype): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$coretype["description"]."</td>" ?>
            <?= "<td>".$coretype["h_section"]."</td>" ?>
            <?= "<td>".$coretype["v_section"]."</td>" ?>
            <?= "<td>".$coretype["g_section"]."</td>" ?>
            <?= "<td>".$coretype["t_section"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>