<!DOCTYPE html>
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2021 by anonymous (http://jsbin.com/piyizuwiwe/1/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<html>

<head>
  <link href="https://cdn.jsdelivr.net/picnicss/4.1.1/picnic.min.css" rel="stylesheet">
  <script src="https://rawgit.com/magnumjs/mag.js/master/mag.min.js"></script>
  <meta charset="utf-8">
  <title>JS Bin</title>
</head>

<body>
  <h1>Hello Mag.JS!</h1>
  <a target="_top" href="https://github.com/magnumjs/mag.js">GitHub</a>
  <hr/>

  <div id="quiz">
    <h2>Personality point quiz</h2>
    <question>
      <h3>Are you smart?</h3>
      <p>
        <label>
          <input type='radio' name="smarts" value="20" />
          <span class="checkable">Yes</span>
        </label>
      </p>
      <p>
        <input id="radiodemo2" checked type='radio' name="smarts" value="10" />
        <label for="radiodemo2" class="checkable">No</span>
      </p>
    </question>
    <question>
      <h3>Are you pretty?</h3>
      <p>
        <label>
          <input type='radio' name="looks" value="20" />
          <span class="checkable">Yes</span>
        </label>
      </p>
      <p>
        <input id="radiodemo" checked type='radio' name="looks" value="10">
        <label for="radiodemo" class="checkable">No</span>
      </p>
    </question>
    <b>SCORE: </b>
    <results></results>
  </div>


  <script src="https://rawgit.com/magnumjs/mag.js/master/src/mag.addons.js"></script>
<script id="jsbin-javascript">
var quiz = {}

quiz.view = function(state, props) {

  state.$looks = state.$smarts = {
    _onclick: function(event) {
      props.totals[this.name] = parseInt(this.value)
    }
  }

  state.results = props.totals.smarts + props.totals.looks
}

var props = {
  totals: {
    smarts: 0,
    looks: 0
  }
}

mag.module("quiz", quiz, props)
</script>
</body>

</html>