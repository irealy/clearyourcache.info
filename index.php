<?php
  $pageName = 'Как почистить временные файлы интернета или как очистить кеш';
  $siteName = 'ClearYourCache';
  $uri = 'index';
  require 'inc/header.php';
  require 'inc/random.php';
  $randAnswer = rand(1, 13);
  $randQuestion = rand(1, 14);
?>
<div class="l-contentText  g-clearfix" role="main">
  <div class="b-contentText">
    <div class="b-pageContent g-lang-ru">
      <h1 class="b-pageContent__howto -state_rus"><a href="#howto" class="b-pageContent__howtoLink"><span>как мне очистить временные файлы<br/>(обновить кеш) в браузере?</span></a></h1>
      <h2 class="b-pageContent__header"><span><span class="b-defaultText -type_question"><span class="js-startQuestion" data-current="<?php echo $randQuestion;?>"><?php echo $qR[$randQuestion];?></span></span></span></h2>
      <blockquote class="b-pageContent__devanswer">
        <div class="b-pageContent__devanswerInner">
          <span>
            <span class="b-defaultText -type_answer"><span class="js-startAnswer" data-current="<?php echo $randAnswer;?>"><?php echo $a[$randAnswer];?></span></span>
          </span>
        </div>
      </blockquote>
    </div>
    <div class="b-pageContent g-lang-en">
      <h1 class="b-pageContent__howto -state_en"><a href="#howto-eng" class="b-pageContent__howtoLink"><span>How to clear the cache<br> in browser?</span></a></h1>
      <h2 class="b-pageContent__header"><span><span class="b-defaultText -type_question"><span class="js-startAnswer" data-current="<?php echo $randAnswer;?>"><?php echo $qEn[$randAnswer];?></span></span></span></h2>
      <blockquote class="b-pageContent__devanswer"><div class="b-pageContent__devanswerInner"><span><span class="b-defaultText -type_answer"><span class="js-startQuestion" data-current="<?php echo $randQuestion;?>"><?php echo $aEn[$randQuestion];?></span></span></span></div></blockquote>
    </div>
    <div class="b-pageIll">
      <div class="b-pageIll__lamp"></div>
      <div class="b-character -type_admin -state_active j-current" data-char="a">
        <div class="mouth -type_admin"></div>
      </div>
      <div class="b-character -type_rabbit" data-char="r">
        <div class="mouth -type_rabbit"></div>
      </div>
      <div class="b-character -type_yoda" data-char="y">
        <div class="mouth -type_yoda"></div>
      </div>
    </div>

    <div class="b-mainControls">
      <div class="b-mainControls__item js-refresh g-lang-ru">
        Обновить
      </div>
      <div class="b-mainControls__item js-refresh g-lang-en">
        Update
      </div>
    </div>
  </div>
</div>
<?php require('inc/footer.php') ?>
