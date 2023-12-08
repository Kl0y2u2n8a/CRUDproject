<select name="pposition">
    <option value="">-- select one --</option>
    
    <option value="SP" <?php echo ($row['position'] == "SP")?"selected":"" ?>>Starting Pitcher (SP)</option>
    <option value="RP" <?php echo ($row['position'] == "RP")?"selected":"" ?>>Relief Pitcher (RP)</option>
    <option value="CP" <?php echo ($row['position'] == "CP")?"selected":"" ?>>Closing Pitcher (CP)</option>
    <option value="C" <?php echo ($row['position'] == "C")?"selected":"" ?>>Catcher (C)</option>
    <option value="1B" <?php echo ($row['position'] == "1B")?"selected":"" ?>>First Baseman (1B)</option>
    <option value="2B" <?php echo ($row['position'] == "2B")?"selected":"" ?>>Second Baseman (2B)</option>
    <option value="3B" <?php echo ($row['position'] == "3B")?"selected":"" ?>>Third Baseman (3B)</option>
    <option value="SS" <?php echo ($row['position'] == "SS")?"selected":"" ?>>Shortstop (SS)</option>
    <option value="LF" <?php echo ($row['position'] == "LF")?"selected":"" ?>>Left Fielder (LF)</option>
    <option value="CF" <?php echo ($row['position'] == "CF")?"selected":"" ?>>Center Fielder (CF)</option>
    <option value="RF" <?php echo ($row['position'] == "RF")?"selected":"" ?>>Right Fielder (RF)</option>
    <option value="DH" <?php echo ($row['position'] == "DH")?"selected":"" ?>>Designated Hitter (DH)</option>
    <option value="Coach" <?php echo ($row['position'] == "Coach")?"selected":"" ?>>Coach</option>

</select>

