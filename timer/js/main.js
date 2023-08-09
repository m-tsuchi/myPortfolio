'use strict';
let timer_id = "";
let textH = "";
let textM = "";
let textS = "";

//入力数字は0～59の整数のみ
let must = function (value) {
  if (59 < value) {
    window.alert('0～59の数字を入力してください');
    window.location.reload();
  }
}

document.getElementById('start').addEventListener('click', function () {
  // カウントダウン中のスクリプトを終了する
  clearTimeout(timer_id);

  // 背景を黒くする
  document.querySelector('body').style.background = ' rgb(0, 0, 0, 0.8)';

  // h を反映
  let textH = document.getElementById('form').form_h.value;
  let must1 = must(textH);

  if (0 < textH && textH < 10) {
    textH = `0${textH}`;
  } else if (textH == 0) {
    textH = `00`;
  }
  document.getElementById('hour').textContent = textH;


  // m を反映
  let textM = document.getElementById('form').form_m.value;
  let must2 = must(textM);

  if (0 < textM && textM < 10) {
    textM = `0${textM}`;
  } else if (textM == 0) {
    textM = `00`;
  }
  document.getElementById('min').textContent = textM;


  // s を反映
  let textS = document.getElementById('form').form_s.value;
  let must3 = must(textS);

  if (0 < textS && textS < 10) {
    textS = `0${textS}`;
  } else if (textS == 0) {
    textS = `00`;
  }
  document.getElementById('sec').textContent = textS;



  // カウントダウンここから-------------------------
  const now = new Date();

  const inputSec = textS * 1000;
  const inputMin = textM * 60 * 1000;
  const inputHours = textH * 60 * 60 * 1000;

  let goalTime = inputSec + inputMin + inputHours;
  function countdown(due) {

    /*--- goalTimeから1sごとに1000ミリ秒ずつ引く ---*/
    goalTime = goalTime - 1000

    // 残り時間を時分秒に再計算
    // クリックしたときにカウントが1s進むため+1sする
    const restSec = Math.floor(goalTime / 1000) % 60 + 1;
    const restMin = Math.floor(goalTime / 1000 / 60) % 60;
    const restHours = Math.floor(goalTime / 1000 / 60 / 60) % 24;
    // 残り時間
    const count = [restHours, restMin, restSec];

    return count;
  }

  let goal = new Date();
  goal.setHours(`${textH}`);
  goal.setMinutes(`${textM}`);
  goal.setSeconds(`${textS}`);


  // ↓成功 hours, min, secで表記される
  console.log(countdown(goal));

  //1秒ごとに再計算
  function recalc() {
    const counter = countdown(goal);

    //表示変更
    if (counter[0] === 0 && counter[1] === 0 && counter[2] === 0) {

      document.querySelector('body').style.background = '#054c8a';
      //00:00:00
      document.getElementById('sec').textContent = '00';

      //stop
      clearTimeout(timer_id);

      return stop;

    } else if (counter[0] < 0 || counter[1] < 0 || counter[2] < 0) {
      document.querySelector('body').style.background = '#054c8a';
      //00:00:00
      document.getElementById('sec').textContent = '00';

      //stop
      clearTimeout(timer_id);

      return stop;
    };

    //2桁表示
    /* h,m,sを別々にoutput */
    document.getElementById('hour').textContent = String(counter[0]).padStart(2, '0');
    document.getElementById('min').textContent = String(counter[1]).padStart(2, '0');
    document.getElementById('sec').textContent = String(counter[2]).padStart(2, '0');

    refresh();
  }


  function refresh() {
    timer_id = setTimeout(recalc, 1000);
  };
  refresh();
  // カウントダウンここまで-------------------------

});

// クリックして表示させるここまで-------------------------


// resetボタン ここから-------------------------
const reset = document.getElementById('reset');
reset.addEventListener("click", function () {
  window.location.reload();
});
// resetボタン ここまで-------------------------


// stopボタン ここから-------------------------
const stop = document.getElementById('stop');
stop.addEventListener("click", function () {
  console.log('stop')

  clearTimeout(timer_id);
});
// stopボタン ここまで-------------------------