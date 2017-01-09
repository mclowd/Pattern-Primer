<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>2013 Pattern Primer</title>
<link rel="stylesheet" href="style.css">
<style>
body {
    padding: 40px;
}
.pattern {
    clear: both;
    overflow: hidden;
    border: 1px solid #ccc;
    padding-top: 20px;
    margin: 20px 0;
    background-color: #fff;
}
.pattern .patternDisplay {
    width: 65%;
    float: left;
}
.pattern .patternSource {
    width: 30%;
    float: right;
}
.pattern .patternSource textarea {
    width: 90%;
}
</style>
</head>
<body>
<h1>Mclowd 2013 Pattern Library</h1>
<p>This library contains snippets of code used in the Mclowd Platform, to demonstrate how they should be written in HTML, and how that HTML is styled.<br>
Repo is at <a href="https://github.com/mclowd/Pattern-Primer">https://github.com/mclowd/Pattern-Primer</a></p>
<p><a href="2016-index.php">2016 New Style (login page styling)</a> <a href="2017-index.php">2017 Responsive</a>
<?php
$files = array();
$handle=opendir('patterns');
while (false !== ($file = readdir($handle))):
    if(substr($file, -5) == '.html'):
        $files[] = $file;
    endif;
endwhile;
sort($files);
foreach ($files as $file):
    echo '<div class="pattern">';
    echo '<div class="patternDisplay">';
    include('patterns/'.$file);
    echo '</div>';
    echo '<div class="patternSource">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('patterns/'.$file));
    echo '</textarea>';
    echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>

</body>
</html>
