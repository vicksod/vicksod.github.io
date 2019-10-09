<?php 
$title = '7_option';
$description = '7_option';
include ('template/header.php');
?>
<div class="start-trading">
  <div class="flex-container">
    <div class="left-text-block">
      <div class="mobile-image-block">
        <img class="bottom-img" src="/images/start-computer.png">
        <img class="top-img" src="/images/start-telephone.png">
      </div>
      <h1>Start trading<br /><span class="yellow-text caps-text">options</span><br /><span class="caps-text">now!</span></h1>
      <p>Earn on stock prices and currencies in 1 minute: guess where the chart will go, conclude a transaction - get up to 95% profit!</p>
      <div class="start-trading-buttons">
        <div onclick="sign_form()" class="yellow-button"><a href="#">Sign Up</a></div>
        <div class="black-button"><a href="#taste">how it works? <img class="right-how" src="/images/right.png"></a></div>
      </div>
    </div>
    <div class="right-image-block">
      <img class="bottom-img" src="/images/start-computer.png">
      <img class="top-img" src="/images/start-telephone.png">
    </div>
  </div>
</div>
<div class="taste">
  <a name="taste"></a>
  <h2>Taste the <span class="yellow-text">victory</span></h2>
  <div class="flex-container">
    <div class="left-graph-block">
      <img src="/images/graph.png">
    </div>
    <div class="right-text-block">
      <p class="midle-text"><span class="yellow-text">It's really simple!</span><br />Where will the chart move next?<br />Up or Down?</p>
      <div class="taste-buttons">
        <div class="up-button"><a href="#"><img src="/images/up.png">Up</a></div>
        <div class="up-and-down">
          <div class="up-and-down-top">
            <p class="red-text">42%</p>
            <p class="small-text">most-opinion</p>
            <p class="green-text">68%</p>
          </div>
          <div class="up-and-down-bottom">
            <div class="left-hr"><hr></div>
            <div class="right-hr"><hr></div>
          </div>
        </div>
        <div class="mobile-buttons">
          <div class="down-button"><a href="#"><img src="/images/down.png">Down</a></div>
          <div class="mobile-up-button"><a href="#"><img src="/images/up.png">Up</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="why-select-us">
  <h2>Why traders all around the world<br /><span class="yellow-text">select 7option?</span></h2>
  <div class="flex-container why-select-container">
    <div class="why-select-block">
      <img src="/images/why-1.png">
      <p class="s-midle-text">An account from only $10</p>
      <p class="small-text">You don’t need to save start-up capital: start earning without investing</p>
    </div>
    <div class="why-select-block">
      <img src="/images/why-2.png">
      <p class="s-midle-text">Free training</p>
      <p class="small-text">By studying the extensive knowledge base, you will be able to trade as profitably as possible</p>
    </div>
    <div class="why-select-block">
      <img src="/images/why-3.png">
      <p class="s-midle-text">Mentoring system</p>
      <p class="small-text">Repeat the steps of experienced traders, make a profit</p>
    </div>
    <div class="why-select-block">
      <img src="/images/why-4.png">
      <p class="s-midle-text">Demo account</p>
      <p class="small-text">You can always improve your trading skills on the demo account. When you're ready, switch to real account.</p>
    </div>
    <div class="why-select-block">
      <img src="/images/why-5.png">
      <p class="s-midle-text">Online support</p>
      <p class="small-text">You can send a message anytime via chat and get feedback right away!</p>
    </div>
    <div class="why-select-block">
      <img src="/images/why-6.png">
      <p class="s-midle-text">Instant payouts</p>
      <p class="small-text">You can order instant payments at any time, seven days a week, in convenient payment systems.</p>
    </div>
  </div>
</div>
<div class="any-moment">
  <h2>Withdraw any amount<br /><span class="yellow-text">at any moment</span></h2>
  <div class="flex-container">
    <img src="/images/any-1.png">
    <img src="/images/any-2.png">
    <img src="/images/any-3.png">
    <img src="/images/any-4.png">
    <img src="/images/any-5.png">
  </div>
</div>
<?php include 'template/forms.php';?>
<?php include 'template/footer.php';?>






