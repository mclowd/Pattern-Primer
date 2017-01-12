<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>2017 Pattern Primer</title>
<script src="https://use.fontawesome.com/a1f9945d4a.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600">
<link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="jquery-ui.icon-font.css">
<link rel="stylesheet" type="text/css" href="2017-style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<style>
body {
    padding: 40px;
    color: #111111;
}
.pattern {
    clear: both;
    overflow: hidden;
    border: 1px solid #ccc;
    padding: 1rem;
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
.opensans {
    font-family: 'Open Sans';
}
.inventory td {
    vertical-align: top;
}

.c {
    font-size: 24px;
    font-family: 'Open Sans';
}
.cdarkgrey { color: #111111; }
.cmedgrey { color: #6f6d6d;}
.clightgrey{ color: #dddbdb; }

.cdenim { color: #4c6998; }
.cmclowdblue { color: #0F3C86; }
.cturquoise { color: #20b8a0; }
.cyellow { color: #fbbd37; }
.corange { color: #ef8335; }
.cred { color: #ef3d3d; }
.cblue { color: #4ac1e3; }
.cgreen { color: #98d67b; }
.cpink { color: #f564a1; }
.cpurple { color: #a974bf; }

.bg {
    display: block;
    width: 150px;
    padding-top: 5px;
    height: 55px;
    font-size: 16px;
    font-family: 'Open Sans';
    margin: 10px;
    text-align: center;
}

.bgdarkgrey { background-color: #111111; }
.bgmedgrey { background-color: #6f6d6d; }
.bglightgrey{ background-color: #dddbdb; }
.bgpalegrey{ background-color: #f3f3f3; }
.bgbackgroundgrey{ background-color: #fafafa; }

.bgmclowdblue { background-color: #0F3C86; }
.bgdenim { background-color: #4c6998; }
.bgturquoise { background-color: #20b8a0; }
.bgyellow { background-color: #fbbd37; }
.bgorange { background-color: #ef8335; }
.bgred { background-color: #ef3d3d; }
.bgblue { background-color: #4ac1e3; }
.bggreen { background-color: #98d67b; }
.bgpink { background-color: #f564a1; }
.bgpurple { background-color: #a974bf; }

.bg60mclowdblue { background-color: #6f8ab6; }
.bg60denim { background-color: #94a5c1; }
.bg60turquoise { background-color: #79d4c6; }
.bg60yellow { background-color: #fdd787; }
.bg60orange { background-color: #f5b586; }
.bg60red { background-color: #f58b8b; }
.bg60blue { background-color: #92daee; }
.bg60green { background-color: #c1e6b0; }

.bg25mclowdblue { background-color: #c4cfe1; }
.bg25denim { background-color: #d3dae6; }
.bg25turquoise { background-color: #c8ede7; }
.bg25yellow { background-color: #feefce; }
.bg25orange { background-color: #fbe0cd; }
.bg25red { background-color: #fbcfcf; }
.bg25blue { background-color: #d2f0f8; }
.bg25green { background-color: #e6f5de; }

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
.inverse p,
p.inverse {
    color: #fff;
}
.half .bg {
    height: 46px;
}
.third .bg {
    height: 72px;
    padding-top: 20px;
}
</style>
</head>
<body>
<h1>Mclowd 2017 Pattern Library</h1>
<p>This library contains snippets of code used in the Mclowd Platform, to demonstrate how they should be written in HTML, and how that HTML is styled.<br>
Repo is at <a href="https://github.com/mclowd/Pattern-Primer">https://github.com/mclowd/Pattern-Primer</a></p>
<ul>
    <li><a href="index.php">2013 Original</a></li>
    <li><a href="2016-index.php">2016 New Style</a></li>
</ul>
<h2>Text and Colours</h2>
<table class="inventory">
    <tr>
        <td style="width: 25%;">
            <h3>Fonts, Weights, and Styles</h3>
            <p style="font-weight: normal">Open Sans Normal font weight (400)</p>
            <p style="font-weight: normal; font-style: italic;">Open Sans Normal font weight (400), Italic</p>
            <p style="font-weight: bold">Open Sans Bold font weight (600)</p>
            <p style="font-weight: bold; font-style: italic;">Open Sans Bold font weight (600), Italic</p>
        </td>
        <td style="width: 25%;">
            <h3>Neutral</h3>
            <p class="c cdarkgrey">Darkgrey #111111<br>Main Body Text, used on light backgrounds</p>
            <p class="c cmedgrey">Medgrey #6f6d6d<br>Block quotes, other?</p>
            <p class="c clightgrey">Lightgrey #dddbdb<br>no use yet - possibly on dark backgrounds where white (#ffffff) is not suitable?</p>
        </td>
        <td style="width: 25%;">
            <h3>Primary</h3>
            <p class="c cmclowdblue">Mclowdblue #0F3C86<br>unvisited links, where blue text is required (optically matches Denim background)</p>
            <p class="c cdenim">Denim #4c6998<br>no use yet</p>
            <p class="c cturquoise">Turquoise #20b8a0<br>visited links</p>
        </td>
        <td style="width: 25%;">
            <h3>Secondary</h3>
            <p class="c cred">Red #ef3d3d<br>Warnings, Errors</p>
            <p class="c corange">Orange #ef8335<br>:active, :focus, :hover links</p>
            <p class="c cblue">Blue #4ac1e3<br>Highlight, Information</p>
            <p class="c cgreen">Green #98d67b<br>Confirmation, Success</p>
        </td>
    </tr>
</table>
<table class="inventory">
    <tr>
        <td class="textleft" colspan="100%">
            <h3>Background Colours</h3>
            <p>
                <strong>Contrast Rules (to conform to <a href="https://www.w3.org/WAI/intro/wcag.php">WCAG AA Contrast ratios</a>):</strong><br>
                Background colours with white on them should only be used with a light text colour.<br>
                Background colours with black on them should only be used with a dark text colour.<br>
                25% backgrounds should only have dark text on them.<br>
                <a href="http://wave.webaim.org/report#/http://patterns.mclowd.com/2017-index.php">Contrast Checker (click the Contrast tab in the right panel)</a>
            </p>
        </td>
    </tr>
    <tr>
        <td class="third">
            <h4>Neutral</h4>
            <p class="bg bgdarkgrey inverse">Darkgrey<br>#111111</p>
            <p class="bg bgmedgrey inverse">Medgrey<br>#6f6d6d</p>
            <p class="bg bglightgrey">Lightgrey<br>#dddbdb</p>
            <p class="bg bgpalegrey">Palegrey<br>#f3f3f3</p>
            <p class="bg bgbackgroundgrey">Backgroundgrey<br>#fafafa</p>
        </td>
        <td class="rollover">
            <h4>Primary</h4>
            <p class="bg bgmclowdblue inverse">Mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim inverse">Denim<br>#4c6998</p>
            <p class="bg bgturquoise">Turquoise<br>#20b8a0</p>
            <h4>Secondary</h4>
            <p class="bg bgyellow">Yellow<br>#fbbd37</p>
            <p class="bg bgorange">Orange<br>#ef8335</p>
            <p class="bg bgred">Red<br>#ef3d3d</p>
            <p class="bg bgblue">Blue<br>#4ac1e3</p>
            <p class="bg bggreen">Green<br>#98d67b</p>
        </td>
        <td class="">
            <h4>Primary 60%</h4>
            <p class="bg bg60mclowdblue inverse">Mclowdblue<br>#6f8ab6</p>
            <p class="bg bg60denim">Denim<br>#94a5c1</p>
            <p class="bg bg60turquoise">Turquoise<br>#79d4c6</p>
            <h4>Secondary 60%</h4>
            <p class="bg bg60yellow">Yellow<br>#fdd787</p>
            <p class="bg bg60orange">Orange<br>#f5b586</p>
            <p class="bg bg60red">Red<br>#f58b8b</p>
            <p class="bg bg60blue">Blue<br>#92daee</p>
            <p class="bg bg60green">Green<br>#c1e6b0</p>
        </td>
        <td class="">
            <h4>Primary 25%</h4>
            <p class="bg bg25mclowdblue">Mclowdblue<br>#c4cfe1</p>
            <p class="bg bg25denim">Denim<br>#d3dae6</p>
            <p class="bg bg25turquoise">Turquoise<br>#c8ede7</p>
            <h4>Secondary 25%</h4>
            <p class="bg bg25yellow">Yellow<br>#feefce</p>
            <p class="bg bg25orange">Orange<br>#fbe0cd</p>
            <p class="bg bg25red">Red<br>#fbcfcf</p>
            <p class="bg bg25blue">Blue<br>#d2f0f8</p>
            <p class="bg bg25green">Green<br>#e6f5de</p>
        </td>
        <td class="half">
            <h4>Asset Chart Colours</h4>
            <p class="bg bgmclowdblue inverse">Mclowdblue<br>#0F3C86</p>
            <p class="bg bgdenim inverse">Denim<br>#4c6998</p>
            <p class="bg bgblue">Blue<br>#4ac1e3</p>
            <p class="bg bgturquoise">Turquoise<br>#20b8a0</p>
            <p class="bg bggreen">Green<br>#98d67b</p>
            <p class="bg bgyellow">Yellow<br>#fbbd37</p>
            <p class="bg bgorange">Orange<br>#ef8335</p>
            <p class="bg bgred">Red<br>#ef3d3d</p>
            <p class="bg bgpink">Pink<br>#f564a1</p>
            <p class="bg bgpurple">Purple<br>#a974bf</p>
        </td>
    </tr>
</table>

<h2>Sizing, Padding, Margins, Spacing</h2>
<p>
    The base unit is 16px, or 1em/rem (<a href="https://zellwk.com/blog/rem-vs-em/">ems are the font size used on that element, rems are the root em of the document</a>).<br>
    This is used because it is easily divisible, making calculations for relative sizes easier.
</p>
<table class="inventory">
    <thead>
        <tr>
            <th>Demo</th>
            <th>Measurements</th>
            <th>Measurement Uses</th>
            <th>Font Sizes</th>
            <th>Font Size Uses</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><div style="width: .25rem; height: .25rem; background-color: #ccc"></div></td>
            <td>.25rem = 4px</td>
            <td></td>
            <td style="font-size: .25em;"></td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: .5rem; height: .5rem; background-color: #ccc"></div></td>
            <td>.5rem = 8px</td>
            <td></td>
            <td style="font-size: .5em;"></td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: .75rem; height: .75rem; background-color: #ccc"></div></td>
            <td>.75rem = 12px</td>
            <td></td>
            <td style="font-size: .75em;">.75em = 12px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 1rem; height: 1rem; background-color: #ccc"></div></td>
            <td>1rem = 16px</td>
            <td></td>
            <td style="font-size: 1em;">1em = 16px</td>
            <td>Used for default margins, body text</td>
        </tr>
        <tr>
            <td><div style="width: 1.2rem; height: 1.2rem; background-color: #ccc"></div></td>
            <td>1.2rem = 19px</td>
            <td></td>
            <td style="font-size: 1.2em;">1.2em = 19px</td>
            <td>Blockquotes</td>
        </tr>
        <tr>
            <td><div style="width: 1.25rem; height: 1.25rem; background-color: #ccc"></div></td>
            <td>1.25rem = 20px</td>
            <td></td>
            <td style="font-size: 1.25em;">1.25em = 20px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 1.5rem; height: 1.5rem; background-color: #ccc"></div></td>
            <td>1.5rem = 24px</td>
            <td></td>
            <td style="font-size: 1.5em;">1.5em = 24px</td>
            <td>Used for default line height</td>
        </tr>
        <tr>
            <td><div style="width: 1.75rem; height: 1.75rem; background-color: #ccc"></div></td>
            <td>1.75rem = 28px</td>
            <td></td>
            <td style="font-size: 1.75em;">1.75em = 28px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 2rem; height: 2rem; background-color: #ccc"></div></td>
            <td>2rem = 32px</td>
            <td>Compact Input, Select heights</td>
            <td style="font-size: 2em;">2em = 32px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 2.25rem; height: 2.25rem; background-color: #ccc"></div></td>
            <td>2.25rem = 36px</td>
            <td></td>
            <td style="font-size: 2.25em;">2.25em = 36px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 2.5rem; height: 2.5rem; background-color: #ccc"></div></td>
            <td>2.5rem = 40px</td>
            <td>Input, Select heights</td>
            <td style="font-size: 2.5em;">2.5em = 40px</td>
            <td></td>
        </tr>
        <tr>
            <td><div style="width: 3rem; height: 3rem; background-color: #ccc"></div></td>
            <td>3rem = 48px</td>
            <td>Button heights</td>
            <td style="font-size: 3em;">3em = 48px</td>
            <td></td>
        </tr>
    </tbody>
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
    echo '<p>Sample Body Copy for reference, to compare sizes and details and so on and so forth.</p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
</body>
</html>
