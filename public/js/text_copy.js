function copyToClipboard() {
  // コピー対象をJavaScript上で変数として定義する
  var copyTarget = document.getElementById("copyTarget");

  // コピー対象のテキストを選択する
  copyTarget.select();

  // 選択しているテキストをクリップボードにコピーする
  document.execCommand("Copy");

  // コピーをお知らせする
  alert("コピーできました！ : " + copyTarget.value);
}
function copyToClipboard2() {
  // コピー対象をJavaScript上で変数として定義する
  var copyTarget = document.getElementById("copyTarget2");

  // コピー対象のテキストを選択する
  copyTarget.select();

  // 選択しているテキストをクリップボードにコピーする
  document.execCommand("Copy");

  // コピーをお知らせする
  alert("コピーできました！ : " + copyTarget.value);
}