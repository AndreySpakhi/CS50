<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Description</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($windingtypes as $windingtype): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$windingtype["description"]."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>

    </tbody>
</table>