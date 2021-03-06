$(function() {
    //「toggle_wish」というクラスを持つタグがクリックされたときに以下の処理が走る
    $('.c_l_c_o_thums').on('click', function() {
        //表示しているプロダクトのIDと状態、押下し他ボタンの情報を取得
        comment_id = $(this).attr("comment_id");
        good_comment = $(this).attr("good_comment");
        click_button = $(this);

        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/top/article_detail/good_comment',
                type: 'POST',
                data: { 'comment_id': comment_id, 'good_comment': good_comment, }, //コントローラーに送るに名称をつけてデータを指定
            })
            //正常にコントローラーの処理が完了した場合
            .done(function(data) //コントローラーからのリターンされた値をdataとして指定
                {

                    if (data == 0) {
                        //クリックしたタグのステータスを変更
                        click_button.attr("good_comment", "1");
                        //クリックしたタグの子の要素を変更(表示されているハートの模様を書き換える)
                        click_button.children().attr("class", "heart-button-l fa-heart fa-2x tippyLoginFav fas");
                    }
                    if (data == 1) {
                        //クリックしたタグのステータスを変更
                        click_button.attr("good_comment", "0");
                        //クリックしたタグの子の要素を変更(表示されているハートの模様を書き換える)


                        click_button.children().attr("class", "heart-button-l fa-heart fa-2x tippyGuestFav far");
                    }
                })
            ////正常に処理が完了しなかった場合
            .fail(function(data) {
                // alert('いいね処理失敗');
                // alert(JSON.stringify(data));
            });
    });
});