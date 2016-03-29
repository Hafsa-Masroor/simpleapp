<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>S V G</title>
</head>
<body>
    <svg id="svg" width="250" height="250" viewBox="0 0 250 250">
        <polygon points=" 100,10 40,198 190,78 10,78 160,198"
                 style=" fill:silver;stroke:violet;" onclick="rotateON()">
            <animateTransform id="star"
                              attributeName="transform"
                              attributeType="xml"
                                                           
                              dur="10s"
                              type="rotate"
                              from="0 100 100"
                              to="360 100 100"
                              fill="freeze"
                              repeatCount="indefinite" />
        </polygon>
        Your Browser does not support SVG!
    </svg>

    <canvas id="canvas" width="400" height="400">

    </canvas>

    <p> This is SVG & Canvas app</p>
    <script src="graphics.js"></script>
</body>
</html>
