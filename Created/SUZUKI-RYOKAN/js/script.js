//要素をふわっと出す
$(function() {
    $('body').fadeIn(1500);
});



//ハンバーガーメニュー
$("#openbtn").click(function() {
    $(this).toggleClass('active');
    $(".menu").fadeToggle(600);
    $("body").toggleClass('noscroll');
});


//ローディング画面
$(window).on('load', function() {
    $(".top-hero").addClass('appear');
    $("#loading").addClass('disappear');
});

//youtube API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var ytPlayer;

function onYouTubeIframeAPIReady() {
    ytPlayer = new YT.Player('youtube', { //動画を表示させたいIDを指定
        videoId: 'pgul1gGC328', //動画のアドレスの指定
        playerVars: {
            playsinline: 1, // インライン再生を行う
            autoplay: 1, //自動再生を行う
            fs: 0, //全画面表示ボタンを表示しない    
            rel: 0, // 再生中の動画と同じチャンネルの関連動画を表示
            controls: 0, // プレーヤー コントロールを表示しない
            modestbranding: 1, // YouTubeロゴの非表示
            iv_load_policy: 3, // アノテーションの非表示
            start: 50, //50秒後から動画がスタート
        },
        events: { //　イベント
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}
//ミュートにしてから再生する設定
function onPlayerReady(event) {
    event.target.mute();
    event.target.playVideo();
}
//ループ設定
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
        event.target.playVideo();
    }
}


//ニュース開閉
$(function() {
    $(".top-news .link a").on("click", function() {
        $(".top-news .link a").hide();
        $(".top-news-acrdn").slideToggle();
    });
});

//カルーセル
$('.slider').slick({
    fade: true, //切り替えをフェードで行う。初期値はfalse。
    autoplay: true, //自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 3000, //次のスライドに切り替わる待ち時間
    speed: 1000, //スライドの動きのスピード。初期値は300。
    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 1, //スライドを画面に3枚見せる
    slidesToScroll: 1, //1回のスクロールで3枚の写真を移動して見せる
    arrows: true, //左右の矢印あり
    prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
    dots: true, //下部ドットナビゲーションの表示
    pauseOnFocus: false, //フォーカスで一時停止を無効
    pauseOnHover: false, //マウスホバーで一時停止を無効
    pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide) {
    $('.slider').slick('slickPlay');
});