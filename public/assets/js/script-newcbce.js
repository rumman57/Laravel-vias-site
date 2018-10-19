;(function($) {
    $.fn.rating = function(callback) {

        callback = callback || function() {};

        // each for all item
        this.each(function(i, v) {

            $(v).data('rating', {
                    callback: callback
                })
                .bind('init.rating', $.fn.rating.init)
                .bind('set.rating', $.fn.rating.set)
                .bind('hover.rating', $.fn.rating.hover)
                .trigger('init.rating');
        });
    };

    $.extend($.fn.rating, {
        init: function(e) {
            var el = $(this),
                list = '',
                isChecked = null,
                childs = el.children(),
                i = 0,
                l = childs.length;

            for (; i < l; i++) {
                list = list + '<a class="star" title="' + $(childs[i]).val() + '" />';
                if ($(childs[i]).is(':checked')) {
                    isChecked = $(childs[i]).val();
                };
            };

            childs.hide();

            el
                .append('<div class="stars">' + list + '</div>')
                .trigger('set.rating', isChecked);

            $('a', el).bind('click', $.fn.rating.click);
            el.trigger('hover.rating');
        },
        set: function(e, val) {
            var el = $(this),
                item = $('a', el),
                input = undefined;

            if (val) {
                item.removeClass('fullStar');

                input = item.filter(function(i) {
                    if ($(this).attr('title') == val)
                        return $(this);
                    else
                        return false;
                });

                input
                    .addClass('fullStar')
                    .prevAll()
                    .addClass('fullStar');
            }

            return;
        },
        hover: function(e) {
            var el = $(this),
                stars = $('a', el);

            stars.bind('mouseenter', function(e) {
                // add tmp class when mouse enter
                $(this)
                    .addClass('tmp_fs')
                    .prevAll()
                    .addClass('tmp_fs');

                $(this).nextAll()
                    .addClass('tmp_es');
            });

            stars.bind('mouseleave', function(e) {
                // remove all tmp class when mouse leave
                $(this)
                    .removeClass('tmp_fs')
                    .prevAll()
                    .removeClass('tmp_fs');

                $(this).nextAll()
                    .removeClass('tmp_es');
            });
        },
        click: function(e) {
            e.preventDefault();
            var el = $(e.target),
                container = el.parent().parent(),
                inputs = container.children('input'),
                rate = el.attr('title');

            matchInput = inputs.filter(function(i) {
                if ($(this).val() == rate)
                    return true;
                else
                    return false;
            });

            matchInput
                .prop('checked', true)
                .siblings('input').prop('checked', false);

            container
                .trigger('set.rating', matchInput.val())
                .data('rating').callback(rate, e);
        }
    });

})(jQuery);

$(document).ready(function() {

    
    $('.yoxla').on('click', function(){
        var processing_type = $("select[name='processing_type'] option:selected").val();
        if(processing_type == 2)
        {
             $('#modal_urgent').modal('toggle');
        }
        else if(processing_type == 1)
        {
            $(this).addClass('save_continue');
            $('.save_continue').trigger('click');
        }else{
            $('.purpose_error_ptype').addClass('display-block');
            $('html, body').animate({
                    scrollTop: $("select[name='processing_type']").offset().top - 20
            }, 'slow');
        }
        //added by shahin to check if processing type selected
    });

    $(function() {
        $('#star-rating').rating(function(vote, event) {
            if (vote == '1') {
                $("input[name='star']").val('1');
            } else if (vote == '2') {
                $("input[name='star']").val('2');
            } else if (vote == '3') {
                $("input[name='star']").val('3');
            } else if (vote == '4') {
                $("input[name='star']").val('4');
            } else if (vote == '5') {
                $("input[name='star']").val('5');
            }
        });
    });

    $("select[name='message_type']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $("input[name='firstname']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });


    $("input[name='lastname']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $("input[name='email']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $("input[name='doc_number']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $("select[name='country']").on('change', function() {
        if ($(this).val() == '') {
            $(".dropdown-toggle").addClass("input_error_border");
        } else {
            $(".dropdown-toggle").removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $("textarea[name='message']").on('change', function() {
        if ($(this).val() == '') {
            $(this).addClass("input_error_border");
        } else {
            $(this).removeClass("input_error_border");
            $(this).removeClass("input_error");
        }
    });

    $('.selectpicker').selectpicker({
        style: 'btn-default btn-none'
    });


    $(".faq_link").on('click', function() {
        window.open($(this).attr('href'), '_blank');
    });


    $(".contact_message").keyup(function() {
        var max = 600;
        var len = $(this).val().length;
        if (len >= max) {
            $('.charNum').addClass("fmgp31");
            $('.charNum').text('');
            $('.charNum').text(len + ' character. You have reached the limit');
        } else {
            var char = max - len;
            $('.charNum').removeClass("fmgp31");
            $('.charNum').text('');
            $('.charNum').text(char + ' characters left');
        }
    });

    $('[data-toggle="tooltip"]').tooltip({
        html: true,
        placement: 'right',
        container: 'body',
        trigger: "hover"
    });


    var options = {
        valueNames: ['faq_title', 'faq_content']
    };
    var userList = new List('faq_menus', options);




    var lang_value = '';
    if (lang_value == '') {
        lang_value = $("input[name='lang_value']").val();
    }

    var natDays = [       
        [1, 1, 2018, 'mx'],
        [1, 2, 2018, 'mx'],
        [1, 3, 2018, 'mx'],
        [3, 20, 2018, 'mx'],
        [3, 21, 2018, 'mx'],
        [3, 22, 2018, 'mx'],
        [3, 23, 2018, 'mx'],
        [3, 24, 2018, 'mx'],
        [3, 25, 2018, 'mx'],
        [3, 26, 2018, 'mx'],
        [4, 11, 2018, 'mx']
    ];

    var natDays2 = [
        [3, 20, 2018, 'mx'],
        [3, 21, 2018, 'mx'],
        [3, 22, 2018, 'mx']
    ];


     //if(country_type=='6'){
    $("span.business_day").text('').text('3');
    var dateMin = new Date();
    var dateMin_for_compulsory = new Date();
    dateMin.setMinutes(dateMin.getMinutes() + dateMin.getTimezoneOffset() - 480);
    dateMin.setHours(dateMin.getHours() + 12);

    //Wed Feb 22 2017 05:39:58 GMT+0400 (AZT)
    //alert(dateMin);
    var hour = dateMin.getHours();
    //alert(hour);
    var weekday = dateMin.getDay();
    //alert(weekday);
    if (weekday == '6') {
        if (hour >= 13) {
            var weekDays = AddBusinessDays(4) + 1;
            var weekDays_for_compulsory = AddBusinessDays(1) + 1;
        } else if (hour < 13) {
            var weekDays = AddBusinessDays(3) + 1;
            var weekDays_for_compulsory = 1;
        }
    } else if (weekday == '0') {
        var weekDays = AddBusinessDays(4) + 1;
        var weekDays_for_compulsory = AddBusinessDays(1) + 1;
    } else {
        if (hour >= 18) {
            var weekDays = AddBusinessDays(4) + 1;
            var weekDays_for_compulsory = AddBusinessDays(1) + 1;
            //alert(">16");
        } else if (hour < 18) {
            var weekDays = AddBusinessDays(3) + 1;
            var weekDays_for_compulsory = 1;
            //alert("<16");
        }
    }
    dateMin.setDate(dateMin.getDate() + weekDays);
    dateMin_for_compulsory.setDate(dateMin_for_compulsory.getDate() + weekDays_for_compulsory);
   




    function AddBusinessDays(weekDaysToAdd) {
        var curdate = new Date();
        var realDaysToAdd = 0;
        while (weekDaysToAdd > 0) {
            curdate.setDate(curdate.getDate() + 1);
            realDaysToAdd++;
            //check if current day is business day
            if (noWeekendsOrHolidays(curdate)[0]) {
                weekDaysToAdd--;
            }
        }
        return realDaysToAdd;

    }



    function AddBusinessDays_for_urgent(weekDaysToAdd) {
        var curdate = new Date();

        var realDaysToAdd = 0;
        while (weekDaysToAdd > 0) {
            curdate.setDate(curdate.getDate() + 1);
            realDaysToAdd++;
            //check if current day is business day
            if (noWeekendsOrHolidays_for_urgent(curdate)[0]) {
                weekDaysToAdd--;
            }
        }
        return realDaysToAdd;
    }


    function noWeekendsOrHolidays(date) {
        var noWeekend = $.datepicker.noWeekends(date);
        if (noWeekend[0]) {
            return nationalDays(date);
        } else {
            return noWeekend;
        }
    }


    function noWeekendsOrHolidays_for_urgent(date) {
        var noWeekend = $.datepicker.noWeekends(date);
        if (noWeekend[0]) {
            return nationalDays_for_urgent(date);
        } else {
            return noWeekend;
        }
    }

    function nationalDays(date) {
        for (i = 0; i < natDays.length; i++) {
            if (date.getMonth() == natDays[i][0] - 1 && date.getDate() == natDays[i][1] && date.getFullYear() == natDays[i][2]) {
                return [false, '', 'No laboral ' + natDays[i][3] + '']; /* 'Holiday in ' + natDays[i][3] */
            }
        }
        return [true, ''];
    }


    function nationalDays_for_urgent(date) {
        for (i = 0; i < natDays2.length; i++) {
            if (date.getMonth() == natDays2[i][0] - 1 && date.getDate() == natDays2[i][1] && date.getFullYear() == natDays2[i][2]) {
                return [false, '', 'No laboral ' + natDays2[i][3] + '']; /* 'Holiday in ' + natDays2[i][3] */
            }
        }
        return [true, ''];
    }



    // function novruzHolidayThing(){
    //     var dummdate = new Date();
    //     dummdate.setMinutes(dummdate.getMinutes() + dummdate.getTimezoneOffset() - 480);
    //     dummdate.setHours(dummdate.getHours() + 12);


    //     var hour        = dummdate.getHours();
    //     var weekday     = dummdate.getDay();
    //     var weekDays    = 0;
    //     var dayNumb     = dummdate.getDate();
        

    //     if(dayNumb == 20 || dayNumb == 21 || dayNumb == 22){
    //         dummdate.setDate(23);

    //         var today   = dummdate;
    //         var dd      = today.getDate();
    //         var mm      = today.getMonth()+1; //January is 0!
    //         var nm      = today.getMonth()+4;
    //         var xm      = today.getMonth();
    //         var yyyy    = today.getFullYear();

    //         if(dd<10) {
    //             dd = '0'+dd
    //         } 

    //         if(mm<10) {
    //             mm = '0'+mm
    //         } 
    //         if(nm<10) {
    //             nm = '0'+nm
    //         } 
    //         if(xm<10) {
    //             xm = '0'+xm
    //         } 

    //         today_1 = dd + '/' + mm + '/' + yyyy;
    //         end_today = dd + '/' + nm + '/' + yyyy;

    //         $('input[name="arrival_date"]').val(today_1);
    //         $('input[name="arrival_date2"]').val(yyyy+'-'+xm+'-'+dd);
    //         $('input[name="end_date"]').val(end_today);

    //         $('.arrival_date1').val(today_1);
    //         $('.arrival_date1').attr('disabled', 'disabled');

    //         $('#today').text(dd);
    //         $('#monthyear').text(month[mm-1]);
    //         $('#year1').text(yyyy);

    //         $('#afterday').text(dd);
    //         $('#aftermonthyear').text(month[nm-1]);
    //         $('#year2').text(yyyy);

    //         $('.arrival_date_text').text('');
    //         $('.arrival_date_text').text(dd+" "+month[mm-1]+" "+yyyy);
    //     }

    // }
    //-240
    //var d2 = new Date();
    //var n = d2.getMinutes() + d2.getTimezoneOffset() - 420;

    var d = new Date();
    d.setMinutes(d.getMinutes() + d.getTimezoneOffset() - 480);
    d.setHours(d.getHours() + 12);
    //alert(d);
    //Wed Feb 22 2017 04:24:27 GMT+0400 (AZT)


    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";


    ////////////////// COMMENTS ///////////////
    //var comment_segment=$("input[name='segment_value']").val();
    $(".fmgp40").hide();
    $(".comments_loading_animation").hide();

    $(".load_comment_click").click(function() {
        var comment_page = $(this).attr("comment_page");
        var next_comment_page = parseInt(comment_page) + 1;
        var evisa_token = $("input[name='evisa_token']").val();
        var dataString = 'comment_load_submit=comment_load_submit1&comment_page=' + next_comment_page+"&evisa_token="+evisa_token;

        $.ajax({
            type: "POST",
            url: "comment_load",
            data: dataString,
            cache: false,
            beforeSend: function() {
                $(".fmgp40").show();
                $(".comments_loading_animation").show();
            },
            success: function(html) {
                $(".fmgp40").hide();
                $(".comments_loading_animation").hide();
                $("div.comment_page_result").html(html);

                var token = $("div.comment_page_result").find(".token").attr("data");
                $("input[name='evisa_token']").val("").val(token);

                if ($("div.comment_page_result >").hasClass('success')) {

                    $("div.comment_page_result").find('div.success').children('div.result_item').each(function() {
                        var person = $(this).attr("person");
                        var country = $(this).attr("country");
                        var star = $(this).attr('star');
                        var review = $(this).attr('review');
                        var createdAt = $(this).attr('time');
                        var star_text = $(this).attr('star_text');
                        var rated_text = $(this).attr('rated_text');

                        if (star == '1') {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i>';
                        } else if (star == '2') {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star fmgp23"></i> <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i>';
                        } else if (star == '3') {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star-o fmgp23"></i> <i class="fa fa-star-o fmgp23"></i>';
                        } else if (star == '4') {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star-o fmgp23"></i>';
                        } else if (star == '5') {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i>';
                        } else {
                            var star_icons = '<i class="fa fa-star fmgp23"></i>   <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i> <i class="fa fa-star fmgp23"></i>';
                        }

                        $(".commentscontent").find(".commentsitem3:last").after('<div class="commentsitem3"><div class="row rowstyle2"><div class="col-lg-12 colstyle5"><div class="col-lg-10 fmgp781 colstyle5">' + person + '<span class="spanstyle4">  (' + country + ')</span><div class="row fmgp782"><span><i class="fa fa-quote-left icolor1"></i> ' + review + ' <i class="fa fa-quote-right icolor1"></i></span></div></div><div class="col-lg-2 text-center colstyle5"><span>' + createdAt + '</span><br><span>' + rated_text + star_text + '</span><br>' + star_icons + '</div></div></div></div>');
                    });
                    $(".load_comment_click").attr('comment_page', next_comment_page);

                } else {
                    alert('error');
                }
            }
        });


    });


    ///////////////// COMMENTS ////////////////



    ////////////////CONTACT///////////////////
    $(".trave_doc_number").hide();
    $("select[name='message_type']").on('change', function() {
        var message_type = $("select[name='message_type']").val();
        if (message_type == '2') {
            $(".trave_doc_number").show('slow');
        } else {
            $(".trave_doc_number").hide('slow');
        }
    });


    ////////////////CONTACT//////////////////


    //////////////////////////PERSONAL INFO IMAGE LOAD //////////////////////////


    $(".document_name_area").hide();
    $("select[name='document_type']").on('change', function() {
        var value = $(this).val();
        if (value == 'other') {
            $(".document_name_area").fadeIn();
        } else {
            $(".document_name_area").fadeOut();
        }
    });

    
    
    $("select[name='select_country']").on("change", function() {
        var country_id = $(this).val();
        var evisa_token = $("input[name='evisa_token']").val();
        var dataString3 = "post_select_country_submit=post_select_country_submit1&country_id=" + country_id+"&evisa_token="+evisa_token;

        $.ajax({
                type: "POST",
                url: "check_country",
                data: dataString3,
                cache: false,
                success: function(result){
                    var json                = JSON.parse(JSON.stringify(result));
                    var type_id             = json.type_id;
                    var country_title       = json.country_title;
                    var token               = json.token;

                    $("input[name='evisa_token']").val("").val(token);

                    if(type_id == 1)
                    {
                        $(".country_type_visa_error").hide('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").show('slow');
                        $(".step_arrival_date").hide('slow');
                        $("select[name='document_type']").attr('disabled', 'disabled');
                        
                        $(".cart").hide('slow');
                    }
                    else if(type_id == 2)
                    {
                        $(".country_type_visa_error").hide('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").show('slow');

                        $(".cart").hide('slow');
                    }
                    else if(type_id == 3)
                    {
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error").show('slow');
                        $(".country_type_visa_error2").hide('slow');
                        $(".step_arrival_date").hide('slow');

                        $(".cart").hide('slow');
                    }
                    else if(type_id == 4)
                    {
                        $(".step_arrival_date").hide('slow');

                        $("select[name='document_type']").attr('disabled', 'disabled');
                        $(".country_type_visa_error").hide('slow');
                        $(".country_type_visa_error2").hide('slow');
                        $(".country_type_not_visa_error").show('slow');
                        $(".country_type_not_visa_error").find(".country_name").text('').text(country_title);

                        $(".cart").hide('slow');
                    }
                    else if(type_id == 5)
                    {
                        $(".country_type_visa_error").hide('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").show('slow');
                        $(".step_arrival_date").hide('slow');
                        $("select[name='document_type']").attr('disabled', 'disabled');

                        $(".cart").hide('slow');
                    }
                    else if(type_id == 6)
                    {   
                        
                        
                        $(".country_type_visa_error").hide('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").hide('slow');
                        $(".step_arrival_date").show('slow');
                        $("select[name='document_type']").removeAttr('disabled', 'disabled');
                        $("#applicant").trigger("change");
                        let processing_type = $("select[name='processing_type'] option:selected").val();
                        if(processing_type>0) $(".cart").show('slow');
                       
                    }
                    else
                    {
                        //alert('Error: Unknown visa type');
                    }

                }
        });
    });

    $(".select_document_result").hide();
    $("select[name='document_type']").on("change", function() {
        var document_id = $(this).val();
        if (document_id != '') {
            var evisa_token = $("input[name='evisa_token']").val();
            var dataString3 = "post_select_document_submit=post_select_document_submit1&document_id=" + document_id+"&evisa_token="+evisa_token;
            $.ajax({
                type: "POST",
                url: "check_document",
                data: dataString3,
                cache: false,
                success: function(result) {
                    var json = JSON.parse(JSON.stringify(result));
                    console.log(json);
                    //$("div.select_document_result").html(html);

                    $("input[name='evisa_token']").val("").val(json.token);

                    if (json.status == 1) {
                        $(".step_arrival_date").show('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").hide('slow');
                        $(".country_type_visa_error").hide('slow');
                    } else if (json.status == 2) {
                        $(".step_arrival_date").hide('slow');
                        $(".country_type_not_visa_error").hide('slow');
                        $(".country_type_visa_error2").hide('slow');
                        $(".country_type_visa_error").show('slow');
                    } else {
                        console.log(json);
                    }



                }

            });


        }

    });

    

    $(".arrival_date1").on("change", function() {
        var this_date = $(".arrival_date1").val();
        //dateMin
        var this_date_to_date = this_date.split('/');
        var mydate5 = new Date(this_date_to_date[2], this_date_to_date[1] - 1, this_date_to_date[0]);
        if (mydate5 < dateMin) {
            $(".save_continue2").addClass("save_continue22");
            $(".save_continue2").removeClass("save_continue2");
            $(".arrival_date1").addClass("input_error_border");
        } else {
            $(".save_continue22").addClass("save_continue2");
            $(".save_continue22").removeClass("save_continue22");
            $(".arrival_date1").removeClass("input_error_border");
        }
    });

        $(".arrival_date1").datepicker({
        firstDay: 1,
        //beforeShowDay: nationalDays,
        minDate: dateMin,
        maxDate: '+180D',
        showAnim: 'clip',
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        onSelect: function(dateText) {
            $(".save_continue22").addClass("save_continue2");
            $(".save_continue22").removeClass("save_continue22");
            $(".arrival_date1").removeClass("input_error_border");
            $(".save_continue2").show();
            //$(".checkout_date").datepicker("option","minDate",$(".checkin_date").datepicker("getDate",'+1d'));
            $("input[name='arrival_date']").val(dateText);
            var date2 = $('.arrival_date1').datepicker('getDate');
            date2.setDate(date2.getDate() + 90);
            var mm = date2.getMonth() + 1;
            var dd = date2.getDate();
            var yy = date2.getFullYear();
            $("input[name='end_date']").val(dd + "/" + mm + "/" + yy);
            var month_last2 = month[date2.getMonth()];
            var year2 = date2.getFullYear();
            var day2 = date2.getDate();
            if (day2 > 0 && day2 < 10) {
                $("#afterday").text("0" + day2);
            } else {
                $("#afterday").text(day2);
            }
            $("#aftermonthyear").text(month_last2);
            $("#year2").text(year2);


            var date1 = $('.arrival_date1').datepicker('getDate');
            var month_last = month[date1.getMonth()];
            var year = date1.getFullYear();
            var day = date1.getDate();
            var last_value = day + " " + month_last + " " + year;
            $(".arrival_date_text").text('');
            $(".arrival_date_text").text(last_value);

            if (day > 0 && day < 10) {
                $("#today").text("0" + day);
            } else {
                $("#today").text(day);
            }
            $("#monthyear").text(month_last);
            $("#year1").text(year);




        }
    }).datepicker('setDate', "+" + weekDays);

    $("input[name='arrival_date']").val($(".arrival_date1").datepicker({
        dateFormat: 'dd-mm-yy'
    }).val());
    var newdate1 = new Date($(".arrival_date1").datepicker('getDate'));
    if (newdate1.getDate() > 0 || newdate1.getDate() < 10) {
        var newdate1_day = "0" + newdate1.getDate();
    } else {
        var newdate1_day = newdate1.getDate();
    }

    if (newdate1.getMonth() > 0 || newdate1.getMonth() < 10) {
        var newdate1_month = "0" + newdate1.getMonth();
    } else {
        var newdate1_month = newdate1.getMonth();
    }


    var newdate1_year = newdate1.getFullYear();
    $("input[name='arrival_date2']").val(newdate1_year + "-" + newdate1_month + "-" + newdate1_day);



    if ($(".arrival_date1").datepicker('getDate') != '') {

        var arrival_date = $(".arrival_date1").datepicker('getDate');


        //  var arrival_date =arrival_date.split('/');

        //var arrival_date = new Date(arrival_date[2],arrival_date[1]-1,arrival_date[0]); 

        var d = new Date(arrival_date);
        var month_last = month[d.getMonth()];
        var year = d.getFullYear();
        var day = d.getDate();
        var last_value = day + " " + month_last + " " + year;
        $(".arrival_date_text").text('');
        $(".arrival_date_text").text(last_value);
        if (day > 0 && day < 10) {
            $("#today").text("0" + day);
        } else {
            $("#today").text(day);
        }
        $("#monthyear").text(month_last);
        $("#year1").text(year);

        var startDate = new Date(arrival_date);
        var day = 90 * 60 * 60 * 24 * 1000;
        var endDate = new Date(startDate.getTime() + day);
        //var next_day = endDate.toISOString().substring(0, 10);
        var d2 = new Date(endDate);
        var month_last2 = month[d2.getMonth()];
        var year2 = d2.getFullYear();
        var day2 = d2.getDate();

        var asdfs1 = d2.getMonth() + 1;
        var string_month = asdfs1;
        if (asdfs1 > 0 && asdfs1 < 10) {
            string_month = "0" + asdfs1;
        }

        /* if(parseInt(d2.getMonth())+1>0 && parseInt(d2.getMonth())+1<10){
           var string_month="0"+parseInt(d2.getMonth())+1;
         }else{
           var string_month=parseInt(d2.getMonth())+1;
         }*/

        $("input[name='end_date']").val(day2 + "/" + string_month + "/" + d2.getFullYear());

        if (day2 > 0 && day2 < 10) {
            $("#afterday").text("0" + day2);
        } else {
            $("#afterday").text(day2);
        }
        $("#aftermonthyear").text(month_last2);
        $("#year2").text(year2);


    }

    $("select[name='processing_type']").on('change', function(){
        if($(this).val()>0){
            if($('.purpose_error_ptype').hasClass('display-block')){
                $('.purpose_error_ptype').removeClass('display-block');
            }
        }
    });    

    $("select[name='purpose_type']").on('change', function(){
        if($(this).val()>0){
            $('.purpose_error4564').hide();
        }
    });
 
     $("body").delegate('.save_continue', 'click', function() {


        var validation = "0";
        var recaptcha = $("textarea[name='g-recaptcha-response']").val();
        var country_id = $("select[name='select_country']").val();
        var document_id = $("select[name='document_type']").val();
        var document_name = $("input[name='document_name']").val();
        var country_show = $("select[name='select_country'] option:selected").text();
        var document_show = $("select[name='document_type'] option:selected").text();
        var processing_type = $("select[name='processing_type'] option:selected").val();
        var animate_scroll1 = "0";
        var arrival_date = $("input[name='arrival_date']").val();
        var end_date = $("input[name='end_date']").val();
        var purpose_id = $("select[name='purpose_type']").val();

        if(processing_type == 2)
        {
             $('#modal_urgent').modal('toggle');
        }

        if ($("select[name='select_country']").val() == '') {
            $(".dropdown-toggle").addClass('input_error');
            if (animate_scroll1 == '0') {
                $('html, body').animate({
                    scrollTop: $("select[name='select_country']").offset().top - 20
                }, 'slow');
            }
            animate_scroll1 = "1";
            return false;
            //shahin added return statement to stop execution 

        } else {
            $(".dropdown-toggle").removeClass('input_error');
        }
       
       var validation = '1';

       if ($('input[name="hiv_check"]').is(':checked')) {
            validation = '1';
            $('input[name="hiv_check"]').parent().find('.cr').removeClass('error_occured_alert');
            $('input[name="hiv_check"]').parents('.width_10').find('.purpose_error_ptick').hide();
       }else{
            validation = '0';
            $('input[name="hiv_check"]').parent().find('.cr').addClass('error_occured_alert');
            $('input[name="hiv_check"]').parents('.width_10').find('.purpose_error_ptick').show();
            return false;
       }       

       if ($('input[name="ev_req"]').is(':checked')) {
            validation = '1';
            $('input[name="ev_req"]').parent().find('.cr').removeClass('error_occured_alert');
            $('input[name="ev_req"]').parents('.width_10').find('.purpose_error_ptick').hide();
       }else{
            validation = '0';
            $('input[name="ev_req"]').parent().find('.cr').addClass('error_occured_alert');
            $('input[name="ev_req"]').parents('.width_10').find('.purpose_error_ptick').show();
            return false;
       }       

       if ($('input[name="agree_check"]').is(':checked')) {
            validation = '1';
            $('input[name="agree_check"]').parent().find('.cr').removeClass('error_occured_alert');
            $('input[name="agree_check"]').parents('.width_10').find('.purpose_error_ptick').hide();
       }else{
            validation = '0';
            $('input[name="agree_check"]').parent().find('.cr').addClass('error_occured_alert');
            $('input[name="agree_check"]').parents('.width_10').find('.purpose_error_ptick').show();
            return false;
       }
      


        var applicant_quantity = $("select[name='applicant']").val();
        var total_fee = "85";
        var evisa_token = $("input[name='evisa_token']").val();
        var dataString = "first_submit=first_submit1&recaptcha=" + recaptcha + "&applicant=" + applicant_quantity + "&total_fee=" + total_fee +
            "&country_id=" + country_id + "&document_id=" + document_id + "&document_name=" + document_name +
            "&country_show=" + country_show + "&document_show=" + document_show+ "&arrival_date=" + arrival_date + "&end_date=" + end_date + "&purpose_id=" + purpose_id + "&processing_type=" + processing_type + "&evisa_token=" + evisa_token;


       ///console.log(dataString);



        
        if (validation == '1') {
            $.ajax({
                type: "POST",
                url: "form_first_step",
                data: dataString, 
                cache: false,
                beforeSend: function() {
                    $("#first_submit_load").modal('toggle');
                },
                success: function(html) {
                    $("#first_submit_load").modal('toggle');

                    $("div.first_submit_result").html(html);

                    var result_token = $(".first_submit_result").find(".token").attr("data");
                    $("input[name='evisa_token']").val("").val(result_token);
                    
                    if ($(".first_submit_result > ").hasClass('success')) {
                        window.location = "/" + lang_value + "/apply/personalinfo";
                    }
                    else{
                        if ($(".first_submit_result > ").hasClass('error_applicant_count')) {
                            $("#applicant_count_error").modal('toggle');
                        }

                        var animate_scroll = "0";
                        if ($(".first_submit_result > ").hasClass('error_country')) {
                            $(".dropdown-toggle").addClass('input_error');
                            if (animate_scroll == '0') {
                                $('html, body').animate({
                                    scrollTop: $("select[name='select_country']").offset().top - 20
                                }, 'slow');
                                animate_scroll = "1";
                            }
                        } else {
                            $(".dropdown-toggle").removeClass('input_error');
                        }

                        if ($(".first_submit_result > ").hasClass('error_purpose')) {
                            $(".purpose_error").show('');
                            $(".purpose_error").text('');
                            $(".purpose_error").text($(".first_submit_result").find('.error_purpose').text());

                            if (animate_scroll == '0') {
                                $('html, body').animate({
                                    scrollTop: $("select[name='purpose_type']").offset().top - 20
                                }, 'slow');
                            }
                            animate_scroll1 = "1";

                        } else {
                            $(".purpose_error").hide();
                        }


                        if ($(".first_submit_result > ").hasClass('error_arrival_date')) {
                            alert("Arrival date value isn't true");
                        }


                        if ($(".first_submit_result > ").hasClass('error_document')) {
                            $("select[name='document_type']").addClass('input_error');
                            if (animate_scroll == '0') {
                                $('html, body').animate({
                                    scrollTop: $("select[name='document_type']").offset().top - 20
                                }, 'slow');
                                animate_scroll = "1";
                            }
                        } else {
                            $("select[name='document_type']").removeClass('input_error');
                        }

                        if ($(".first_submit_result > ").hasClass('error_recaptcha')) {
                            $(".recaptcha_error").show('');
                            $(".recaptcha_error").text('');
                            $(".recaptcha_error").text($(".first_submit_result").find('.error_recaptcha').text());
                            if (animate_scroll == '0') {
                                $('html, body').animate({
                                    scrollTop: $(".recaptcha_error").offset().top - 20
                                }, 'slow');
                                animate_scroll = "1";
                            }
                        } else {
                            $(".recaptcha_error").hide();
                        }


                        




                        $("input[name='agreement_check']").on('change', function() {
                            var check_val = $("input[name='agreement_check']:checked").val();
                            if (check_val == '1') {
                                
                            } else {
                                
                            }
                        });


                        $("input[name='hiv_check']").on('change', function() {
                            var check_val = $("input[name='hiv_check']:checked").val();
                            if (check_val == '1') {
                                
                            } else {
                                
                            }
                        });


                    }

                }
            });
        }




    });
    
    var applicant = 1;
    var risk_price = 0;
    var risk_price_usd = 0;
    $("select[name='processing_type']").on("change", function(){


        $("#applicant").trigger("change");
        if($(this).val() == 2){

            var dateMin_urgent = new Date();
            dateMin_urgent.setMinutes(dateMin_urgent.getMinutes() + dateMin_urgent.getTimezoneOffset() - 480);
            dateMin_urgent.setHours(dateMin_urgent.getHours() + 12);

            //Wed Feb 22 2017 05:39:58 GMT+0400 (AZT)
            //alert(dateMin_urgent);
            var hour = dateMin_urgent.getHours();
            var weekday = dateMin_urgent.getDay();
            var weekDays = 0;
            //alert(weekday);
            // if (weekday == '6') {
            //     if (hour >= 13) {
            //         //var weekDays = AddBusinessDays(2);
            //         //var weekDays = AddBusinessDays_for_urgent(2);
            //         var weekDays = 2;
            //     }
            // } else if (weekday == '0') {
            //     //var weekDays = AddBusinessDays(1);
            //     //var weekDays = AddBusinessDays_for_urgent(1);
            //     var weekDays = 1;
            // } else { 
            //     if (hour >= 18) {
            //         //var weekDays = AddBusinessDays(1);
            //         //var weekDays = AddBusinessDays_for_urgent(1);
            //         //var weekDays = 2;
            //     }
            // }
            if (weekday == '6') {
                if (hour >= 13) {
                   // var weekDays = AddBusinessDays(2);
                  var weekDays = 2;
                }
            } else if (weekday == '0') {
                //var weekDays = AddBusinessDays(1);
                var weekDays = 1;
            } else {
                if (hour >= 18) {
                 var weekDays = AddBusinessDays(1);
                }
            }
            //alert(weekDays);

            dateMin_urgent.setDate(dateMin_urgent.getDate() + weekDays);
            //alert(dateMin_urgent);
            
            var today = dateMin_urgent;
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var nm = today.getMonth()+4;
            var xm = today.getMonth();
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd = '0'+dd
            } 

            if(mm<10) {
                mm = '0'+mm
            } 
            if(nm<10) {
                nm = '0'+nm
            } 
            if(xm<10) {
                xm = '0'+xm
            } 

            today_1 = dd + '/' + mm + '/' + yyyy;
            end_today = dd + '/' + nm + '/' + yyyy;

            $('input[name="arrival_date"]').val(today_1);
            $('input[name="arrival_date2"]').val(yyyy+'-'+xm+'-'+dd);
            $('input[name="end_date"]').val(end_today);

            $('.arrival_date1').val(today_1);
            $('.arrival_date1').attr('disabled', 'disabled');

            $('#today').text(dd);
            $('#monthyear').text(month[mm-1]);
            $('#year1').text(yyyy);

            $('#afterday').text(dd);
            $('#aftermonthyear').text(month[nm-1]);
            $('#year2').text(yyyy);

            $('.arrival_date_text').text('');
            $('.arrival_date_text').text(dd+" "+month[mm-1]+" "+yyyy);
        }
        
        if($(this).val() == 1){

            $('.arrival_date1').removeAttr('disabled', 'disabled');
            var today = dateMin;
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var nm = today.getMonth()+4;
            var xm = today.getMonth();
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd = '0'+dd
            } 

            if(mm<10) {
                mm = '0'+mm
            } 
            if(nm<10) {
                nm = '0'+nm
            } 
            if(xm<10) {
                xm = '0'+xm
            } 

            today_1 = dd + '/' + mm + '/' + yyyy;
            end_today = dd + '/' + nm + '/' + yyyy;

            $('input[name="arrival_date"]').val(today_1);
            $('input[name="arrival_date2"]').val(yyyy+'-'+xm+'-'+dd);
            $('input[name="end_date"]').val(end_today);

            $('.arrival_date1').val(today_1);

            $('#today').text(dd);
            $('#monthyear').text(month[mm-1]);
            $('#year1').text(yyyy);

            $('#afterday').text(dd);
            $('#aftermonthyear').text(month[nm-1]);
            $('#year2').text(yyyy);

            $('.arrival_date_text').text(dd+" "+month[mm-1]+" "+yyyy);
        }

        if($(this).val() == 0) $(".cart").hide('slow');

          let processing_type = $("select[name='processing_type'] option:selected").val();
          let counrty_selected = $("select[name='select_country'] option:selected").val();

         if(processing_type>0 && counrty_selected.length>0) $(".cart").show('slow');
        
    });

    $("select[name='applicant']").on("change", function() {

        var risk_price = 0;
        var risk_price_usd = 0;
        var applicant           = $(this).val();

        var visa_fee            = $('select#processing_type option:selected').attr('visa-fee');
        var service_fee         = $('select#processing_type option:selected').attr('service-fee');
        var visa_fee_usd        = $('select#processing_type option:selected').attr('visa-fee-usd');
        var service_fee_usd     = $('select#processing_type option:selected').attr('service-fee-usd');
        var risk_price          = $("select[name='select_country'] option:selected").attr("risk_price");
        var risk_price_usd      = $('select[name="select_country"] option:selected').attr('risk_price_usd');

        // console.log(applicant);
        // console.log(visa_fee);
        // console.log(service_fee);
        // console.log(visa_fee_usd);
        // console.log(service_fee_usd);

        // console.log(risk_price);
        // console.log(risk_price_usd);


        var unit_fee = parseInt(visa_fee)+parseInt(service_fee)+parseInt(risk_price);
        var total_fee = parseInt(unit_fee)*parseInt(applicant);


        var unit_fee_usd = parseInt(visa_fee_usd)+parseInt(service_fee_usd)+parseInt(risk_price_usd);
        var total_fee_usd = parseInt(unit_fee_usd)*parseInt(applicant);

        $('#unit_fee').text(unit_fee);
        $('#unit_fee_usd').text(unit_fee_usd);

        $('#service_unit_fee_usd').text(parseInt(service_fee_usd)+parseInt(risk_price_usd));
        $('#visa_unit_fee_usd').text(visa_fee_usd);

        $('#total_fee').text(total_fee);
        $('#total_fee_usd').text(total_fee_usd);

        $('#total_fees').text(total_fee);
        $('#total_fees_usd').text(total_fee_usd);

    });

    $("#applicant").trigger("change");
        $(".passport_image_load").hide();
    $('.passport_click_ok1').on('click', function(e) {
        e.preventDefault();
        $('#passport_form_modal_with_ok').modal('toggle');
        $("input[name='passport_form']").trigger('click');
    });

    $("input[name='passport_form']").on('change', function() {
        if ($('input[name="passport_form"]').length > 0) {
            var formData = new FormData();
            jQuery.each(jQuery('#upload_passport_form')[0].files, function(i, file) {
                formData.append('post_photo_file1[]', file);
            });
            formData.append('post_photo_submit1', 'post_photo_submit1_value');
            //var evisa_token = $("input[name='evisa_token']").val();
            //formData.append('evisa_token', evisa_token);
             //$(".passport_image_load").show();

            $.ajax({
                url: "upload",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(".passport_image_load").show();
                },
                success: function(data) {
                    $(".passport_image_load").hide();
                    $('.upload_passport_form_result').html(data);

                    var token = $('.upload_passport_form_result').find(".token").attr("data");
                    $("input[name='evisa_token']").val("").val(token);

                    $("div.upload_passport_form_result").children('div').each(function() {

                        if ($(this).hasClass('success_image')) {
                            var img_src = $(this).attr('img_src');
                            $("div.image_passport_form_result").append('<div class="image_item"><img class="fmgpr38 fmgpr62 full_size_passport_image" src="/uploads/' + img_src + '" width="100"><span class="passport_image_item_remove"><i class="fa fa-remove"></i></span></div>');
                            $('#img_upload_trigger').prop('disabled', true);
                        } else if( $(this).hasClass('error_image') ) {
                            alert($('.upload_passport_form_result').find("div.error_image").text());
                        }
                    });


                }
            });

        }
    });


    $("body").on('click', "img.full_size_passport_image", function() {
        var src = $(this).attr("src");
        $("#passport_full_size_image_modal").find("img").attr('src', src);
        $("#passport_full_size_image_modal").modal('toggle');
    });




    $("body").on('click', 'span.passport_image_item_remove', function() {
        var evisa_token = $("input[name='evisa_token']").val();
        var src_img = $(this).parent().find("img.fmgpr38").attr("src");
        var dataString3 = "post_remove_submit=post_remove_submit1&image_src=" + src_img+"&evisa_token="+evisa_token;
        var element = $(this);
        $.ajax({
            type: "POST",
            url: "remove_image",
            data: dataString3,
            cache: false,
            beforeSend: function() {
                $(".passport_image_load").show();
            },
            success: function(html) {
                $(".passport_image_load").hide();
                $("div.remove_passport_image_result").html(html);

                var token = $("div.remove_passport_image_result").find(".token").attr("data");
                $("input[name='evisa_token']").val("").val(token);

                if ($("div.remove_passport_image_result >").hasClass('remove_success')) {
                    $(element).parent().remove();
                    $('#img_upload_trigger').prop('disabled', false);
                } else {
                    //alert("000");
                }
            }
        });

    });




    $(".your_image_load").hide();
    $('.your_click_ok1').on('click', function(e) {
        e.preventDefault();
        $('#your_form_modal_with_ok').modal('toggle');
        $("input[name='your_form']").trigger('click');
    });

    $("input[name='your_form']").on('change', function() {
        if ($('input[name="your_form"]').length > 0) {
            var formData = new FormData();
            jQuery.each(jQuery('#upload_your_form')[0].files, function(i, file) {
                formData.append('post_photo_file1[]', file);
            });
            formData.append('post_photo_submit1', 'post_photo_submit1_value');
            document.write(formData);
            $.ajax({
                url: "upload",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(".your_image_load").show();
                },
                success: function(data) {
                    $(".your_image_load").hide();
                    $('.upload_your_form_result').html(data);
                    $("div.upload_your_form_result").children('div').each(function() {
                        if ($(this).hasClass('success_image')) {
                            var img_src = $(this).attr('img_src');
                            $("div.image_your_form_result").append('<div class="image_item"><img class="fmgpr38 fmgpr62 full_size_your_image" src="/uploads/' + img_src + '" width="100"><span class="your_image_item_remove"><i class="fa fa-remove"></i></span></div>');
                        } else {
                            alert($('.upload_your_form_result').find("div.error_image").text());
                        }
                    });


                }
            });

        }
    });


    $("body").on('click', "img.full_size_your_image", function() {
        var src = $(this).attr("src");
        $("#your_full_size_image_modal").find("img").attr('src', src);
        $("#your_full_size_image_modal").modal('toggle');
    });



    $("body").on('click', 'span.your_image_item_remove', function() {
        var src_img = $(this).parent().find("img.fmgpr38").attr("src");
        var dataString3 = "post_remove_submit=post_remove_submit1&image_src=" + src_img;
        var element = $(this);
        $.ajax({
            type: "POST",
            url: "remove_image",
            data: dataString3,
            cache: false,
            beforeSend: function() {
                $(".your_image_load").show();
            },
            success: function(html) {
                $(".your_image_load").hide();
                $("div.remove_your_image_result").html(html);
                if ($("div.remove_your_image_result >").hasClass('remove_success')) {
                    $(element).parent().remove();
                } else {
                    //alert("000");
                }
            }
        });

    });

        $(".person_date_birth1").datepicker({
        firstDay: 1,
        showAnim: 'clip',
        yearRange: "-100:+0",
        maxDate: d,
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        onSelect: function(dateText) {
            //$(".checkout_date").datepicker("option","minDate",$(".checkin_date").datepicker("getDate",'+1d'));
            $("input[name='person_date_birth']").val(dateText);
            $(this).removeClass("input_error_border");

        }
    });


    $(".person_document_issue_date1").datepicker({
        firstDay: 1,
        showAnim: 'clip',
        yearRange: "-100:+0",
        maxDate: d,
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        onSelect: function(dateText) {
            //$(".checkout_date").datepicker("option","minDate",$(".checkin_date").datepicker("getDate",'+1d'));
            $("input[name='person_document_issue_date']").val(dateText);
            $(this).removeClass("input_error_border");

        }
    });




    $(".person_document_expiry_date1").on("change", function() {
        $("input[name='person_document_expiry_date']").val($(".person_document_expiry_date1").datepicker({
            dateFormat: 'dd-mm-yy'
        }).val());
    });


    if ($("input[name='personal_end_date']").val() != '') {
        var dateObject1 = new Date($("input[name='personal_end_date']").val());
        dateObject1.setMonth(dateObject1.getMonth() + 3);
        $(".person_document_expiry_date1").datepicker({
            firstDay: 1,
            showAnim: 'clip',
            minDate: dateObject1,
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText) {
                //$(".checkout_date").datepicker("option","minDate",$(".checkin_date").datepicker("getDate",'+1d'));
                $("input[name='person_document_expiry_date']").val(dateText);
                $(this).removeClass("input_error_border");

            }
        });
    } else {
        $(".person_document_expiry_date1").datepicker({
            firstDay: 1,
            showAnim: 'clip',
            minDate: d,
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText) {
                //$(".checkout_date").datepicker("option","minDate",$(".checkin_date").datepicker("getDate",'+1d'));
                $("input[name='person_document_expiry_date']").val(dateText);
                $(this).removeClass("input_error_border");

            }
        });
    }

    $(".reaon_area").hide();
    $("input[name='person_visits_check']").on('change', function() {
        if ($("input[name='person_visits_check']").prop('checked') == false) {
            $("input[name='person_visits_check']").val('0');
            $(".reaon_area").hide('slow');
        } else {
            $("input[name='person_visits_check']").val('1');
            $(".reaon_area").show('slow');
        }
    });




    if ($("input[name='page_value']")) {
        var page_value = $("input[name='page_value']").val();
        if (page_value == 'personalinfo') {
            $('html, body').animate({
                scrollTop: $("#bread").offset().top - 20
            }, 'slow');
        }
    }



    $(".four_result").hide();
    $(document).delegate('.person_verify_click', 'click', function() {
        $("#four_check_result_modal").modal('toggle');
        $("#four_submit_load").modal('toggle');

        var verify_surname = $("div.four_check_result").find(".success_check").find(".request_surname").text();
        var verify_other_name = $("div.four_check_result").find(".success_check").find(".request_other_name").text();
        var verify_country_birth = $("div.four_check_result").find(".success_check").find(".request_country_birth").text();
        var verify_place_birth = $("div.four_check_result").find(".success_check").find(".request_place_birth").text();
        var verify_occupation = $("div.four_check_result").find(".success_check").find(".request_occupation").text();
        var verify_country_phone_code = $("div.four_check_result").find(".success_check").find(".request_country_phone_code").text();
        var verify_mobile_number = $("div.four_check_result").find(".success_check").find(".request_mobile_number").text();
        var verify_address = $("div.four_check_result").find(".success_check").find(".request_address").text();
        var verify_email = $("div.four_check_result").find(".success_check").find(".request_email").text();
        var verify_document_expiry_date = $("div.four_check_result").find(".success_check").find(".request_document_expiry_date").text();
        var verify_residence_address = $("div.four_check_result").find(".success_check").find(".request_residence_address").text();
        var verify_visits_check = $("div.four_check_result").find(".success_check").find(".request_visits_check").text();
        var verify_reason = $("div.four_check_result").find(".success_check").find(".request_reason").text();


        var verify_visa_image = [];
        $(".request_visa_image").children(".image_item").each(function() {
            verify_visa_image.push($(this).text());
        });
        var verify_hotel_image = [];
        $(".request_hotel_image").children(".image_item").each(function() {
            verify_hotel_image.push($(this).text());
        });
        var verify_passport_image = [];
        $(".request_passport_image").children(".image_item").each(function() {
            verify_passport_image.push($(this).text());
        });
        var verify_your_image = [];
        $(".request_your_image").children(".image_item").each(function() {
            verify_your_image.push($(this).text());
        });
        var verify_flight_image = [];
        $(".request_flight_image").children(".image_item").each(function() {
            verify_flight_image.push($(this).text());
        });

        var evisa_token = $("input[name='evisa_token']").val();

        var dataString = "four_submit=four_submit1" +
            "&verify_surname=" + verify_surname +
            "&verify_other_name=" + verify_other_name +
            "&verify_country_birth=" + verify_country_birth +
            "&verify_place_birth=" + verify_place_birth +
            "&verify_occupation=" + verify_occupation +
            "&verify_country_phone_code=" + verify_country_phone_code +
            "&verify_mobile_number=" + verify_mobile_number +
            "&verify_address=" + verify_address +
            "&verify_email=" + verify_email +
            "&verify_document_expiry_date=" + verify_document_expiry_date +
            "&verify_residence_address=" + verify_residence_address +
            "&verify_visits_check=" + verify_visits_check +
            "&verify_reason=" + verify_reason +
            "&verify_visa_image=" + verify_visa_image +
            "&verify_hotel_image=" + verify_hotel_image +
            "&verify_passport_image=" + verify_passport_image +
            "&verify_your_image=" + verify_your_image +
            "&verify_flight_image=" + verify_flight_image +
            "&evisa_token=" + evisa_token;

        $.ajax({
            type: "POST",
            url: "form_four_step",
            data: dataString,
            cache: false,
            success: function(html) {
                $("div.four_result").html(html);

                var token = $('div.four_result').find(".token").attr("data");
                $("input[name='evisa_token']").val("").val(token);

                if ($('div.four_result > ').hasClass('save_and_continue_finish')) {
                    var code    = $('input[name="code"]').val();
                    window.location = "/" + lang_value + "/apply/activate/"+code;

                } else if ($('div.four_result > ').hasClass('save_and_continue')) {

                    $("input[name='person_surname']").val('');
                    $("input[name='person_other_name']").val('');
                    $("select[name='person_country_birth']").val('');
                    $("input[name='person_place_birth']").val('');
                    $("select[name='person_occupation']").val('');
                    $("input[name='person_mobile_number']").val('');
                    $("input[name='person_address']").val('');
                    $("input[name='person_email']").val('');
                    $("input[name='person_residence_address']").val('');
                    $("input[name='person_visits_check']:checked").removeAttr("checked");
                    $("input[name='person_reason']").val('');
                    $(".reaon_area").hide();

                    

                    $("input[name='person_document_expiry_date']").val('');
                    $(".person_document_expiry_date1").val('');

                    $("div.upload_visa_form_result > *").remove();
                    $("div.image_visa_form_result > *").remove();
                    $("div.remove_visa_image_result > *").remove();
                    $("#upload_visa_form").val("");


                    $("div.upload_hotel_form_result > *").remove();
                    $("div.image_hotel_form_result > *").remove();
                    $("div.remove_hotel_image_result > *").remove();
                    $("#upload_hotel_form").val("");

                    $("div.upload_passport_form_result > *").remove();
                    $("div.image_passport_form_result > *").remove();
                    $("div.remove_passport_image_result > *").remove();
                    $("#upload_passport_form").val("");

                    $("div.upload_your_form_result > *").remove();
                    $("div.image_your_form_result > *").remove();
                    $("div.remove_your_image_result > *").remove();
                    $("#upload_your_form").val("");

                    $("div.upload_flight_form_result > *").remove();
                    $("div.image_flight_form_result > *").remove();
                    $("div.remove_flight_image_result > *").remove();
                    $("#upload_flight_form").val("");

                    $(".save_continue4").text('');
                    $(".save_continue4").text('Save and  Continue');

                    window.location = "/" + lang_value + "/apply/personalinfo";




                } else if ($('div.four_result > ').hasClass('add_new_person')) {


                    $("input[name='person_surname']").val('');
                    $("input[name='person_other_name']").val('');
                    $("select[name='person_country_birth']").val('');
                    $("select[name='person_place_birth']").val('');
                    $("select[name='person_occupation']").val('');
                    $("input[name='person_mobile_number']").val('');
                    $("input[name='person_address']").val('');
                    $("input[name='person_email']").val('');
                    $("input[name='person_residence_address']").val('');
                    $("input[name='person_visits_check']:checked").removeAttr("checked");
                    $("input[name='person_reason']").val('');
                    $(".reaon_area").hide();


                   

                    $("input[name='person_document_expiry_date']").val('');
                    $(".person_document_expiry_date1").val('');

                    $("div.upload_visa_form_result > *").remove();
                    $("div.image_visa_form_result > *").remove();
                    $("div.remove_visa_image_result > *").remove();
                    $("#upload_visa_form").val("");


                    $("div.upload_hotel_form_result > *").remove();
                    $("div.image_hotel_form_result > *").remove();
                    $("div.remove_hotel_image_result > *").remove();
                    $("#upload_hotel_form").val("");

                    $("div.upload_passport_form_result > *").remove();
                    $("div.image_passport_form_result > *").remove();
                    $("div.remove_passport_image_result > *").remove();
                    $("#upload_passport_form").val("");

                    $("div.upload_your_form_result > *").remove();
                    $("div.image_your_form_result > *").remove();
                    $("div.remove_your_image_result > *").remove();
                    $("#upload_your_form").val("");

                    $("div.upload_flight_form_result > *").remove();
                    $("div.image_flight_form_result > *").remove();
                    $("div.remove_flight_image_result > *").remove();
                    $("#upload_flight_form").val("");


                    $(".save_continue4").text('');
                    $(".save_continue4").text('Add New Person');

                    window.location = "/" + lang_value + "/apply/personalinfo";

                }

            }
        });


    });




    $(".four_check_result").hide();
    //$(".four_submit_load").hide();
    $(document).delegate('.save_continue4', 'click', function() {
        var person_surname = $("input[name='person_surname']").val();
        var person_other_name = $("input[name='person_other_name']").val();
        var person_date_birth = $("input[name='person_date_birth']").val();
        var person_country_birth = $("select[name='person_country_birth']").val();
        var person_place_birth = $("input[name='person_place_birth']").val();
        var person_sex = $("select[name='person_sex']").val();
        var person_occupation = $("select[name='person_occupation']").val();
        var person_phone_number = $("input[name='person_phone_number']").val();
        var person_mobile_number = $("input[name='person_mobile_number']").val();
        var person_country_phone_code = $("select[name='country_phone_code']").val();
        var person_address = $("input[name='person_address']").val();
        var person_email = $("input[name='person_email']").val();
        var person_document_number = $("input[name='person_document_number']").val();
        var person_document_issue_date = $("input[name='person_document_issue_date']").val();
        var person_document_expiry_date = $("input[name='person_document_expiry_date']").val();
        var person_residence_address = $("input[name='person_residence_address']").val();

        if ($("input[name='person_visits_check']:checked").val() == '1' || $("input[name='person_visits_check']:checked").val() == '0') {
            var person_visits_check = $("input[name='person_visits_check']:checked").val();
        } else {
            var person_visits_check = "";
        }
        var person_reason = $("input[name='person_reason']").val();

        var person_visa_image = [];
        $(".image_visa_form_result").children(".image_item").find("img").each(function() {
            var src_string = $(this).attr('src');
            src_string = src_string.replace("/uploads/", "");
            person_visa_image.push(src_string);
        });

        var person_hotel_image = [];
        $(".image_hotel_form_result").children(".image_item").find("img").each(function() {
            var src_string = $(this).attr('src');
            src_string = src_string.replace("/uploads/", "");
            person_hotel_image.push(src_string);
        });


        if ($(".image_passport_form_result").find(".image_item")) {
            var person_passport_image = [];
            $(".image_passport_form_result").children(".image_item").find("img").each(function() {
                var src_string = $(this).attr('src');
                src_string = src_string.replace("/uploads/", "");
                person_passport_image.push(src_string);
            });
        } else {
            var person_passport_image = "";
        }



        var person_your_image = [];
        $(".image_your_form_result").children(".image_item").find("img").each(function() {
            var src_string = $(this).attr('src');
            src_string = src_string.replace("/uploads/", "");
            person_your_image.push(src_string);
        });
        var person_flight_image = [];
        $(".image_flight_form_result").children(".image_item").find("img").each(function() {
            var src_string = $(this).attr('src');
            src_string = src_string.replace("/uploads/", "");
            person_flight_image.push(src_string);
        });

        var evisa_token = $("input[name='evisa_token']").val();

        var dataString = "four_submit=four_submit1" +
            "&person_surname=" + person_surname +
            "&person_other_name=" + person_other_name +
            "&person_country_birth=" + person_country_birth +
            "&person_place_birth=" + person_place_birth +
            "&person_occupation=" + person_occupation +
            "&country_phone_code=" + person_country_phone_code +
            "&person_mobile_number=" + person_mobile_number +
            "&person_address=" + person_address +
            "&person_email=" + person_email +
            "&person_document_expiry_date=" + person_document_expiry_date +
            "&person_residence_address=" + person_residence_address +
            "&person_visits_check=" + person_visits_check +
            "&person_reason=" + person_reason +
            "&person_visa_image=" + person_visa_image +
            "&person_hotel_image=" + person_hotel_image +
            "&person_passport_image=" + person_passport_image +
            "&person_your_image=" + person_your_image +
            "&person_flight_image=" + person_flight_image + 
            "&evisa_token="+evisa_token;
        //alert(dataString);
        $.ajax({
            type: "POST",
            url: "form_check_four_step",
            data: dataString,
            cache: false,
            beforeSend: function() {
                //$(".four_submit_load").show();
                $("#four_submit_load").modal('toggle');
            },
            success: function(html) {
                $("#four_submit_load").modal('toggle');
                //$(".four_submit_load").hide();
                $("div.four_check_result").html(html);

                var token = $("div.four_check_result").find(".token").attr("data");
                $("input[name='evisa_token']").val("").val(token);


                if ($("div.four_check_result > ").hasClass('success_check') && !$("div.four_check_result > ").hasClass('error_passport_image') && !$("div.four_check_result > ").hasClass('error_email2')) {
                    var element1 = $("div.four_check_result").find("div.success_check");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12 > *").remove();

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Surname  </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_surname").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Other names   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_other_name").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Country of birth  </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_country_birth").text() + "</div><br>");

                    //$("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Place of birth  </span></div>");
                    //$("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_place_birth").text() + "</div><br>");

                   

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Occupation   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_occupation").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Mobile number   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_mobile_number").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Address   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_address").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>E-mail address   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_email").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Document expiry date   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_document_expiry_date").text() + "</div><br>");

                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Residence address   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_residence_address").text() + "</div><br>");

                    if ($(element1).find("div.request_visits_check").text() == '1') {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Visits to the occupied territories   </span></div>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>Yes</div><br>");
                    } else if ($(element1).find("div.request_visits_check").text() == '0') {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Visits to the occupied territories   </span></div>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>No</div><br>");
                    }


                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-left'><span>Reason   </span></div>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='pull-right'>" + $(element1).find("div.request_reason").text() + "</div><br>");



                    if ($(element1).find("div.request_visa_image div.image_item").length > 0) {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Attach your visa image.</span><br>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='visa_images'>");
                        $(element1).children("div.request_visa_image").children("div.image_item").each(function() {
                            var text1 = "/uploads/" + $(this).text();
                            $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='image_item'><img class='fmgp38' src='" + text1 + "' width='90'></div>");
                        });
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("</div><br>");
                    }


                    if ($(element1).find("div.request_hotel_image div.image_item").length > 0) {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Attach your hotel image.</span><br>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='hotel_images'>");
                        $(element1).children("div.request_hotel_image").children("div.image_item").each(function() {
                            var text1 = "/uploads/" + $(this).text();
                            $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='image_item'><img class='fmgp38' src='" + text1 + "' width='90'></div>");
                        });
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("</div><br>");
                    }




                    if ($(element1).find("div.request_passport_image div.image_item").length > 0) {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Attach your passport copy.</span><br>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='passport_images'>");
                        $(element1).children("div.request_passport_image").children("div.image_item").each(function() {
                            var text1 = "/uploads/" + $(this).text();
                            $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='image_item'><img class='fmgp38' src='" + text1 + "' width='90'></div>");
                        });
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("</div><br>");
                    }



                    if ($(element1).find("div.request_your_image div.image_item").length > 0) {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Attach your images.</span><br>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='your_images'>");
                        $(element1).children("div.request_your_image").children("div.image_item").each(function() {
                            var text1 = "/uploads/" + $(this).text();
                            $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='image_item'><img class='fmgp38' src='" + text1 + "' width='90'></div>");
                        });
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("</div><br>");
                    }


                    if ($(element1).find("div.request_flight_image div.image_item").length > 0) {
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Attach flight images.</span><br>");
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='flight_images'>");
                        $(element1).children("div.request_flight_image").children("div.image_item").each(function() {
                            var text1 = "/uploads/" + $(this).text();
                            $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<div class='image_item'><img class='fmgp38' src='" + text1 + "' width='90'></div>");
                        });
                        $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("</div><br>");
                    }




                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<hr>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Once you verify, it will not be possible to make any changes. Please, check again your documents, which you have already attached, and make sure that every detail of your documents follows the e-Visa requirements. Please be aware that, in case of lacking or mistaken documents, your application will be invalid and the payment for the invalid application is NOT refundable.</span><br>");
                    //$("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<span>Please note that if you do not respond to the confirmation e-mail within 1 hour, your application will be cancelled.</span><br>");
                    $("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<hr>");




                    //$("#four_check_result_modal").find(".modal-body").find(".col-xs-12").append("<a class='btn btn-default btnstyle1 btn-block person_verify_click'>Verify</a>");


                    $("#four_check_result_modal").modal('toggle');
                } else {

                    var animate_scroll = "0";

                    if ($("div.four_check_result > ").hasClass('error_surname')) {
                        $("input[name='person_surname']").val('');
                        $("input[name='person_surname']").attr('placeholder', 'Enter your Surname');
                        $("input[name='person_surname']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_surname']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_surname']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_other_name')) {
                        $("input[name='person_other_name']").val('');
                        $("input[name='person_other_name']").attr('placeholder', 'Enter your Other Name');
                        $("input[name='person_other_name']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_other_name']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_other_name']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_date_birth')) {
                        $(".person_date_birth1").val('');
                        $(".person_date_birth1").attr('placeholder', 'Enter your Date Birth');
                        $(".person_date_birth1").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $(".person_date_birth1").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $(".person_date_birth1").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_country_birth')) {
                        $("select[name='person_country_birth']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("select[name='person_country_birth']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("select[name='person_country_birth']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_country_birth')) {
                        $("select[name='person_country_phone_code']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("select[name='person_country_phone_code']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("select[name='person_country_phone_code']").removeClass('input_error_border');
                    }

                    

                    if ($("div.four_check_result > ").hasClass('error_place_birth')) {
                        $("input[name='person_place_birth']").val('');
                        $("input[name='person_place_birth']").attr('placeholder', 'Enter your Place Birth');
                        $("input[name='person_place_birth']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_place_birth']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_place_birth']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_sex')) {
                        $("select[name='person_sex']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("select[name='person_sex']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("select[name='person_sex']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_occupation')) {
                        $("select[name='person_occupation']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("select[name='person_occupation']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("select[name='person_occupation']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_phone_number')) {
                        $("input[name='person_phone_number']").val('');
                        $("input[name='person_phone_number']").attr('placeholder', 'Enter your Phone Number');
                        $("input[name='person_phone_number']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_phone_number']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_phone_number']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_mobile_number')) {
                        $("input[name='person_mobile_number']").val('');
                        $("input[name='person_mobile_number']").attr('placeholder', 'Enter your Mobile Number');
                        $("input[name='person_mobile_number']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_mobile_number']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_mobile_number']").removeClass('input_error_border');
                    }


                    if ($("div.four_check_result > ").hasClass('error_address')) {
                        $("input[name='person_address']").val('');
                        $("input[name='person_address']").attr('placeholder', 'Enter your Address');
                        $("input[name='person_address']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_address']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_address']").removeClass('input_error_border');
                    }


                    if ($("div.four_check_result > ").hasClass('error_email')) {
                        $("input[name='person_email']").val('');
                        $("input[name='person_email']").attr('placeholder', 'Enter your Email Address');
                        $("input[name='person_email']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_email']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_email']").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_email2')) {
                        $("input[name='person_email']").val('');
                        $("input[name='person_email']").attr('placeholder', "Email your isn't true");
                        $("input[name='person_email']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_email']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        //$("input[name='person_email']").removeClass('input_error_border');
                    }


                    if ($("div.four_check_result > ").hasClass('error_document_number')) {
                        $("input[name='person_document_number']").val('');
                        $("input[name='person_document_number']").attr('placeholder', 'Enter your Passport Number');
                        $("input[name='person_document_number']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_document_number']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_document_number']").removeClass('input_error_border');
                    }


                    if ($("div.four_check_result > ").hasClass('error_document_issue_date')) {
                        $(".person_document_issue_date1").val('');
                        $(".person_document_issue_date1").attr('placeholder', 'Enter your Passport Issue Date');
                        $(".person_document_issue_date1").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $(".person_document_issue_date1").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $(".person_document_issue_date1").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_document_expiry_date')) {
                        $(".person_document_expiry_date1").val('');
                        $(".person_document_expiry_date1").attr('placeholder', 'Enter your Passport Expiry Date');
                        $(".person_document_expiry_date1").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $(".person_document_expiry_date1").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $(".person_document_expiry_date1").removeClass('input_error_border');
                    }

                    if ($("div.four_check_result > ").hasClass('error_residence_address')) {
                        $("input[name='person_residence_address']").val('');
                        $("input[name='person_residence_address']").attr('placeholder', 'Enter your Residence Address');
                        $("input[name='person_residence_address']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_residence_address']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";


                    } else {
                        $("input[name='person_residence_address']").removeClass('input_error_border');
                    }


                    if ($("div.four_check_result > ").hasClass('error_visits_check')) {
                        $(".visit_check_span").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("p.fmgp793").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";


                    } else {
                        $(".visit_check_span").removeClass('input_error_border');
                    }



                    if ($("div.four_check_result > ").hasClass('error_passport_image')) {
                        $("#passport_not_upload_modal").modal("toggle");
                    }


                    if ($("div.four_check_result > ").hasClass('error_reason')) {
                        $("input[name='person_reason']").val('');
                        $("input[name='person_reason']").attr('placeholder', 'Enter your Reason');
                        $("input[name='person_reason']").addClass('input_error_border');

                        if (animate_scroll == '0') {
                            $('html, body').animate({
                                scrollTop: $("input[name='person_reason']").offset().top - 20
                            }, 'slow');
                        }
                        animate_scroll = "1";

                    } else {
                        $("input[name='person_reason']").removeClass('input_error_border');
                    }




                }


            }
        });

    });



    ///////////////////// PERSONAL INFO CHECK LIVE INPUTS ERROR //////////////////////
    $("input[name='person_surname']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_other_name']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });


    $("select[name='person_country_birth']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_place_birth']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });


    $("select[name='person_sex']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("select[name='person_occupation']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });


    $("input[name='person_phone_number']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });


    $("input[name='person_mobile_number']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_address']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_email']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_document_number']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_residence_address']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    $("input[name='person_reason']").on("change", function() {
        if ($(this).val() != '') {
            $(this).removeClass("input_error_border");
        } else {
            $(this).addClass("input_error_border");
        }
    });

    //////////////// COMPULSORY ///////////////////////
$(".update_form_click").on("click",function(){
    $(".update_form").show();
});



if($("input[name='compulsory_type']").val()=='10' || $("input[name='compulsory_type']").val()=='11'){
    var person_total_count=0;
    $(".persons").find(".person_count").each(function(){
          person_count=$(this).text();
          person_total_count=parseInt(person_total_count)+parseInt(person_count);
    });
       
        if(person_total_count!=''){
        var vehicle_type_string="";
        if(parseInt(person_total_count)>=1 && parseInt(person_total_count)<=3){
          vehicle_type_string="Sedan (1-3 person)";
        }else if(parseInt(person_total_count)>=4 && parseInt(person_total_count)<=6){
          vehicle_type_string="Minivan (4-6 person)";
        }else if(parseInt(person_total_count)>=7 && parseInt(person_total_count)<=15){
          vehicle_type_string="Minibus (7-15 person)";
        }
        $(".total_passenger").find(".vehicle_type").text(vehicle_type_string);
        $("input[name='vehicle_type']").val(vehicle_type_string);
      }

}






$(".update_tour_compulsory_result").hide();
$(".update_compulsory_submit_click3").on('click',function(){

    var validation_comp1 = "0";

    if($("input[name='language']").val()==''){
      $("input[name='language']").addClass("input_error_border");
      validation_comp1 = "0";
    }else{
      $("input[name='language']").removeClass("input_error_border");
      validation_comp1 = "1";
    }

    if($("input[name='compulsory_date_value']").val()==''){
      $(".compulsory_date").addClass("input_error_border");
      validation_comp1 = "0";
    }else{
      $(".compulsory_date").removeClass("input_error_border");
      validation_comp1 = "1";
    }

    if($("select[name='compulsory_time_value']").val()==''){
      $("select[name='compulsory_time_value']").addClass("input_error_border");
      validation_comp1 = "0";
    }else{
      $("select[name='compulsory_time_value']").removeClass("input_error_border");
      validation_comp1 = "1";
    }


    if( validation_comp1 == '1' ){

    var update_compulsory_language=$("select[name='language']").val();
    var update_compulsory_date=$("input[name='compulsory_date_value']").val();
    var update_compulsory_time=$("select[name='compulsory_time_value']").val();

    var update_application_id=$("input[name='application']").val();
    var update_service_type=$("input[name='compulsory_type']").val();
    var update_reservation_id=$("input[name='reservation']").val();




    var dataString="update_tour_compulsory=update_tour_compulsory1"+
    "&compulsory_language="+update_compulsory_language+
    "&compulsory_date="+update_compulsory_date+
    "&compulsory_time="+update_compulsory_time+
    "&application_id="+update_application_id+
    "&service_type="+update_service_type+
    "&reservation_id="+update_reservation_id;

    $.ajax({
              type: "POST",
              url: "https://evisa.com.az/en/apply/update_compulsory_tour",
              data: dataString,
              cache: false, 
              beforeSend:function(){
                $("#first_submit_load1").modal("toggle");
              },
              success: function(html){
                $("#first_submit_load1").modal("toggle");
                $("div.update_tour_compulsory_result").html(html);
                if($("div.update_tour_compulsory_result > ").hasClass('success')){
                    
                      $(".update_form").hide();

                     $("select[name='language']").val('');
                     $(".compulsory_date").val('');
                     $("input[name='compulsory_date_value']").val('');
                     $("select[name='compulsory_time_value']").val('');



                     var updated_compulsory_date_time=$("div.update_tour_compulsory_result").find(".success").attr("compulsory_at");
                     var updated_compulsory_language=$("div.update_tour_compulsory_result").find(".success").attr("language");
                     if(updated_compulsory_language=='en'){
                      var updated_compulsory_language_string="English";
                     }else if(updated_compulsory_language=='ru'){
                      var updated_compulsory_language_string="Russian";
                     }
                     $(".tour_table_201").find(".compulsory_date_time").text('').text(updated_compulsory_date_time);
                     $(".tour_table_201").find(".compulsory_language").text('').text(updated_compulsory_language_string);
                     

                }

              }
            });

    }


});
 




$("div.compulsory_ref_check_result").hide();
$(".ref_code_click").on("click",function(){
  if( $("input[name='ref_code']").val()!=''  ){ 
      var ref_code=$("input[name='ref_code']").val();
      if(ref_code.length<=8){



          var compulsory_type=$("input[name='compulsory_type']").val();
          var dataString3="compulsory_ref_check=compulsory_ref_check1&ref_code="+ref_code+'&compulsory_type='+compulsory_type;
          $.ajax({
              type: "POST",
              url: "https://evisa.com.az/en/apply/check_ref_code",
              data: dataString3,
              cache: false, 
              success: function(html){
                $("div.compulsory_ref_check_result").html(html);
                if($("div.compulsory_ref_check_result > ").hasClass('success')){
                  var application_ref=$(".compulsory_ref_check_result").find(".success").attr('application_ref_code');
                  var person_count=$(".compulsory_ref_check_result").find(".success").attr('person_count');
                  var application_id=$(".compulsory_ref_check_result").find(".success").attr('application_id');
                  var service_order_id=$(".compulsory_ref_check_result").find(".success").attr('service_order_id');
                  var code=$(".compulsory_ref_check_result").find(".success").attr('code');
                  var email=$(".compulsory_ref_check_result").find(".success").attr('email');
                  var name=$(".compulsory_ref_check_result").find(".success").attr('name');
                  var surname=$(".compulsory_ref_check_result").find(".success").attr('surname');


                  
                  if( !$("table.persons").find("tbody > ").hasClass(application_id)  ){
                  $("table.persons").find("tbody").append("<tr class='fmgp784 "+application_id+"'><td class='fmgp785'>"+
                    application_ref+"<input type='hidden' name='ref[]' value='"+application_ref+"'>"+
                    "<input type='hidden' name='application_id[]' value='"+application_id+"'>"+
                    "<input type='hidden' name='service_order_id[]' value='"+service_order_id+"'>"+
                    "<input type='hidden' name='code[]' value='"+code+"'>"+
                    "<input type='hidden' name='email[]' value='"+email+"'>"+
                    "<input type='hidden' name='name[]' value='"+name+"'>"+
                    "<input type='hidden' name='surname[]' value='"+surname+"'>"+
                    "</td><td class='fmgp785'><p class='person_count margin-bottom-0'>"+
                    person_count+"</p></td><td class='fmgp785'><a class='btn btn-danger btn-block compulsory_remove_person'>Remove</a></td></tr>");
                    
                    var person_total_count=0;
                    $(".persons").find(".person_count").each(function(){
                          person_count=$(this).text();
                          person_total_count=parseInt(person_total_count)+parseInt(person_count);
                    });
                      if(person_total_count!=''){
                          var vehicle_type_string="";
                        if(parseInt(person_total_count)>=1 && parseInt(person_total_count)<=3){
                            vehicle_type_string="Sedan (1-3 person)";
                        }else if(parseInt(person_total_count)>=4 && parseInt(person_total_count)<=6){
                            vehicle_type_string="Minivan (4-6 person)";
                        }else if(parseInt(person_total_count)>=7 && parseInt(person_total_count)<=15){
                            vehicle_type_string="Minibus (7-15 person)";
                        }
                        $(".total_passenger").find(".vehicle_type").text(vehicle_type_string);
                        $("input[name='vehicle_type']").val(vehicle_type_string);
                        $(".total_passenger").find(".total_person_count").text('').text(person_total_count);
                        $("input[name='total_person_count']").val('').val(person_total_count);
                      }


                    $("input[name='ref_code']").val('');
                  }else{
                    var error_message="This Refence code exists on table";
                    $("#compulsory_ref_code_error").find(".modal-body > *").remove();
                    $("#compulsory_ref_code_error").find(".modal-body").append("<p>"+error_message+"</p>");
                    $("#compulsory_ref_code_error").modal("toggle");
                    $("input[name='ref_code']").val('');
                  }

                }else if($("div.compulsory_ref_check_result > ").hasClass('error')){
                    var error_message=$("div.compulsory_ref_check_result").find(".error").text();
                    $("#compulsory_ref_code_error").find(".modal-body > *").remove();
                    $("#compulsory_ref_code_error").find(".modal-body").append("<p>"+error_message+"</p>");
                    $("#compulsory_ref_code_error").modal("toggle");
                }
              }
            });





      }else{
        //alert("error");
      }
  }
});



$("body").delegate(".compulsory_remove_person","click",function(){
    $(this).parent().parent().remove();

    var person_total_count=0;
    $(".persons").find(".person_count").each(function(){
                              person_count=$(this).text();
                              person_total_count=parseInt(person_total_count)+parseInt(person_count);
                        });
                      if(person_total_count!=''){
                          var vehicle_type_string="";
                        if(parseInt(person_total_count)>=1 && parseInt(person_total_count)<=3){
                            vehicle_type_string="Sedan (1-3 person)";
                        }else if(parseInt(person_total_count)>=4 && parseInt(person_total_count)<=6){
                            vehicle_type_string="Minivan (4-6 person)";
                        }else if(parseInt(person_total_count)>=7 && parseInt(person_total_count)<=15){
                            vehicle_type_string="Minibus (7-15 person)";
                        }
                        $(".total_passenger").find(".vehicle_type").text(vehicle_type_string);
                        $("input[name='vehicle_type']").val(vehicle_type_string);
                        $(".total_passenger").find(".total_person_count").text('').text(person_total_count);
                        $("input[name='total_person_count']").val('').val(person_total_count);
                      }

});




$(".update_one_way_compulsory_result").hide();
$(".update_compulsory_submit_click").on('click',function(){

var update_compulsory_date_value=$("input[name='update_compulsory_date_value']").val();
var update_compulsory_time_value=$("input[name='update_compulsory_time_value']").val();
var update_ticket_src=$("input[name='ticket_src']").val();

var update_pick_up=$("input[name='update_pick_up']").val();
var update_drop_off=$("input[name='update_drop_off']").val();
var update_title=$("select[name='update_title']").val();
var update_firstname=$("input[name='update_firstname']").val();
var update_lastname=$("input[name='update_lastname']").val();
var update_country_code=$("select[name='update_country_code']").val();
var update_mobile_number=$("input[name='update_mobile_number']").val();
var update_reservation_id=$("input[name='update_reservation_id']").val();
var update_pessenger_count=$("input[name='update_pessenger_count']").val();

var update_application_id =$("input[name='update_application_id']").val();
var update_compulsory_id =$("input[name='update_compulsory_id']").val();
var update_type_id=$("input[name='update_type_id']").val();
var update_service_order=$("input[name='update_service_order']").val();
var update_code =$("input[name='update_code']").val();
var update_email=$("input[name='update_email']").val();
var update_name=$("input[name='update_name']").val();
var update_surname=$("input[name='update_surname']").val();
var update_compulsory_at=$("input[name='update_compulsory_at']").val();
var update_lang=$("input[name='update_lang']").val();


if($("input[name='update_compulsory_date_value']").val()==''){
  $(".compulsory_date").addClass("input_error_border");
}else{
  $(".compulsory_date").removeClass("input_error_border");
}

if($("input[name='update_compulsory_time_value']").val()==''){
  $("input[name='compulsory_time']").addClass("input_error_border");
}else{
  $("input[name='compulsory_time']").removeClass("input_error_border");
}

if($("input[name='ticket_src']").val()==''){
  $(".compulsory_flight_ticket_click").addClass("input_error_border");
}else{
  $(".compulsory_flight_ticket_click").removeClass("input_error_border");
}

if($("input[name='update_pick_up']").val()==''){
  $("input[name='update_pick_up']").addClass("input_error_border");
}else{
  $("input[name='update_pick_up']").removeClass("input_error_border");
}

if($("input[name='update_drop_off']").val()==''){
  $("input[name='update_drop_off']").addClass("input_error_border");
}else{
  $("input[name='update_drop_off']").removeClass("input_error_border");
}

if($("select[name='update_title']").val()==''){
  $("select[name='update_title']").addClass("input_error_border");
}else{
  $("select[name='update_title']").removeClass("input_error_border");
}

if($("input[name='update_firstname']").val()==''){
  $("input[name='update_firstname']").addClass("input_error_border");
}else{
  $("input[name='update_firstname']").removeClass("input_error_border");
}

if($("input[name='update_lastname']").val()==''){
  $("input[name='update_lastname']").addClass("input_error_border");
}else{
  $("input[name='update_lastname']").removeClass("input_error_border");
}

if($("select[name='update_country_code']").val()==''){
  $("select[name='update_country_code']").addClass("input_error_border");
}else{
  $("select[name='update_country_code']").removeClass("input_error_border");
}

if($("input[name='update_mobile_number']").val()==''){
  $("input[name='update_mobile_number']").addClass("input_error_border");
}else{
  $("input[name='update_mobile_number']").removeClass("input_error_border");
}


 var dataString="update_one_way_compulsory=update_one_way_compulsory1&pick_up="+update_pick_up+"&drop_off="+update_drop_off+
 "&title="+update_title+"&firstname="+update_firstname+"&lastname="+update_lastname+"&country_code="+update_country_code+
 "&mobile_number="+update_mobile_number+"&reservation_id="+update_reservation_id+"&pessenger_count="+update_pessenger_count+
 "&application_id="+update_application_id+"&compulsory_id="+update_compulsory_id+
 "&type_id="+update_type_id+"&service_order="+update_service_order+
 "&code="+update_code+"&email="+update_email+"&name="+update_name+"&surname="+update_surname+
"&lang="+update_lang+"&compulsory_date_value="+update_compulsory_date_value+"&compulsory_time_value="+update_compulsory_time_value+
"&ticket_src="+update_ticket_src;

      $.ajax({
              type: "POST",
              url: "https://evisa.com.az/en/apply/update_compulsory_one_way",
              data: dataString,
              cache: false, 
              beforeSend:function(){
                $("#first_submit_load1").modal("toggle");
              },
              success: function(html){
                $("#first_submit_load1").modal("toggle");
                $("div.update_one_way_compulsory_result").html(html);
                if($("div.update_one_way_compulsory_result > ").hasClass('success')){
                    
                    $(".update_form").hide();

                    var updated_compulsory_at=$("div.update_one_way_compulsory_result").find('.success').attr("compulsory_at");
                    var updated_pickup_loc=$("div.update_one_way_compulsory_result").find('.success').attr("pickup_loc");
                    var updated_dropoff_loc=$("div.update_one_way_compulsory_result").find('.success').attr("dropoff_loc");
                    var updated_full_name=$("div.update_one_way_compulsory_result").find('.success').attr("full_name");
                    var updated_mobile_number=$("div.update_one_way_compulsory_result").find('.success').attr("mobile_number");

                    $(".one_way_table_201").find(".updated_compulsory_at").text('').text(updated_compulsory_at);
                    $(".one_way_table_201").find(".updated_pickup_loc").text('').text(updated_pickup_loc);
                    $(".one_way_table_201").find(".updated_dropoff_loc").text('').text(updated_dropoff_loc);
                    $(".one_way_table_201").find(".updated_full_name").text('').text(updated_full_name);
                    $(".one_way_table_201").find(".updated_mobile_number").text('').text(updated_mobile_number);


                    $("input[name='update_compulsory_date_value']").val('');
                    $(".update_compulsory_date").val('');
                    $("input[name='update_compulsory_time_value']").val('');
                    $("input[name='update_compulsory_time']").val('');
                    $("input[name='ticket_src']").val('');
                    $(".image_compulsory_ticket_form_result > *").remove();

                    $("input[name='update_pick_up']").val('');
                    $("input[name='update_drop_off']").val('');
                    $("select[name='update_title']").val('');
                    $("input[name='update_firstname']").val('');
                    $("input[name='update_lastname']").val('');
                    $("select[name='update_country_code']").val('');
                    $("input[name='update_mobile_number']").val('');
                }

              }
            });

});







$(".update_two_way_compulsory_result").hide();
$(".update_compulsory_submit_click2").on('click',function(){

var update_compulsory_arrival_date_value=$("input[name='update_compulsory_date_value1']").val();
var update_compulsory_arrival_time_value=$("input[name='update_compulsory_time_value1']").val();
var update_arrival_pick_up=$("input[name='update_pick_up1']").val();
var update_arrival_drop_off=$("input[name='update_drop_off1']").val();

var update_compulsory_departure_date_value=$("input[name='update_compulsory_date_value2']").val();
var update_compulsory_departure_time_value=$("input[name='update_compulsory_time_value2']").val();
var update_departure_pick_up=$("input[name='update_pick_up2']").val();
var update_departure_drop_off=$("input[name='update_drop_off2']").val();

var update_ticket_src=$("input[name='ticket_src']").val();


var update_title=$("select[name='update_title']").val();
var update_firstname=$("input[name='update_firstname']").val();
var update_lastname=$("input[name='update_lastname']").val();
var update_country_code=$("select[name='update_country_code']").val();
var update_mobile_number=$("input[name='update_mobile_number']").val();
var update_reservation_id=$("input[name='update_reservation_id']").val();
var update_pessenger_count=$("input[name='update_pessenger_count']").val();

var update_application_id =$("input[name='update_application_id']").val();
var update_compulsory_id =$("input[name='update_compulsory_id']").val();
var update_service_order=$("input[name='update_service_order']").val();
var update_code =$("input[name='update_code']").val();
var update_email=$("input[name='update_email']").val();
var update_name=$("input[name='update_name']").val();
var update_surname=$("input[name='update_surname']").val();
var update_lang=$("input[name='update_lang']").val();


if($("input[name='update_compulsory_date_value1']").val()==''){
  $(".update_compulsory_date1").addClass("input_error_border");
}else{
  $(".update_compulsory_date1").removeClass("input_error_border");
}

if($("input[name='update_compulsory_time_value1']").val()==''){
  $("input[name='update_compulsory_time1']").addClass("input_error_border");
}else{
  $("input[name='update_compulsory_time1']").removeClass("input_error_border");
}

if($("input[name='update_compulsory_date_value2']").val()==''){
  $(".update_compulsory_date2").addClass("input_error_border");
}else{
  $(".update_compulsory_date2").removeClass("input_error_border");
}

if($("input[name='update_compulsory_time_value2']").val()==''){
  $("input[name='update_compulsory_time2']").addClass("input_error_border");
}else{
  $("input[name='update_compulsory_time2']").removeClass("input_error_border");
}

if($("input[name='update_pick_up1']").val()==''){
  $("input[name='update_pick_up1']").addClass("input_error_border");
}else{
  $("input[name='update_pick_up1']").removeClass("input_error_border");
}

if($("input[name='update_drop_off1']").val()==''){
  $("input[name='update_drop_off1']").addClass("input_error_border");
}else{
  $("input[name='update_drop_off1']").removeClass("input_error_border");
}

if($("input[name='update_pick_up2']").val()==''){
  $("input[name='update_pick_up2']").addClass("input_error_border");
}else{
  $("input[name='update_pick_up2']").removeClass("input_error_border");
}

if($("input[name='update_drop_off2']").val()==''){
  $("input[name='update_drop_off2']").addClass("input_error_border");
}else{
  $("input[name='update_drop_off2']").removeClass("input_error_border");
}



if($("input[name='ticket_src']").val()==''){
  $(".compulsory_flight_ticket_click").addClass("input_error_border");
}else{
  $(".compulsory_flight_ticket_click").removeClass("input_error_border");
}



if($("select[name='update_title']").val()==''){
  $("select[name='update_title']").addClass("input_error_border");
}else{
  $("select[name='update_title']").removeClass("input_error_border");
}

if($("input[name='update_firstname']").val()==''){
  $("input[name='update_firstname']").addClass("input_error_border");
}else{
  $("input[name='update_firstname']").removeClass("input_error_border");
}

if($("input[name='update_lastname']").val()==''){
  $("input[name='update_lastname']").addClass("input_error_border");
}else{
  $("input[name='update_lastname']").removeClass("input_error_border");
}

if($("select[name='update_country_code']").val()==''){
  $("select[name='update_country_code']").addClass("input_error_border");
}else{
  $("select[name='update_country_code']").removeClass("input_error_border");
}

if($("input[name='update_mobile_number']").val()==''){
  $("input[name='update_mobile_number']").addClass("input_error_border");
}else{
  $("input[name='update_mobile_number']").removeClass("input_error_border");
}


 var dataString="update_two_way_compulsory=update_two_way_compulsory1&pick_up="+
 "&compulsory_arrival_date_value="+update_compulsory_arrival_date_value+
 "&compulsory_arrival_time_value="+update_compulsory_arrival_time_value+
 "&arrival_pick_up="+update_arrival_pick_up+
 "&arrival_drop_off="+update_arrival_drop_off+
 "&compulsory_departure_date_value="+update_compulsory_departure_date_value+
 "&compulsory_departure_time_value="+update_compulsory_departure_time_value+
 "&departure_pick_up="+update_departure_pick_up+
 "&departure_drop_off="+update_departure_drop_off+
 "&ticket_src="+update_ticket_src+
 "&title="+update_title+
 "&firstname="+update_firstname+
 "&lastname="+update_lastname+
 "&country_code="+update_country_code+
 "&mobile_number="+update_mobile_number+
 "&reservation_id="+update_reservation_id+
 "&pessenger_count="+update_pessenger_count+
 "&application_id="+update_application_id+
 "&compulsory_id="+update_compulsory_id+
 "&service_order="+update_service_order+
 "&code="+update_code+
 "&email="+update_email+
 "&name="+update_name+
 "&surname="+update_surname+
 "&lang="+update_lang;
      $.ajax({
              type: "POST",
              url: "https://evisa.com.az/en/apply/update_compulsory_two_way",
              data: dataString,
              cache: false, 
              beforeSend:function(){
                $("#first_submit_load1").modal("toggle");
              },
              success: function(html){
                $("#first_submit_load1").modal("toggle");
                $("div.update_two_way_compulsory_result").html(html);
                if($("div.update_two_way_compulsory_result > ").hasClass('success')){
                    
                $(".update_form").hide();

                var updated_arrival_compulsoryAt=$("div.update_two_way_compulsory_result").find(".success").attr("arrival_compulsoryAt");
                var updated_departure_compulsoryAt=$("div.update_two_way_compulsory_result").find(".success").attr("departure_compulsoryAt");
                var updated_arrival_pick_up=$("div.update_two_way_compulsory_result").find(".success").attr("arrival_pick_up");
                var updated_departure_pick_up=$("div.update_two_way_compulsory_result").find(".success").attr("departure_pick_up");
                var updated_arrival_drop_off=$("div.update_two_way_compulsory_result").find(".success").attr("arrival_drop_off");
                var updated_departure_drop_off=$("div.update_two_way_compulsory_result").find(".success").attr("departure_drop_off");
                var updated_full_name=$("div.update_two_way_compulsory_result").find(".success").attr("full_name");
                var updated_mobile_number=$("div.update_two_way_compulsory_result").find(".success").attr("mobile_number");
                
                $(".two_way_table_201").find(".updated_arrival_compulsoryAt").text('').text(updated_arrival_compulsoryAt);
                $(".two_way_table_201").find(".updated_departure_compulsoryAt").text('').text(updated_departure_compulsoryAt);
                $(".two_way_table_201").find(".updated_arrival_pick_up").text('').text(updated_arrival_pick_up);
                $(".two_way_table_201").find(".updated_departure_pick_up").text('').text(updated_departure_pick_up);
                $(".two_way_table_201").find(".updated_arrival_drop_off").text('').text(updated_arrival_drop_off);
                $(".two_way_table_201").find(".updated_departure_drop_off").text('').text(updated_departure_drop_off);
                $(".two_way_table_201").find(".updated_full_name").text('').text(updated_full_name);
                $(".two_way_table_201").find(".updated_mobile_number").text('').text(updated_mobile_number);
                    
                    $("input[name='update_compulsory_date_value1']").val('');
                    $(".update_compulsory_date1").val('');
                    $("input[name='update_compulsory_time_value1']").val('');
                    $("input[name='update_compulsory_time1']").val('');

                    $("input[name='update_compulsory_date_value2']").val('');
                    $(".update_compulsory_date2").val('');
                    $("input[name='update_compulsory_time_value2']").val('');
                    $("input[name='update_compulsory_time2']").val('');

                    $("input[name='update_pick_up1']").val('');
                    $("input[name='update_drop_off1']").val('');

                    $("input[name='update_pick_up2']").val('');
                    $("input[name='update_drop_off2']").val('');

                    $("input[name='ticket_src']").val('');
                    $(".image_compulsory_ticket_form_result > *").remove();
                    $("select[name='update_title']").val('');
                    $("input[name='update_firstname']").val('');
                    $("input[name='update_lastname']").val('');
                    $("select[name='update_country_code']").val('');
                    $("input[name='update_mobile_number']").val('');
                }

              }
            });

});



var request_link=$("input[name='request_link']").val();
var country_type=$("input[name='country_type']").val();

if(request_link=='compulsory'){


   



  $("select[name='language']").on('change',function(){
    var this_value=$(this).val();




    if(this_value=='en'){
    
        $("select[name='compulsory_time_value']").find("option").remove();
        $("select[name='compulsory_time_value']").append("<option value='11:00'>11:00</option>");
        $("select[name='compulsory_time_value']").append("<option value='13:00'>13:00</option>");
        $("select[name='compulsory_time_value']").append("<option value='15:00'>15:00</option>");





    }



  });



}

$('#compulsory_time, .compulsory_time').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value']").val(timeText);
  }
});    

$('#compulsory_time1, .compulsory_time1').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value1']").val(timeText);
  }
});

$('#compulsory_time2, .compulsory_time2').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value2']").val(timeText);
  }
});   


$('#update_compulsory_time, .update_compulsory_time').timepicker({
  onSelect: function(timeText){
    $("input[name='update_compulsory_time_value']").val(timeText);
  }
});  

$('#update_compulsory_time1, .update_compulsory_time1').timepicker({
  onSelect: function(timeText){
    $("input[name='update_compulsory_time_value1']").val(timeText);
  }
});  

$('#update_compulsory_time2, .update_compulsory_time2').timepicker({
  onSelect: function(timeText){
    $("input[name='update_compulsory_time_value2']").val(timeText);
  }
});  



$('#compulsory_time, .compulsory_time').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value']").val(timeText);
  }
});    

$('.compulsory_time1').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value1']").val(timeText);
  }
});

$('.compulsory_time2').timepicker({
  onSelect: function(timeText){
    $("input[name='compulsory_time_value2']").val(timeText);
  }
});       

//-240
//var d2 = new Date();
//var n = d2.getMinutes() + d2.getTimezoneOffset() - 420;

var d = new Date();
d.setMinutes(d.getMinutes() + d.getTimezoneOffset() -480);
d.setHours(d.getHours() + 12);
//alert(d);
//Wed Feb 22 2017 04:24:27 GMT+0400 (AZT)



$( ".update_compulsory_date1" ).datepicker({
  firstDay: 1,
  minDate : "+1",
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='update_compulsory_date_value1']").val(dateText);
      }
    });

$( ".update_compulsory_date2" ).datepicker({
  firstDay: 1,
  minDate : "+1",
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='update_compulsory_date_value2']").val(dateText);
      }
    });





$( ".update_compulsory_date" ).datepicker({
  firstDay: 1,
  minDate : "+1",
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='update_compulsory_date_value']").val(dateText);
      }
    });






$( ".compulsory_date1" ).datepicker({
  firstDay: 1,
  minDate: dateMin_for_compulsory,
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='compulsory_date_value1']").val(dateText);
      }
    }).datepicker('setDate', $("input[name='compulsory_date_value1']").val());

$( ".compulsory_date2" ).datepicker({
  firstDay: 1,
  minDate: dateMin_for_compulsory,
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='compulsory_date_value2']").val(dateText);
      }
    }).datepicker('setDate', $("input[name='compulsory_date_value2']").val());



$( ".compulsory_date" ).datepicker({
  firstDay: 1,
  minDate: dateMin_for_compulsory,
  showAnim: 'clip',
  dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      onSelect: function(dateText) {
            $("input[name='compulsory_date_value']").val(dateText);
      }
    }).datepicker('setDate', $("input[name='compulsory_date_value']").val());
//$("input[name='compulsory_date_value']").val($('.compulsory_date').datepicker({ dateFormat: 'dd/mm/yyyy' }).val());


$(".compulsory_ticket_image_load").hide();
$('.compulsory_flight_ticket_click').on('click', function(e) {
    e.preventDefault();
     $("input[name='compulsory_ticket_form']").trigger('click');
});

$("input[name='compulsory_ticket_form']").on('change', function(){
      if($('input[name="compulsory_ticket_form"]').length>0){
        var formData = new FormData();
        jQuery.each(jQuery('#upload_compulsory_ticket_form')[0].files, function(i, file) {
        formData.append('post_photo_file2[]', file);
        });        
        formData.append('post_photo_submit2','post_photo_submit2_value');
        $.ajax({
            url: "/en/apply/upload2",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $(".compulsory_ticket_image_load").show();
            },
            success:function(data){
                $(".compulsory_ticket_image_load").hide();
                $('.upload_compulsory_ticket_form_result').html(data);
                $("div.upload_compulsory_ticket_form_result").children('div').each(function (){
                      if($(this).hasClass('success_file')){
                          var file_src=$(this).attr('file_src');
                  $("div.image_compulsory_ticket_form_result").append('<div class="file_item"><a target="_blank" href="/uploads/'+file_src+'"><i class="fa fa-file fa-lg">   Show File</i></a></div>');
                      $("input[name='ticket_src']").val('').val(file_src);

                      }else{
                        alert($('.upload_compulsory_ticket_form_result').find("div.error_file").text());
                      }
                  });


            }
        });

      }
  });
    

    //check if it is urgent visa or not


    $("select[name='processing_type']").trigger("change"); 



});