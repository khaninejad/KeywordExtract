<?php
require_once("keyword.php");
$string="

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a lectus neque. Duis nec quam quis odio cursus venenatis. Sed vulputate, nunc a mattis blandit, velit dui ultrices urna, ut laoreet massa nisl ut libero. Ut eros quam, consequat convallis eros nec, faucibus fermentum neque. Proin pharetra lobortis risus sed ultricies. In id placerat neque. Aenean lobortis sodales augue a faucibus. Cras commodo fringilla metus nec feugiat. Mauris laoreet venenatis elit, a pharetra justo consequat elementum. In congue aliquet elit sed faucibus. Nullam tristique lectus molestie est ultrices, vel condimentum magna laoreet. Curabitur vitae est a justo tincidunt fermentum. Sed nibh tellus, venenatis quis euismod quis, pulvinar in massa. Nulla molestie turpis ac imperdiet pulvinar. Morbi eget ullamcorper neque.

Pellentesque ullamcorper, magna at finibus sodales, sem lectus rutrum neque, vitae imperdiet arcu justo eget metus. Phasellus urna est, sollicitudin ac nibh non, sodales porttitor turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus nec placerat magna. Integer a magna dictum, dignissim tortor in, ornare turpis. Phasellus eleifend, nulla ac pharetra egestas, metus dolor tincidunt arcu, nec gravida lacus magna eget erat. Ut sed mattis leo. Vestibulum felis dolor, varius id ligula ac, consequat sagittis ipsum. Ut at nisi ut ex rhoncus viverra sit amet non urna. Mauris faucibus ornare efficitur. Ut a metus a nulla tincidunt accumsan. Quisque sagittis eget lorem non varius.

Nullam ac aliquam nulla. Suspendisse varius vestibulum dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eleifend eros a ante congue, sed mollis mauris pharetra. Phasellus sed diam sed lorem congue vehicula. Nulla facilisi. Ut suscipit ligula pharetra est convallis, vitae imperdiet enim sollicitudin. Nam eu aliquam quam, vel sollicitudin diam.

Morbi feugiat, odio vel auctor tristique, augue nisi interdum ligula, id dignissim purus eros vel lectus. Nullam malesuada lorem nisl, eget pellentesque metus laoreet eget. Pellentesque auctor volutpat laoreet. Donec eget imperdiet lacus. Mauris sit amet eros sed lorem fringilla eleifend. Praesent mattis vel ligula sit amet rhoncus. Quisque ut quam nec felis varius dapibus. Aliquam interdum, lacus sit amet condimentum ultricies, ante justo tincidunt enim, vel venenatis turpis urna a nisl. Vivamus malesuada enim egestas orci venenatis, in convallis dui vulputate. Donec lobortis placerat erat id efficitur. Vestibulum egestas euismod efficitur. Sed eu facilisis metus. Nunc sapien orci, vehicula quis cursus et, vulputate ac ante.

Sed placerat iaculis ligula, id efficitur dolor dictum sed. Nam consectetur bibendum fringilla. Sed pharetra ultrices risus, non sodales orci pretium eu. Proin eget posuere nisl. Donec non arcu molestie, vulputate nibh sit amet, efficitur metus. Duis id porttitor tortor. In hac habitasse platea dictumst. Nulla nec ultrices velit. Pellentesque placerat urna massa, non efficitur odio molestie vitae. Nullam interdum sodales fermentum. Morbi tempus nisl diam, vitae volutpat dolor egestas ut. Donec nec vehicula nulla, non tincidunt sem. Pellentesque rhoncus gravida turpis, sed volutpat diam venenatis a. ";
$keyword=new KeywordGenerate(trim(strip_tags($string)));
$rate1=$keyword->rateKeyword(1);
$rate2=$keyword->rateKeyword(2);
$level1=$keyword->levelTwo($rate1);

echo "<pre>";
print_r($rate1);
print_r($rate2);
print_r($level1);
echo "</pre>"
?>