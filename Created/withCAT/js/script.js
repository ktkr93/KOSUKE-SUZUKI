$(".openbtn").click(function() {
    $(this).toggleClass('active');
    $(".menu").toggleClass('active-menu');
    $("body").toggleClass('hidden');
});

//Chart.js
//stage
//「月別データ」
var mydata = {
    labels: ["泌尿器の病気", "消化器の病気", "皮膚の病気"], //ラベル名
    datasets: [{ //データ設定
        label: '割合',
        data: [14.0, 15.5, 9.4], //データ内容
        backgroundColor: [ //背景色
            'rgba(227, 123, 123, 0.2)',
            'rgba(182, 182, 182, 0.2)',
            'rgba(182, 182, 182, 0.2)'
        ],
        borderColor: [
            'rgba(227, 123, 123, 1)',
            'rgba(182, 182, 182, 1)',
            'rgba(182, 182, 182, 1)'
        ],
        borderWidth: 1
    }],
};

//「オプション設定」
var options = {
    indexAxis: 'y',
    responsive: true,
    legend: { //凡例設定
        display: false //表示設定
    },
    scales: { //軸設定
        yAxes: [{ //y軸設定
            display: true, //表示設定
            barPercentage: .9, //棒グラフ幅
            categoryPercentage: .9, //棒グラフ幅
            scaleLabel: { //軸ラベル設定
                display: false, //表示設定
                labelString: '', //ラベル
            },
        }],
        xAxes: [{ //Y軸の設定
            ticks: { //目盛りの設定
                beginAtZero: true, //開始値を0
                min: 0, //最小値
                max: 20 //最大値
            },
            scaleLabel: {
                display: true, //Y軸ラベルの表示
                labelString: '( % )', //ラベル名
            }
        }]
    }
};

var canvas = document.getElementById('stage');
var chart = new Chart(canvas, {

    type: 'horizontalBar', //グラフの種類（横向き）
    data: mydata, //表示するデータ
    options: options //オプション設定

});


//stage02
//「月別データ」
var mydata02 = {
    labels: ["泌尿器の病気", "悪性腫瘍の病気", "感染症の病気"], //ラベル名
    datasets: [{ //データ設定
        label: '割合',
        data: [30.9, 16.7, 8.8], //データ内容
        backgroundColor: [ //背景色
            'rgba(227, 123, 123, 0.2)',
            'rgba(182, 182, 182, 0.2)',
            'rgba(182, 182, 182, 0.2)'
        ],
        borderColor: [
            'rgba(227, 123, 123, 1)',
            'rgba(182, 182, 182, 1)',
            'rgba(182, 182, 182, 1)'
        ],
        borderWidth: 1
    }],
};

//「オプション設定」
var options02 = {
    indexAxis: 'y',
    responsive: true,
    legend: { //凡例設定
        display: false //表示設定
    },
    scales: { //軸設定
        yAxes: [{ //y軸設定
            display: true, //表示設定
            barPercentage: .9, //棒グラフ幅
            categoryPercentage: .9, //棒グラフ幅
            scaleLabel: { //軸ラベル設定
                display: false, //表示設定
                labelString: '', //ラベル
            },
        }],
        xAxes: [{ //Y軸の設定
            ticks: { //目盛りの設定
                beginAtZero: true, //開始値を0
                min: 0, //最小値
                max: 35 //最大値
            },
            scaleLabel: {
                display: true, //Y軸ラベルの表示
                labelString: '( % )', //ラベル名
            }
        }]
    }
};

var canvas = document.getElementById('stage02');
var chart = new Chart(canvas, {

    type: 'horizontalBar', //グラフの種類（横向き）
    data: mydata02, //表示するデータ
    options: options02 //オプション設定

});


//会員登録フォームのボタンを非活性にする
$(function() {
    $('inq-send').on('click', function() {
        $(this).prop('disabled', true);
        //$('form').submit();
    });
});