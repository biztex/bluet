// 単発削除
function confirmDelete(){
    var checked = confirm("【確認】本当に削除してよろしいですか？");
    if (checked == true) {
        return true;
    } else {
        return false;
    }
}
// 単発削除
function confirmSend(){
    var checked = confirm("【確認】本当に送信してよろしいですか？");
    if (checked == true) {
        return true;
    } else {
        return false;
    }
}

//　複数削除
function confirmDeleteSelected(){
    var checked = confirm("【確認】選択したデータを本当に削除してよろしいですか？");
    if (checked == true) {
        var ids = $('input[type="checkbox"]:checked').map(function(){
            return $(this).val();
        }).get();
        $('input[name="ids"]').val(ids); 
        return true;
    } else {
        var ids = $('input[type="checkbox"]:checked').map(function(){
            return $(this).val();
        }).get();
        $('input[name="ids"]').val(ids); 
        return false;
    }
}

//　全て選択・解除
$(document).ready(function(){
    $('.select-items').on('click', function() {
        var allBoxNum = $('input[type="checkbox"]').length,
            checkedBoxNum = $('input[type="checkbox"]:checked').length;
        if(checkedBoxNum == allBoxNum) {
            $('input[name="row-data"]').prop('checked',false);
        } else {
            $('input[name="row-data"]').prop('checked',true);
        }
    });
});

// プラン表示順変更
$(document).on('click', '.sort-ajax', function(){
    $(this).css('display', 'none');
    $(this).next('input').css('display', 'block');
    $(this).next('input').focus();
});
$(document).on('focusout', '.input-sort-ajax', function(){
    $(this).hide();
    $(this).prev('div').show();
    var data = {
        id: $(this).data('id'),
        sort: $(this).val()
    };
    if ($(this).val() != $(this).prev('div').data('sort')) {
    $(this).prev('div').text($(this).val());
    $(this).prev('div').attr('data-sort', $(this).val());
        $.ajax('plans/sort-ajax',
            {
              type: 'post',
              contentType: 'application/json',
              dataType: "json",
              data:JSON.stringify(data),
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            }
          )
          .done(function(data) {
              if (data > 0) {
              } else {
                alert('数字が重複しているか、もしくは使用できない数値です')
              }
          })
          .fail(function(data) {
              alert('数字が重複しているか、もしくは使用できない数値です')
          })
    }
});


// 料金区分表示順変更
$(document).on('click', '.sort-ajax-price-type', function(){
    $(this).css('display', 'none');
    $(this).next('input').css('display', 'block');
    $(this).next('input').focus();
});
$(document).on('focusout', '.input-sort-ajax-price-type', function(){
    $(this).hide();
    $(this).prev('div').show();
    var data = {
        id: $(this).data('id'),
        sort: $(this).val()
    };
    if ($(this).val() != $(this).prev('div').data('sort')) {
    $(this).prev('div').text($(this).val());
    $(this).prev('div').attr('data-sort', $(this).val());
        $.ajax('price_types/sort-ajax',
            {
              type: 'post',
              contentType: 'application/json',
              dataType: "json",
              data:JSON.stringify(data),
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            }
          )
          .done(function(data) {
              if (data > 0) {
              } else {
                alert('数字が重複しているか、もしくは使用できない数値です')
              }
          })
          .fail(function(data) {
              alert('数字が重複しているか、もしくは使用できない数値です')
          })
    }
});
