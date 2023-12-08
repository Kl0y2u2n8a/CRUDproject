<select name="teams">
    <option value="">-- select one --</option>

    <option value="" disabled>---- MLB ----</option>
    <option value="Arizona Diamondbacks" <?php echo ($row['team'] == "Arizona Diamondbacks")?"selected":"" ?>>Arizona Diamondbacks</option>
    <option value="Atlanta Braves" <?php echo ($row['team'] == "Atlanta Braves")?"selected":"" ?>>Atlanta Braves</option>
    <option value="Baltimore Orioles" <?php echo ($row['team'] == "Baltimore Orioles")?"selected":"" ?>>Baltimore Orioles</option>
    <option value="Boston Red Sox" <?php echo ($row['team'] == "Boston Red Sox")?"selected":"" ?>>Boston Red Sox</option>
    <option value="Chicago Cubs" <?php echo ($row['team'] == "Chicago Cubs")?"selected":"" ?>>Chicago Cubs</option>
    <option value="Chicago White Sox" <?php echo ($row['team'] == "Chicago White Sox")?"selected":"" ?>>Chicago White Sox</option>
    <option value="Cincinnati Reds" <?php echo ($row['team'] == "Cincinnati Reds")?"selected":"" ?>>Cincinnati Reds</option>
    <option value="Cleveland Guardians" <?php echo ($row['team'] == "Cleveland Guardians")?"selected":"" ?>>Cleveland Guardians</option>
    <option value="Colorado Rockies" <?php echo ($row['team'] == "Colorado Rockies")?"selected":"" ?>>Colorado Rockies</option>
    <option value="Detroit Tigers" <?php echo ($row['team'] == "Detroit Tigers")?"selected":"" ?>>Detroit Tigers</option>
    <option value="Houston Astros" <?php echo ($row['team'] == "Houston Astros")?"selected":"" ?>>Houston Astros</option>
    <option value="Kansas City Royals" <?php echo ($row['team'] == "Kansas City Royals")?"selected":"" ?>>Kansas City Royals</option>
    <option value="Los Angeles Angels" <?php echo ($row['team'] == "Los Angeles Angels")?"selected":"" ?>>Los Angeles Angels</option>
    <option value="Los Angeles Dodgers" <?php echo ($row['team'] == "Los Angeles Dodgers")?"selected":"" ?>>Los Angeles Dodgers</option>
    <option value="Miami Marlins" <?php echo ($row['team'] == "Miami Marlins")?"selected":"" ?>>Miami Marlins</option>
    <option value="Milwaukee Brewers" <?php echo ($row['team'] == "Milwaukee Brewers")?"selected":"" ?>>Milwaukee Brewers</option>
    <option value="Minnesota Twins" <?php echo ($row['team'] == "Minnesota Twins")?"selected":"" ?>>Minnesota Twins</option>
    <option value="New York Mets" <?php echo ($row['team'] == "New York Mets")?"selected":"" ?>>New York Mets</option>
    <option value="New York Yankees" <?php echo ($row['team'] == "New York Yankees")?"selected":"" ?>>New York Yankees</option>
    <option value="Oakland Athletics" <?php echo ($row['team'] == "Oakland Athletics")?"selected":"" ?>>Oakland Athletics</option>
    <option value="Philadelphia Phillies" <?php echo ($row['team'] == "Philadelphia Phillies")?"selected":"" ?>>Philadelphia Phillies</option>
    <option value="Pittsburgh Pirates" <?php echo ($row['team'] == "Pittsburgh Pirates")?"selected":"" ?>>Pittsburgh Pirates</option>
    <option value="San Diego Padres" <?php echo ($row['team'] == "San Diego Padres")?"selected":"" ?>>San Diego Padres</option>
    <option value="San Francisco Giants" <?php echo ($row['team'] == "San Francisco Giants")?"selected":"" ?>>San Francisco Giants</option>
    <option value="Seattle Mariners" <?php echo ($row['team'] == "Seattle Mariners")?"selected":"" ?>>Seattle Mariners</option>
    <option value="St. Louis Cardinals" <?php echo ($row['team'] == "St. Louis Cardinals")?"selected":"" ?>>St. Louis Cardinals</option>
    <option value="Tampa Bay Rays" <?php echo ($row['team'] == "Tampa Bay Rays")?"selected":"" ?>>Tampa Bay Rays</option>
    <option value="Texas Rangers" <?php echo ($row['team'] == "Texas Rangers")?"selected":"" ?>>Texas Rangers</option>
    <option value="Toronto Blue Jays" <?php echo ($row['team'] == "Toronto Blue Jays")?"selected":"" ?>>Toronto Blue Jays</option>
    <option value="Washington Nationals" <?php echo ($row['team'] == "Washington Nationals")?"selected":"" ?>>Washington Nationals</option>

    <option value="" disabled></option>
    <option value="" disabled>-- NPB Central League --</option>
    <option value="Tokyo Yakult Swallows" <?php echo ($row['team'] == "Tokyo Yakult Swallows")?"selected":"" ?>>Tokyo Yakult Swallows</option>
    <option value="YOKOHAMA DeNA BAYSTARS" <?php echo ($row['team'] == "YOKOHAMA DeNA BAYSTARS")?"selected":"" ?>>YOKOHAMA DeNA BAYSTARS</option>
    <option value="Hanshin Tigers" <?php echo ($row['team'] == "Hanshin Tigers")?"selected":"" ?>>Hanshin Tigers</option>
    <option value="Yomiuri Giants" <?php echo ($row['team'] == "Yomiuri Giants")?"selected":"" ?>>Yomiuri Giants</option>
    <option value="Hiroshima Toyo Carp" <?php echo ($row['team'] == "Hiroshima Toyo Carp")?"selected":"" ?>>Hiroshima Toyo Carp</option>
    <option value="Chunichi Dragons" <?php echo ($row['team'] == "Chunichi Dragons")?"selected":"" ?>>Chunichi Dragons</option>

    <option value="" disabled>---- NPB Pacific League ----</option>
    <option value="ORIX Buffaloes" <?php echo ($row['team'] == "ORIX Buffaloes")?"selected":"" ?>>ORIX Buffaloes</option>
    <option value="Fukuoka SoftBank Hawks" <?php echo ($row['team'] == "Fukuoka SoftBank Hawks")?"selected":"" ?>>Fukuoka SoftBank Hawks</option>
    <option value="Saitama Seibu Lions" <?php echo ($row['team'] == "Saitama Seibu Lions")?"selected":"" ?>>Saitama Seibu Lions</option>
    <option value="Tohoku Rakuten Golden Eagles" <?php echo ($row['team'] == "Tohoku Rakuten Golden Eagles")?"selected":"" ?>>Tohoku Rakuten Golden Eagles</option>
    <option value="Chiba Lotte Marines" <?php echo ($row['team'] == "Chiba Lotte Marines")?"selected":"" ?>>Chiba Lotte Marines</option>
    <option value="Hokkaido Nippon-Ham Fighters" <?php echo ($row['team'] == "Hokkaido Nippon-Ham Fighters")?"selected":"" ?>>Hokkaido Nippon-Ham Fighters</option>
    
    <option value="" disabled>---- CPBL ----</option>
    <option value="CTBC Brothers" <?php echo ($row['team'] == "CTBC Brothers")?"selected":"" ?>>CTBC Brothers</option>
    <option value="Fubon Guardians" <?php echo ($row['team'] == "Fubon Guardians")?"selected":"" ?>>Fubon Guardians</option>
    <option value="Rakuten Monkeys" <?php echo ($row['team'] == "Rakuten Monkeys")?"selected":"" ?>>Rakuten Monkeys</option>
    <option value="Uni-President 7-Eleven Lions" <?php echo ($row['team'] == "Uni-President 7-Eleven Lions")?"selected":"" ?>>Uni-President 7-Eleven Lions</option>
    <option value="Wei Chuan Dragons" <?php echo ($row['team'] == "Wei Chuan Dragons")?"selected":"" ?>>Wei Chuan Dragons</option>
    <option value="TSG Hawks" <?php echo ($row['team'] == "TSG Hawks")?"selected":"" ?>>TSG Hawks</option>

    <option value="" disabled>--------</option>
    <option value="Free Agents">Free Agents</option>


</select>