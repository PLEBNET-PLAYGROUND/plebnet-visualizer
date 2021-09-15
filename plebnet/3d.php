<!doctype html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Plebnet Visualizer (3D) - Satoshis.Tech</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta http-equiv="content-language" content="en-GB">
<meta name="description" content="A 3D visualization of Plebnet">
<meta name="keywords" content="ln, lightning, lightning network, Plebnet, cyclic hub, hub, visualizer, nodes, 3d">
<meta name="author" content="Felix Schulze">
<meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="public">
<link rel="canonical" href="https://plebnet.satoshis.tech/3d">


<meta property="og:image" content="https://plebnet.satoshis.tech/assets/img/thumbnail3d.png?v=1.0.0">
<meta property="og:image:height" content="1200">
<meta property="og:image:width" content="630">
<meta property="og:image:alt" content="Plebnet Thumbnail">
<meta name="twitter:image" content="https://plebnet.satoshis.tech/assets/img/thumbnail3d.png?v=1.0.0">
<meta property="twitter:image:alt" content="Plebnet Thumbnail">

<meta property="og:type" content="website">
<meta property="og:site_name" content="Satoshis.Tech">
<meta property="og:title" content="Plebnet Visualizer (3D) - Satoshis.Tech">
<meta property="og:url" content="https://plebnet.satoshis.tech/3d">
<meta property="og:description" content="A 3D visualization of Plebnet">
<meta name="title" content="Plebnet Visualizer (3D) - Satoshis.Tech">

<?php
include 'includes/favicon.html';
?>

<link rel="stylesheet" href="/assets/css/3d.css?v=1.0.4">

<script src="https://unpkg.com/three"></script>
<script src="https://unpkg.com/three-spritetext"></script>
<script src="https://unpkg.com/3d-force-graph"></script>
</head>
<body>
	<div id="3d-graph"></div>
<script>
<?php
include 'includes/graph3d.js';
?>
</script>
</body>
</html>