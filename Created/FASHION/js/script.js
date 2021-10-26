$.scrollify({
    section: ".box", //1ページスクロールさせたいエリアクラス名
    scrollbars: "false", //スクロールバー表示・非表示設定
    interstitialSection: "", //ヘッダーフッターを認識し、1ページスクロールさせず表示されるように設定
    easing: "swing", // 他にもlinearやeaseOutExpoといったjQueryのeasing指定可能
    scrollSpeed: 600, // スクロール時の速度

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


//スクロールした際の動きを関数でまとめる
function PageTopCheck() {
    var winScrollTop = $(this).scrollTop();
    var secondTop = $("#WC").offset().top - 150; //#area-2の上から150pxの位置まで来たら
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
    if (elmHash == "#WC") { //もし、リンク先のhref の後が#WCの場合
        var pos = $(elmHash).offset().top;
        $('body,html').animate({ scrollTop: pos }, pos); //#WCにスクロール
    } else {
        $('body,html').animate({ scrollTop: 0 }, 1000); //それ以外はトップへスクロール。数字が大きくなるほどゆっくりスクロール
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