<form action="input_do.php" method="get">
    <div>
        <label for="firstName">Eesnimi</label>
        <input type="text" id="firstName" name="firstName">
        <!--name peab olema, muidu ei lähe info kuskile ja seda ei saa kätte!!!-->
    </div>
    <div>
        <label for="lastName">Perenimi</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="age">Vanus</label>
        <input type="number" id="age" name="age" min="0">
    </div>
    <div>
        <label for="height">Pikkus</label>
        <input type="number" id="height" name="height" min="0">
    </div>
    <div>
        <label for="weight">Kaal</label>
        <input type="number" id="weight" name="weight" min="0">
    </div>
    <input type="submit" value="saada">
</form>
<?php
