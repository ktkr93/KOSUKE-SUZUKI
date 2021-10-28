//画面遷移
$(window).on('load', function() {
    $("#splash-logo").delay(800).fadeOut('slow'); //ロゴを0.8秒でフェードアウトする記述
    //=====ここからローディングエリア（splashエリア）を0.8秒でフェードアウトした後に動かしたいJSをまとめる
    $("#splash").delay(800).fadeOut('slow', function() { //ローディングエリア（splashエリア）を0.8秒でフェードアウトする記述
        $('body').addClass('appear'); //フェードアウト後bodyにappearクラス付与
    });
    //=====ここまでローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる
    //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
    $('.splashbg').on('animationend', function() {
        //この中に動かしたいJSを記載
    });
    //=====ここまで背景が伸びた後に動かしたいJSをまとめる
});


//スクロールすると1画面移動
$.scrollify({
    section: ".box", //1ページスクロールさせたいエリアクラス名
    scrollbars: "true", //スクロールバー表示・非表示設定
    interstitialSection: "#footer-top", //ヘッダーフッターを認識し、1ページスクロールさせず表示されるように設定
    easing: "swing", // 他にもlinearやeaseOutExpoといったjQueryのeasing指定可能
    scrollSpeed: 800, // スクロール時の速度

    //以下、ページネーション設定
    before: function(i, panels) {
        var ref = panels[i].attr("data-section-name");
        $(".pagination .active").removeClass("active");
        $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
    },
    afterRender: function() {
        var pagination = "<ul class=\"pagination\">";
        var activeClass = "";
        $(".box").each(function(i) { //1ページスクロールさせたいエリアクラス名を指定
            activeClass = "";
            if (i === $.scrollify.currentIndex()) {
                activeClass = "active";
            }
            pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
        });
        pagination += "</ul>";

        $(".KV").append(pagination); //はじめのエリアにページネーションを表示
        $(".pagination a").on("click", $.scrollify.move);
    }

});



//ページ上へ戻るボタン
//スクロールした際の動きを関数でまとめる
function PageTopCheck() {
    var winScrollTop = $(this).scrollTop();
    var secondTop = $("#area-2").offset().top - 150; //#area-2の上から150pxの位置まで来たら
    if (winScrollTop >= secondTop) {
        $('.js-scroll').removeClass('scroll-view'); //.js-scrollからscroll-viewというクラス名を除去
        $('.js-pagetop').addClass('scroll-view'); //.js-pagetopにscroll-viewというクラス名を付与
    } else { //元に戻ったら
        $('.js-scroll').addClass('scroll-view'); //.js-scrollからscroll-viewというクラス名を付与
        $('.js-pagetop').removeClass('scroll-view'); //.js-pagetopからscroll-viewというクラス名を除去
    }

}

//クリックした際の動き
$('.scroll-top a').click(function() {
    var elmHash = $(this).attr('href'); //hrefの内容を取得
    if (elmHash == "#area-2") { //もし、リンク先のhref の後が#area-2の場合
        var pos = $(elmHash).offset().top;
        $('body,html').animate({ scrollTop: pos }, pos); //#area-2にスクロール
    } else {
        $('body,html').animate({ scrollTop: 0 }, 500); //それ以外はトップへスクロール。数字が大きくなるほどゆっくりスクロール
    }
    return false; //リンク自体の無効化
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function() {
    PageTopCheck(); /* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function() {
    PageTopCheck(); /* スクロールした際の動きの関数を呼ぶ*/
});