
<table class="table table-striped">
    <thead>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>User Name</strong></td>
            <td><strong>Action</strong></td>
            <td><strong>DATE/TIME</strong></td>

        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($actions as $action) {
        print("<tr>"); 
        print("<td>{$action["id"]}</td>"); 
        print("<td>{$action["user"]}</td>"); 
        print("<td>{$action["action"]}</td>");
        print("<td>{$action["date"]}</td>");
    }
    ?>
    </tbody>

</table>