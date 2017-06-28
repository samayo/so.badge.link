<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Badge.link - Just a badge</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bulma.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style type="text/css">
  #badges{margin-top: 10px;}
    #badge{ padding:5px 1px;}
    .badge-wrapper{float:left; display: inline-block; margin: 1px 2px;}
    .modal-content, .modal-card {
    margin: 0 auto;
    max-height: calc(100vh - 40px);
    width: 640px;
    background: #f48024;
    min-height: 50px;
    padding: 10px;
  }
  .btn {
    position: relative;
    display: inline-block;
    padding: 6px 10px;
    font-size: 13px;
    font-weight: bold;
    line-height: 20px;
    color: #333;
    white-space: nowrap;
    cursor: pointer;
    background-color: #eee;
    background-image: linear-gradient(#fcfcfc,#eee);
    border: 1px solid #d5d5d5;
    border-radius: 3px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-appearance: none;
}
.input-group {
    display: table;
        width: 100%;
}
input {
    min-height: 34px;
    padding: 7px 8px;
    font-size: 13px;
    color: #333;
    vertical-align: middle;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: right 8px center;
    border: 1px solid #ccc;
    border-radius: 3px;
    outline: none;
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.075);
}
.input-group-button {
    width: 1%;
    vertical-align: middle;
}
.input-group input {
    position: relative;
       width: 90%;
}
  </style>
</head>
<body>


<div class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
      <div id="example-target" class="example">
        <div class="input-group">
          <input id="copy-input" type="text" value="https://github.com/zenorocha/clipboard.js.git">
          <span class="input-group-button">
            <button class="btn" type="button" data-clipboard-demo="" data-clipboard-target="#copy-input">
              <img src="assets/img/clippy.svg" width="13" alt="Copy to clipboard">
            </button>
          </span>
        </div>
      </div>
  <button class="modal-close"  onclick="toggler(this)"></button>
</div>
</div>


  <!-- fork me badge -->
  <a href="https://github.com/samayo/so.badge.link">
    <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="/assets/img/preview.png" >
  </a>
  <!-- // -->

<section class="hero is-fullheight is-dark">
<!-- top header -->
    <div class="hero-head">
    <div class="container">
      <nav class="nav" style="box-shadow: none;">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="http://so.badge.link"  style="font-weight: normal !important; ">
              so.badge.link
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
      </nav>
    </div>
  </div>
  <!-- // -->


  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div class="column is-5">
          <figure class="image is-4by3">
            <a href="https://github.com/samayo/bulletproof"><img src="assets/img/preview.png" class="promo-img" alt="Description" style="border:1px solid #f48024"></a>
             <figcaption>badge on github example</figcaption>
          </figure>
        </div>
        <div class="column is-6 is-offset-1">
          <h2 class="title is-2">
            Just a <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
width="134" height="20">
<linearGradient id="b" x2="0" y2="100%">
<stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
<stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="a">
<rect width="130" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#a)">
<path fill="#555" d="M0 0h26v20H0z"/>
<path fill="#f48024" d="M26 0h105v20H26z"/>
<path fill="url(#b)" d="M26 0h105v20H26z"/>
</g>
<g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
<image x="5" y="3" width="15" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAkZJREFU
WIXN111oz1Ecx/HXH1FbHpI7oWVWtJiN5CHlIc3DBZLydLEoFy6QkpJY2YUUFyi5QFJYiZKHUsoV
0jyUPIxdeCrlxtOK0f4uzpn9mv9sv23//X3rdM7vdB7e53s+33POL5PNZhXSBhR0dgzqqkFz7YS8
TFy89yX+Aw/0NcA03EV5IQCG4yZm4BJG9DfAZ2xCFqU4h4H5BhiISYnvi9gfy9WoyzfAETzA5kTd
PlyN5Z1YnS+AcViBITiOMyhCK9bhBTI4hcn5AHiNqbgdvzfgHsoEPSyPeREuY1RfA8AHLMQBQXzl
uI9VeB6hsijRiSh7ArAWyxJ9f2EXVuIThqEeh3BD0IQIerC3AMNxFFfQiG2xjuDm6Xgk7P123MJJ
4Vz4JnilVwCj8SSWx+Mw3kaoMrzCTJyObeagQRBpBU70FuAp5qIqTvIDQ7FFWN11zMPGmL6jJfZr
yjVgT0X4ADUYgz14L7i9GtfwTFD/IizGu84GSgOwRIjvidrV/FE4+UqwRriICNtxBLO1b1lO6/I9
kLAdmB/LzXiMh4I3HgrH8HnhRtyKBTjW1aBpAH7iixBmxZgVU5u1CKttwB3U4muPAE6drf9TThzk
1cKWlQonYGXMqzASg2NdZWy/VIiK9ADR2l6rmURdqxD/jbiQqB8bQSpiPkXUQ/34uiysbtqdHKdb
AGnsTUyX0nZMA5D2/Z5zxR2t4I/SNB7o1orSWsE9kMn1axbDsK//2TI16/9+nRXcA//SQF72vKMV
3AM5NdCf9hsNPHtOoTELNAAAAABJRU5ErkJggg=="/>

<text x="77" y="15" fill="#010101" fill-opacity=".3">stack-overflow</text>
<text x="77" y="14">stack-overflow</text></g></svg>
    
            </a>
                  </a> badge for your Github Repos <small style="font-size: 11px"><sup>(for now)</sup></small>
          </h2>

          <p style="font-size: 12px;">
            Find a badge for a tag in stackoverflow
          <p>
          <p class="control has-addons has-text-centered">
            <input class="input is-expanded is-normal" id="searchbox" type="text" v-model="keyword" @keyup="getBadge" placeholder="ex: django, phpmyadmin, axios, vuejs">
          </p>
          <div id="badges">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-foot">
    <div class="container">
      <div class="tabs is-centered">
        <ul>
            <li><small>so.badge.link</small></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="assets/js/axios.min.js"></script>
<script type="text/javascript" src="assets/js/vue.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/clipboard.min.js"></script>
<script>
    new Clipboard('.btn');
    </script>
</body>
</html>
