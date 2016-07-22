<iframe name = "iframe1" style="position: absolute; left: -9999px;"></iframe>
<form action="calculation.php" method="post" target="iframe1">
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
            <td><select name="phases">
                    <option value="phases1">1</option>
                    <option value="phases2">3</option>
                </select>    
            </td>
            <td><select name="voltagesides">
                    <option value="voltagesides1">2</option>
                    <option value="voltagesides2">3</option>                
                </select>
            </td>
            <td><input type="text" name="power"></td>
            <td><select name="frequency">
                    <option value="frequency1">50</option>
                    <option value="frequency2">60</option>                
                </select>                
            </td>
            <td><select name="coolingtype">
                    <option value="cs1">ONAN</option>
                    <option value="cs2">ONAF</option>
                    <option value="cs3">OFAF</option>
                    <option value="cs4">OFAN</option>
            </select>            
            </td>

    </tbody>
</table>
<table class="table table-striped">

    <thead>
        <tr>
            <td><strong>Core type</strong></td>
            <td><strong>Material</strong></td>
            <td><strong>Thickness</strong></td>
            <td><strong>Diameter horizontal part</strong></td>
            <td><strong>Diameter vertical part</strong></td>
        </tr>
    </thead>
    
    <tbody>
            <td><input type="text" name="coretype"></td>
            <td><input type="text" name="material"></td>
            <td><input type="text" name="thickness"></td>
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
            <td><input type="text" name="coremass" value = "<?php echo $_SESSION["Mass"]; ?>"></td>
    </tbody>
</table>

</form>