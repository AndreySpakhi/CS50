<form action="calculation.php" method="post">
<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Number of phases</strong></td>
            <td><strong>Number of sides</strong></td>
            <td><strong>Rated power</strong></td>
            <td><strong>Frequency</strong></td>
            <td><strong>Type of cooling system</strong></td>
        </tr>
    </thead>
    
    <tbody>
            <td><input type="text" name="phases"></td>
            <td><input type="text" name="voltagesides"></td>
            <td><input type="text" name="power"></td>
            <td><input type="text" name="frequency"></td>
            <td><input type="text" name="coolingtype"></td>

    </tbody>
</table>
<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Core type</strong></td>
            <td><strong>Material</strong></td>
            <td><strong>Diameter horizontal part</strong></td>
            <td><strong>Diameter vertical part</strong></td>
        </tr>
    </thead>
    
    <tbody>
            <td><input type="text" name="coretype" list="coretype_list"></td>
            <td><input type="text" name="material"></td>
            <td><input type="text" name="h_dim"></td>
            <td><input type="text" name="v_dim"></td>

    </tbody>
</table>
<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>HV windings type</strong></td>
            <td><strong>MV windings type</strong></td>
            <td><strong>LV windings type</strong></td>
        </tr>
    </thead>
    
    <tbody>
            <td><input type="text" name="hv_windingstype"></td>
            <td><input type="text" name="mv_windingstype"></td>
            <td><input type="text" name="lv_windingstype"></td>
    </tbody>
</table>
            <input type="submit" value="Calculate">
<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Core mass</strong></td>
        </tr>
    </thead>
    
    <tbody>
            <td><input type="text" name="coremass"></td>
    </tbody>
</table>
<datalist id="coretype_list">
  <option>MS N1</option>
  <option>MS N2</option>
  <option>MS N3</option>
  <option>MS N4</option>
</datalist>


</form>