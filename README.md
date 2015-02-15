# KeywordExtract
This class used to analyze content and create top related keywords
# Usage
```require_once("keyword.php");
$keyword=new KeywordGenerate(trim(strip_tags("example paragraph")));
$rate1=$keyword->rateKeyword(1);
$rate2=$keyword->rateKeyword(2);
$level1=$keyword->levelTwo($rate1);

echo "<pre>";
print_r($rate1);
print_r($rate2);
print_r($level1);
echo "</pre>"
