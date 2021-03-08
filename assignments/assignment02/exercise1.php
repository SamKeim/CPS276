<?
// write code here, use include in submission
$out = 4;
$in = 5;
?>
<ul>
    <? for ($i = 1; $i <= $out; $i++){ ?>
        <li><?=$i?>
        <ul>
            <? for ($j = 1; $j <= $in; $j++){?>
                <li><?=$j?>
            <?}?>            
        </ul>
    <? } ?>
</ul>