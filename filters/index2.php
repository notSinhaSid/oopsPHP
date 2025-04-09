<?php
// $testCase = "";

function replaceChar($info)
{
    return str_replace("gacha", "Honkai Star Rail", $info);
}

$info = "gacha game can be addicting but nevertheless gacha is fun too";

echo filter_var($info, FILTER_CALLBACK, array("options"=>"replaceChar"));

?>