"use strict";
/*
** 공통변수
*/
var WINDOW_WIDTH = $(window).width(),
    WINDOW_HEIGHT = $(window).height(),
    HTML = $('html');


$(document).ready(function(){

    /*
    ** main_function
    */
    var fnBgColor = ['#fffdf4', '#f5fffd', '#fefff6', '#eefcff'],
        fnBgImg = ['/assets/resources/front/images/main/fn_bg1.png', '/assets/resources/front/images/main/fn_bg2.png', '/assets/resources/front/images/main/fn_bg3.png', '/assets/resources/front/images/main/fn_bg4.png'];

    var $fnTabItem = $('.fn_tab .fn_tab_item'),
        $fnConItem = $('.fn_con .fn_con_item'),
        $mainFunction = $('.main_function');

    var tabInterval = setInterval(tabAuto, 3000);

    $fnTabItem.on('click', function(){
        var index = $(this).index();

        clearInterval(tabInterval);
        tabInterval = setInterval(tabAuto, 3000);

        $(this).addClass('active').siblings().removeClass('active');
        $mainFunction.css({
            'background-color':fnBgColor[index],
            'background-image':'url('+fnBgImg[index]+')'
        });
        $fnConItem.eq(index).addClass('active').siblings().removeClass('active');
    });

    function tabAuto(){
        var index = $('.fn_tab .fn_tab_item.active').index();

        $fnTabItem.eq(index).removeClass('active');
        $fnConItem.eq(index).removeClass('active');

        if ( index == 3 ) {
            $('.main_function').css({
                'background-color':fnBgColor[0],
                'background-image':'url('+fnBgImg[0]+')'
            });
            $fnTabItem.eq(0).addClass('active');
            $fnConItem.eq(0).addClass('active');
        } else {
            $mainFunction.css({
                'background-color':fnBgColor[index+1],
                'background-image':'url('+fnBgImg[index+1]+')'
            });
            $fnTabItem.eq(index+1).addClass('active');
            $fnConItem.eq(index+1).addClass('active');
        }
    }

    $('.showroom_box').on('click', function(){
        location.href = '/customer/showroom_2019.ls';
    });

    // 팝업 쿠키 점검
	if(getCookie("divpop1") != "Y"){
		$("#divpop1").show();
	}

});

// 쿠키 설정
function setCookie( name, value, expiredays ){
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';'
}

// 쿠키 불러오기
function getCookie(name){
	var obj = name + "=";
	var x = 0;
	while ( x <= document.cookie.length ){
		var y = (x+obj.length);
		if ( document.cookie.substring( x, y ) == obj ){
			if ((endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
				endOfCookie = document.cookie.length;
			return unescape( document.cookie.substring( y, endOfCookie ) );
		}
		x = document.cookie.indexOf( " ", x ) + 1;
		if ( x == 0 )
			break;
	}
	return "";
}

// 닫기 버튼 클릭시
function closeWin(key){
	if($("#todaycloseyn").prop("checked")){
		setCookie('divpop'+key, 'Y' , 1 );
	}
	$("#divpop"+key+"").hide();
}
