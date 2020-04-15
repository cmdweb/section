<?php

include "../src/Section.php";

Alcatraz\Components\Section\Section::start("Legenda");

echo "Minha legenda esta aqui";

Alcatraz\Components\Section\Section::end();

echo Alcatraz\Components\Section\Section::get("Legenda");