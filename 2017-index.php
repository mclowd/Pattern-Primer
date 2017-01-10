<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>2017 Pattern Primer</title>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Signika:300,400,600">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
<link rel="stylesheet" href="newstyle.css">
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
.signika {
    font-family: 'Signika';
    font-weight: 300;
}
.opensans {
    font-family: 'Open Sans';
}
.inventory td {
    vertical-align: top;
}

.pt13 { font-size: 13pt; }
.pt16 { font-size: 16pt; }
.pt18 { font-size: 18pt; }
.pt24 { font-size: 24pt; }
.pt28 { font-size: 28pt; }
.pt31 { font-size: 31pt; }
.pt34 { font-size: 34pt; }
.pt35 { font-size: 35pt; }
.pt48 { font-size: 48pt; }
.pt55 { font-size: 55pt; }
.pt56 { font-size: 56pt; }

.px13 { font-size: 13px; }
.px16 { font-size: 16px; }
.px18 { font-size: 18px; }
.px24 { font-size: 24px; }
.px28 { font-size: 28px; }
.px31 { font-size: 31px; }
.px34 { font-size: 34px; }
.px35 { font-size: 35px; }
.px48 { font-size: 48px; }
.px55 { font-size: 55px; }
.px56 { font-size: 56px; }

.c {
    font-size: 24px;
    font-family: 'Open Sans';
}
.cdarkgrey { color: #333333; }
.cmedgrey1 { color: #474747; }
.cmedgrey2 { color: #484848; }
.cmedgrey3 { color: #6f6d6d; /* could be combined with clightgrey */ }
.cmedgrey4 { color: #6e6d6c; }
.clightgrey1 { color: #888686; }
.clightgrey2 { color: #8d8c8c; }
.clightgrey3{ color: #acabab; }
.clightgrey4 { color: #c6c5c5; }
.clightgrey5{ color: #dddbdb; }
.cturquoise { color: #20b8a0; }
.clightturquoise { color: #57cab7; }
.clightgreen { color: #98d67b; }
.clightblue { color: #22b5e0; }
.cdenim { color: #5a79ac; }
.cmclowdblue { color: #0F3C86; }
.clightorange { color: #fbb41b; }
.cmedorange { color: #ef8646; }
.cdarkorange { color: #ef6a47; }
.cred { color: #e53c1b; }


.casset1 { color: #199bd9; }
.casset2 { color: #61c5ee; }
.casset3 { color: #69d2d0; }
.casset4 { color: #9ecb4c; }
.casset5 { color: #cecc50; }
.casset6 { color: #fccd42; }
.casset7 { color: #fa9838; }
.casset8 { color: #fa5d39; }
.casset9 { color: #fa4994; }
.casset10 { color: #b955ed; }

.bg {
    display: block;
    width: 150px;
    height: 100px;
    font-size: 18px;
    font-family: 'Open Sans';
    margin: 10px;
    text-align: center;
    padding-top: 30px;
}
.half .bg {
    padding-top: 5px;
    height: 55px;
}

.bgdarkgrey { background-color: #333333; }
.bgmedgrey1 { background-color: #474747; }
.bgmedgrey2 { background-color: #484848; }
.bgmedgrey3 { background-color: #6f6d6d; }
.bgmedgrey4 { background-color: #6e6d6c; }
.bglightgrey1 { background-color: #888686; }
.bglightgrey2 { background-color: #8d8c8c; }
.bglightgrey3{ background-color: #acabab; }
.bglightgrey4 { background-color: #c6c5c5; }
.bglightgrey5{ background-color: #dddbdb; }
.bgturquoise { background-color: #20b8a0; }
.bglightturquoise { background-color: #57cab7; }
.bglightgreen { background-color: #98d67b; }
.bglightblue { background-color: #22b5e0; }
.bgdenim { background-color: #5a79ac; }
.bgmclowdblue { background-color: #0F3C86; }
.bglightorange { background-color: #fbb41b; }
.bgmedorange { background-color: #ef8646; }
.bgdarkorange { background-color: #ef6a47; }
.bgred1 { background-color: #e53c1b; }

.bgasset1 { background-color: #199bd9; }
.bgasset2 { background-color: #61c5ee; }
.bgasset3 { background-color: #69d2d0; }
.bgasset4 { background-color: #9ecb4c; }
.bgasset5 { background-color: #cecc50; }
.bgasset6 { background-color: #fccd42; }
.bgasset7 { background-color: #fa9838; }
.bgasset8 { background-color: #fa5d39; }
.bgasset9 { background-color: #fa4994; }
.bgasset10 { background-color: #b955ed; }


.bgyellow { background-color: #fbbd37; }
.bgorange { background-color: #ef8335; }
.bgred { background-color: #ef3d3d; }
.bgblue { background-color: #4ac1e3; }
.bggreen { background-color: #98d67b; }
.bgpink { background-color: #f564a1; }
.bgpurple { background-color: #a974bf; }


.clear {
    clear: both;
}

.opacity60 .bg {
    opacity: 0.6;
}
.opacity25 .bg {
    opacity: 0.25;
}
.rollover .bg:hover {
    opacity: 0.6;
}
</style>
</head>
<body>
<h1>Mclowd 2017 Pattern Library</h1>
<p>This library contains snippets of code used in the Mclowd Platform, to demonstrate how they should be written in HTML, and how that HTML is styled.<br>
Repo is at <a href="https://github.com/mclowd/Pattern-Primer">https://github.bgom/mclowd/Pattern-Primer</a></p>
<ul>
    <li><a href="index.php">2013 Original</a></li>
    <li><a href="2016-index.php">2016 New Style</a></li>
</ul>
<h2>Font Sizes and Colours</h2>
<table class="inventory">
    <tr>
        <td colspan="3">
            <p class="signika pt13">signika pt13</p>
            <p class="signika pt16">signika pt16</p>
            <p class="signika pt18">signika pt18</p>
            <p class="signika pt24">signika pt24</p>
            <p class="signika pt28">signika pt28</p>
            <p class="signika pt31">signika pt31</p>
            <p class="signika pt34">signika pt34</p>
            <p class="signika pt35">signika pt35</p>
            <p class="signika pt48">signika pt48</p>
            <p class="signika pt55">signika pt55</p>
            <p class="signika pt56">signika pt56</p>
        </td>
        <td colspan="3">
            <p class="signika px13">signika px13</p>
            <p class="signika px16">signika px16</p>
            <p class="signika px18">signika px18</p>
            <p class="signika px24">signika px24</p>
            <p class="signika px28">signika px28</p>
            <p class="signika px31">signika px31</p>
            <p class="signika px34">signika px34</p>
            <p class="signika px35">signika px35</p>
            <p class="signika px48">signika px48</p>
            <p class="signika px55">signika px55</p>
            <p class="signika px56">signika px56</p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p class="opensans pt13">opensans pt13</p>
            <p class="opensans pt16">opensans pt16</p>
            <p class="opensans pt18">opensans pt18</p>
            <p class="opensans pt24">opensans pt24</p>
            <p class="opensans pt28">opensans pt28</p>
            <p class="opensans pt31">opensans pt31</p>
            <p class="opensans pt34">opensans pt34</p>
            <p class="opensans pt35">opensans pt35</p>
            <p class="opensans pt48">opensans pt48</p>
            <p class="opensans pt55">opensans pt55</p>
            <p class="opensans pt56">opensans pt56</p>
        </td>
        <td colspan="3">
            <p class="opensans px13">opensans px13</p>
            <p class="opensans px16">opensans px16</p>
            <p class="opensans px18">opensans px18</p>
            <p class="opensans px24">opensans px24</p>
            <p class="opensans px28">opensans px28</p>
            <p class="opensans px31">opensans px31</p>
            <p class="opensans px34">opensans px34</p>
            <p class="opensans px35">opensans px35</p>
            <p class="opensans px48">opensans px48</p>
            <p class="opensans px55">opensans px55</p>
            <p class="opensans px56">opensans px56</p>
        </td>
    </tr>
</table>
<table class="inventory"><!--
    <tr>
        <td>
            <h3>Neutral</h3>
            <p class="c cdarkgrey">darkgrey #333333</p>
            <p class="c cmedgrey1">medgrey1 #474747</p>
            <p class="c cmedgrey3">medgrey3 #6f6d6d</p>
            <p class="c clightgrey1">lightgrey1 #888686</p>
            <p class="c clightgrey3">lightgrey3 #acabab</p>
            <p class="c clightgrey5">lightgrey5 #dddbdb</p>
        </td>
        <td>
            <h3>Primary</h3>
            <p class="c cdenim">denim #5a79ac</p>
            <p class="c cmclowdblue">mclowdblue #0F3C86</p>
            <p class="c cturquoise">turquoise #20b8a0</p>
        </td>
        <td>
            <h3>Secondary</h3>
            <p class="c clightblue">lightblue #22b5e0</p>
            <p class="c clightgreen">lightgreen #98d67b</p>
            <p class="c clightorange">lightorange #fbb41b</p>
            <p class="c cmedorange">medorange #ef6a47</p>
            <p class="c cdarkorange">darkorange #ef8646</p>
            <p class="c bgred1">red1 #e53c1b</p>
        </td>
        <td>
            <h3>Asset Colours</h3>
            <p class="c casset1">asset1 #199bd9</p>
            <p class="c casset2">asset2 #61c5ee</p>
            <p class="c casset3">asset3 #69d2d0</p>
            <p class="c casset4">asset4 #9ecb4c</p>
            <p class="c casset5">asset5 #cecc50</p>
            <p class="c casset6">asset6 #fccd42</p>
            <p class="c casset7">asset7 #fa9838</p>
            <p class="c casset8">asset8 #fa5d39</p>
            <p class="c casset9">asset9 #fa4994</p>
            <p class="c casset10">asset10 #b955ed</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Neutral</h3>
            <p class="bg bgdarkgrey">darkgrey<br>#333333</p>
            <p class="bg bgmedgrey1">medgrey1<br>#474747</p>
            <p class="bg bgmedgrey3">medgrey3<br>#6f6d6d</p>
            <p class="bg bglightgrey1">lightgrey1<br>#888686</p>
            <p class="bg bglightgrey3">lightgrey3<br>#acabab</p>
            <p class="bg bglightgrey5">lightgrey5<br>#dddbdb</p>
        </td>
        <td>
            <h3>Primary</h3>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
        </td>
        <td>
            <h3>Secondary</h3>
            <p class="bg bglightgreen">lightgreen<br>#98d67b</p>
            <p class="bg bglightblue">lightblue<br>#22b5e0</p>
            <p class="clear"></p>
            <p class="bg bglightorange">lightorange<br>#fbb41b</p>
            <p class="bg bgmedorange">medorange<br>#ef6a47</p>
            <p class="bg bgdarkorange">darkorange<br>#ef8646</p>
            <p class="bg bgred1">red1<br>#e53c1b</p>
        </td>
        <td>
            <h3>Asset Colours</h3>
            <p class="bg bgasset1">asset1<br>#199bd9</p>
            <p class="bg bgasset2">asset2<br>#61c5ee</p>
            <p class="bg bgasset3">asset3<br>#69d2d0</p>
            <p class="bg bgasset4">asset4<br>#9ecb4c</p>
            <p class="bg bgasset5">asset5<br>#cecc50</p>
            <p class="bg bgasset6">asset6<br>#fccd42</p>
            <p class="bg bgasset7">asset7<br>#fa9838</p>
            <p class="bg bgasset8">asset8<br>#fa5d39</p>
            <p class="bg bgasset9">asset9<br>#fa4994</p>
            <p class="bg bgasset10">asset10<br>#b955ed</p>
        </td>
    </tr>

    <tr class="opacity30">
        <td>
            <h3>Neutral</h3>
            <p class="bg bgdarkgrey">darkgrey<br>#333333</p>
            <p class="bg bgmedgrey1">medgrey1<br>#474747</p>
            <p class="bg bgmedgrey3">medgrey3<br>#6f6d6d</p>
            <p class="bg bglightgrey1">lightgrey1<br>#888686</p>
            <p class="bg bglightgrey3">lightgrey3<br>#acabab</p>
            <p class="bg bglightgrey5">lightgrey5<br>#dddbdb</p>
        </td>
        <td>
            <h3>Primary</h3>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
        </td>
        <td>
            <h3>Secondary</h3>
            <p class="bg bglightgreen">lightgreen<br>#98d67b</p>
            <p class="bg bglightblue">lightblue<br>#22b5e0</p>
            <p class="clear"></p>
            <p class="bg bglightorange">lightorange<br>#fbb41b</p>
            <p class="bg bgmedorange">medorange<br>#ef6a47</p>
            <p class="bg bgdarkorange">darkorange<br>#ef8646</p>
            <p class="bg bgred">red<br>#e53c1b</p>
        </td>
        <td>
            <h3>Asset Colours</h3>
            <p class="bg bgasset1">asset1<br>#199bd9</p>
            <p class="bg bgasset2">asset2<br>#61c5ee</p>
            <p class="bg bgasset3">asset3<br>#69d2d0</p>
            <p class="bg bgasset4">asset4<br>#9ecb4c</p>
            <p class="bg bgasset5">asset5<br>#cecc50</p>
            <p class="bg bgasset6">asset6<br>#fccd42</p>
            <p class="bg bgasset7">asset7<br>#fa9838</p>
            <p class="bg bgasset8">asset8<br>#fa5d39</p>
            <p class="bg bgasset9">asset9<br>#fa4994</p>
            <p class="bg bgasset10">asset10<br>#b955ed</p>
        </td>
    </tr>
    -->
    <tr>
        <td class="half">
            <h3>Neutral</h3>
            <p class="bg bgdarkgrey">darkgrey<br>#333333</p>
            <p class="bg bgmedgrey1">medgrey1<br>#474747</p>
            <p class="bg bgmedgrey3">medgrey3<br>#6f6d6d</p>
            <p class="bg bglightgrey1">lightgrey1<br>#888686</p>
            <p class="bg bglightgrey3">lightgrey3<br>#acabab</p>
            <p class="bg bglightgrey5">lightgrey5<br>#dddbdb</p>
        </td>
        <td class="rollover">
            <h3>Primary</h3>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
        </td>
        <td class="opacity60">
            <h3>Primary 60%</h3>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
        </td>
        <td class="opacity25">
            <h3>Primary 25%</h3>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
        </td>
        <td class="rollover">
            <h3>Secondary</h3>
            <p class="bg bgyellow">yellow<br>#fbbd37</p>
            <p class="bg bgorange">orange<br>#ef8335</p>
            <p class="bg bgred">red<br>#ef3d3d</p>
            <p class="bg bgblue">blue<br>#4ac1e3</p>
            <p class="bg bggreen">green<br>#98d67b</p>
        </td>
        <td class="opacity60">
            <h3>Secondary 60%</h3>
            <p class="bg bgyellow">yellow<br>#fbbd37</p>
            <p class="bg bgorange">orange<br>#ef8335</p>
            <p class="bg bgred">red<br>#ef3d3d</p>
            <p class="bg bgblue">blue<br>#4ac1e3</p>
            <p class="bg bggreen">green<br>#98d67b</p>
        </td>
        <td class="opacity25">
            <h3>Secondary 25%</h3>
            <p class="bg bgyellow">yellow<br>#fbbd37</p>
            <p class="bg bgorange">orange<br>#ef8335</p>
            <p class="bg bgred">red<br>#ef3d3d</p>
            <p class="bg bgblue">blue<br>#4ac1e3</p>
            <p class="bg bggreen">green<br>#98d67b</p>
        </td>
        <td class="half">
            <h3>Asset Colours</h3>
            <p class="bg bgmclowdblue">mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim">denim<br>#5a79ac</p>
            <p class="bg bgblue">blue<br>#4ac1e3</p>
            <p class="bg bgturquoise">turquoise<br>#20b8a0</p>
            <p class="bg bggreen">green<br>#98d67b</p>
            <p class="bg bgyellow">yellow<br>#fbbd37</p>
            <p class="bg bgorange">orange<br>#ef8335</p>
            <p class="bg bgred">red<br>#ef3d3d</p>
            <p class="bg bgpink">pink<br>#f564a1</p>
            <p class="bg bgpurple">purple<br>#a974bf</p>
        </td>
    </tr>
</table>
<?php
$files = array();
$handle=opendir('2017-patterns');
while (false !== ($file = readdir($handle))):
    if(substr($file, -5) == '.html'):
        $files[] = $file;
    endif;
endwhile;
sort($files);
foreach ($files as $file):
    echo '<div class="pattern">';
    echo '<div class="patternDisplay">';
    include('2017-patterns/'.$file);
    echo '</div>';
    echo '<div class="patternSource">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('2017-patterns/'.$file));
    echo '</textarea>';
    echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>
