$(function() {
    //モーダルの開閉
    $(document).on("click", ".lang_edit_open", function () {
        //モーダルopen
        var target_modal = $(this).data('target');
        $(target_modal).show();
        $(target_modal).css('background-color', 'rgb(107, 107, 107,0.6)');
        var id = $(this).data('id');
        $('.lang_form').hide();
        $('.modal_loading').show();

        $.post({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/ajax/language',
                type: 'POST', //リクエストタイプ
                datatype: "json",
                data: {
                    id,
                }, //Laravelに渡すデータ
                timeout: 10000,
            })
            .done(function(data) {
                $('.modal_loading').hide();
                $('.lang_form').show();
                if (data.category == 0) {
                    //テキストタイプ
                    $('.text_form').show();
                    $('.image_form').hide();
                    //flg反映
                    $('#lang_edit').find('.quick_status').find('input[value="' + data.flg + '"]').prop('checked', true).change();
                    //言語反映
                    $('.modal_text_lang').each(function(index, value) {
                        var lang = $(this).data('lang');
                        $(this).attr('value', data[lang]);
                    });
                } else {
                    //画像タイプ
                    $('.text_form').hide();
                    $('.image_form').show();
                    $('#lang_edit').find('.quick_status').find('input[value="' + data.flg + '"]').prop('checked', true).change();

                    //画像反映
                    $('.modal_image_lang').each(function(index, value) {
                        var lang = $(this).data('lang');
                        $('.preview_' + lang).attr('src', data[lang]);
                    });
                }
                $('.lang_form').find('.quick_id').val(data.id);
            })
            // Ajaxリクエスト失敗時の処理
            .fail(function(data) {
                alert('エラーが発生しました。');
            });
        return false;
    });


    $(document).on("click", ".modal_close", function () {
        //モーダルclose

        $('#lang_edit').hide();
        $('#lang_edit').css('background-color', '#FFF');
    })

});

function previewImage(obj) {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
        document.getElementById('preview').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
}

function LangPreviewImage(obj, lang) {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
        document.getElementById('preview_' + lang).src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
}