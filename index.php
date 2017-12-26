<!DOCTYPE html>
<html>
    <head>
        <title>Carbon Sequestration -- Matzek</title>
    </head>
    <body>
        <form id="carbon-form" name="carbon-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <label>State: </label><input id="state" name="state" class="textbox" type="text" value="California"/><br />
            <label>County: </label><input id="county" name="county" class="textbox" type="text" /><br />
            <label>City: </label><input id="city" name="city" class="textbox" type="text" /><br />
            <label>Zip Code: </label><input id="zip" name="zip" class="textbox" pattern="/\d+{5}/" type="text" /><br />
            <label>Forest Type: </label><br />
            <select id="foresttype" class="dropdown">
                <option id="ft0" name="foresttype[]" value="0">Select a Forest Type</option>
                <option id="ft1" name="foresttype[]" value="1">Forest 1</option>
                <option id="ft2" name="foresttype[]" value="2">Forest 2</option>
                <option id="ft3" name="foresttype[]" value="3">Forest 3</option>
                <option id="ft4" name="foresttype[]" value="4">Forest 4</option>
                <option id="ft5" name="foresttype[]" value="5">Forest 5</option>
            </select><br />
            <label>Add Tree Species</label><br />
            <input id="ts0" name="treespec[]" type="checkbox" value="0"/><label>  Oak</label><input id="tst0" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts1" name="treespec[]" type="checkbox" value="1"/><label>  Birch</label><input id="tst1" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts2" name="treespec[]" type="checkbox" value="2"/><label>  Maple</label><input id="tst2" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts3" name="treespec[]" type="checkbox" value="3"/><label>  Spruce</label><input id="tst3" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts4" name="treespec[]" type="checkbox" value="4"/><label>  Acacia</label><input id="tst4" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts5" name="treespec[]" type="checkbox" value="5"/><label>  Willow</label><input id="tst5" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts6" name="treespec[]" type="checkbox" value="6"/><label>  Pine</label><input id="tst6" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <input id="ts7" name="treespec[]" type="checkbox" value="7"/><label>  Redwood</label><input id="tst7" name="treespec0" class="textbox textcheckbox" type="text" pattern="/\d+{2}.\d+{5}/" /><br />
            <label>Acreage: </label><input id="acreage" name="acreage" class="textbox" pattern="/\d+{3}/" type="text" /><br />
            <input id="submit" name="submit" type="submit" value="Submit" />
        </form>
    </body>
</html>
