<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetTitle("Заявление о предоставлении платежного документа за ЖКУ в электронном виде");
?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="st.css" />
    <link rel="stylesheet" href="corstyle.css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">-->
    <style>


        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #lic {
            width: 65%;
        }

        /* bootstrap-font.css | http://192.168.0.55:8080/bitrix/templates/corp_sgrc_2014_inside_s2/bootstrap-font.css */

        .form-control {
            /* margin: 3px; */
            margin: 1px;
            display: initial;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pko {
            /* margin: 3%; */
            margin: 2%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(7) > div:nth-child(1) > span:nth-child(3) {
            /* margin: -3%; */
            margin: -2%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.d-flex:nth-child(6) {
            margin: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(7) > div:nth-child(1) {
            margin-top: -3%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.mb-2:nth-child(8) {
            margin-top: -2%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #ar {
            margin-top: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(9) > div:nth-child(1) {
            margin-top: 1%;
        }

        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        .form-control {
            /* margin: 1px; */
            margin-top: 3px;
            margin-left: 0%;
        }

        div.receipt-by-email-row:nth-child(7) > div:nth-child(1) {
            /* margin-top: -3%; */
            margin-top: -2%;
        }

        /* bootstrap-font.css | http://192.168.0.55:8080/bitrix/templates/corp_sgrc_2014_inside_s2/bootstrap-font.css */

        input, button, select, textarea {
            margin: ;
            margin-left: 0%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pb {
            /* width: 40%; */
            width: 66%;
            margin-left: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pke {
            /* width: 60%; */
            width: 66%;
            margin-left: 3%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #nh {
            float: left;
            width: 49%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        input.form-control:nth-child(5) {
            width: 49%;
        }


        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        input.form-control:nth-child(5) {
            /* width: 75%; */
            width: 74%;
        }

        #ar {
            width: 99%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pb {
            /* width: 40%; */
            width: 65%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pke {
            /* width: 60%; */
            width: 65%;
            margin-left: 3%;
        }

        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        input.form-control:nth-child(5) {
            /* width: 75%; */
            width: 74%;
        }

        #ar {
            width: 99%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pb {
            /* width: 40%; */
            width: 65%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #pke {
            /* width: 60%; */
            width: 65%;
            margin-left: 3%;
        }

        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        input.form-control:nth-child(5) {
            /* width: 74%; */
            width: 52%;
        }

        #nh {
            /* width: 25%; */
            width: 47%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        .col-12 {
            padding: 3%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.mb-1:nth-child(3) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(5) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(7) > div:nth-child(1) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(8) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        .vtInfoBlockBody > div:nth-child(1) > p:nth-child(1) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #toSent {
            padding: 1%;
            margin: 2%;
            width: 22%;
            background-color: darkgrey;
            color: honeydew;
        }


        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        .col-12 {
            padding: 3%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.mb-1:nth-child(3) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(5) {
            padding: 0 1% 1% 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(7) > div:nth-child(1) {
            padding: 0 1% 0 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.receipt-by-email-row:nth-child(8) {
            padding: 0 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        .vtInfoBlockBody > div:nth-child(1) > p:nth-child(1) {
            padding: 1%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #toSent {
            padding: 1%;
            margin: 2%;
            width: 22%;
            background-color: darkgrey;
            color: honeydew;
        }

        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        div.d-flex:nth-child(6) {
            /* margin: 1%; */
            margin: 0 1% 1% 1%;
        }

        /* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #lic {
            width: 100%;
        }

        /* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

        #ap {
            width: 100%;
        }


/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#ph {
  width: 100%;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#lic {
  width: 24%;
  float: left;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#go {
  width: 25%;
  float: left;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#st {
  width: 28%;
  float: left;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#nh {
  width: 10%;
  float: left;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#em {
  /* width: 30%; */
  width: 29%;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

div.mb-1:nth-child(3) > div:nth-child(1) > input:nth-child(5) {
  width: 12%;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

div.d-flex:nth-child(6) {
  padding: 2% 0 0 0;
}

/* Элемент | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#ps {
  /* width: 20%; */
  /* padding: 0 0 0 1%; */
  width: 15%;
  margin: 0 0 0 6%;
}


/* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#lic {
  /* width: 24%; */
  width: 21%;
}

#nh {
  /* width: 10%; */
  width: 12%;
}

#go {
  /* width: 25%; */
  width: 26%;
}



/* Inline таблица стилей #14 | http://192.168.0.55:8080/lichnyy-kabinet/lichnyy-kabinet-forma-email/ */

#lic {
  /* width: 21%; */
  width: 8em;
}

#st {
  /* width: 28%; */
  width: 16em;
}

#nh {
  /* width: 12%; */
  width: 13%;
}



    </style>

    <div class="receipt-by-email-row mb-4">

        <!--    <form id="userData">-->

        <div class="card mt-4 shadow">
            <div class="card-body" style="background: #f0f0f0;">
                <!--                <form  action=<?//=$processing?> method="post" autocomplete="false">-->
                <form id="userData">
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-6">
                            <div class="mb-2">АО "СГРЦ"</div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="mr-2">От собственника помещения:</span>
                                <input id="sur" class="form-control" type="text" name="last_name" value="" required placeholder="Фамилия " onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                                <input id="nam" class="form-control" type="text" name="first_name" value="" required placeholder="Имя " onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                                <input id="ot" class="form-control" type="text" name="second_name" value="" required placeholder="Отчество " onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                                <input id="ph" class="form-control" type="text" name="phone" value="" required placeholder="контактный телефон" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
<!--                                <input id="ap" class="form-control" type="text" name="adresPomesheniya" value="" required placeholder="адрес помещения"/>-->
                            </div>
                            <!---->
<!--                            <div class="mb-2">-->
<!--                                <div class="mb-1">Проживающего(ей) по адресу:</div>-->
<!--                                <input id="go" class="form-control" type="text" name="town" value="" required placeholder="город" onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;"/>-->
<!--                                <input id="st" class="form-control" type="text" name="street" value="" required placeholder="улица"/>-->
<!--                                <input id="nh" class="form-control" type="text" name="num_house" value="" required placeholder="дом" />-->
                                <!--<input class="form-control" type="text" name="lit_house" value="" required placeholder="литера"/>-->
<!--                                <input class="form-control" type="text" name="num_apart" value="" required placeholder="квартира"/>-->
<!--                            </div>-->

<!--                            <div class="d-flex align-items-center mb-2 text-nowrap">-->
<!--                                <span class="mr-2"></span>-->
<!--                                <input id="lic" class="form-control" type="text" name="n_lic" value="" required placeholder="Номер лицевого счета" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>-->
<!--                            </div>-->

                            <div class="d-flex align-items-center mb-2">
                                <span class="mr-2"></span>
<!--                                <input id="ph" class="form-control" type="text" name="phone" value="" required placeholder="Ваш контактный телефон" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>-->
                            </div>
                        </div>
                    </div>
                    <!--block form-->
                    <h1 class="text-center mt-4">Заявление</h1>

                    <div class="mb-1">Прошу исключить доставку платежного документа за ЖКУ на бумажном носителе по адресу нахождения жилого/нежилого помещения:
                        <div class="mb-2">
                            <input id="lic" class="form-control" type="text" name="n_lic" value="" required placeholder="лицевой счет" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                            <input id="go" class="form-control" type="text" name="town" value="" required placeholder="город" onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                            <input id="st" class="form-control" type="text" name="street" value="" required placeholder="улица"/>
                            <input id="nh" class="form-control" type="text" name="num_house" value="" required placeholder="дом" />
                            <!--<input class="form-control" type="text" name="lit_house" value="" required placeholder="литера"/>-->
                            <input class="form-control" type="text" name="num_apart" value="" required placeholder="квартира"/>
                        </div>

                        и предоставлять ПД за ЖКУ в электронном виде на адрес:
                    </div>
                    <div class="mb-2">
                        <div class="form-check mb-1">
                            <!--<input  class="form-check-input" type="radio" name="deliveryType" required checked
                                   id="DeliveryType1" value="электронная почта">
                            <label class="form-check-label" for="deliveryType1">электронная почта</label>-->
                        </div>
                    </div>
                    <div class="receipt-by-email-row mb-4">
                        <!--<div class="mr-2">На следующий электронный адрес:</div>-->
                        <input id="em" class="form-control"  style="width:30%" type="email" name="email" value="" required placeholder="ваш email"/>
                    </div>

                    <div class="d-flex align-items-center mb-2 text-nowrap">
                        <span class="mr-2">Паспорт :</span>
                        <input id="ps" class="form-control mr-2" type="text" name="pasportSeriya" value="" required placeholder="серия" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                        <span class="mr-2">№</span>
                        <input id="pn" class="form-control"  style="width:30%" type="text" name="pasportNomer" value="" required placeholder="номер" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"/>
                    </div>

                    <div class="receipt-by-email-row mb-4">
                        <div>
                            <span class="mr-2">Дата выдачи:</span>
                            <input id="pko" class="form-control" style="width:17%" type="date" name="pasportKogda" value="" required
                                   style="min-width: 160px; max-width: 160px;" placeholder="дата выдачи" />

                            <span class="mr-2"></span>
                            <input id="pke" class="form-control mr-2 mb-2 mb-sm-0"  type="text" name="pasportKem" value="" required placeholder="кем выдан паспорт"/>
                        </div>
                    </div>

                    <div class="receipt-by-email-row mb-2">

                        <span class="mr-2">Дата рождения:</span>
                        <input class="form-control mr-2 mb-2 mb-sm-0" style="width:17%" type="date" name="dataRozdeniya" value="" required
                               style="min-width: 160px; max-width: 160px;" placeholder="дата рождения" />

                        <span class="mr-2"></span>
                        <input id="pb" class="form-control"  type="text" name="mestoRozdeniya" value="" required placeholder="место рождения"/>



                    </div>



                    <div class="receipt-by-email-row mb-4">

                        <br />
                        <!--<div class="mr-2">Адрес регистрации (по паспорту):</div>
                        <input id="ar" class="form-control" type="text" name="adresRegistratsii" value="" required placeholder="адрес регистрации (по паспорту)"/>-->
                    </div>

                    <div class="vtInfoBlock receipt-by-email-postfix">
                        <div class="vtInfoBlockBody">
                            <div>
                                <p style="text-align:justify;">Нажимая на кнопку <strong>ОТПРАВИТЬ</strong>, я даю согласие на обработку персональных данных и подтверждаю свое согласие на использование указанной информации для формирования и направления на указанный в Заявлении электронный адрес платежного документа на оплату ЖКУ.</p>
                            </div>
                        </div>
                    </div>
                    <!--                <button id="toSent" >Отправить</button>-->
                    <button data-fancybox data-type="ajax"  id="toSent" >Отправить</button>
                </form>
            </div>
			<div id="content"></div>
        </div>
    </div>

    <div id="content" ></div>
    </body>

    <script>
        function checkString(val){
            return val.match(/^[а-ясА-Я]+$/);
        }
        function checkNum(val){
            return val.match(/^\d+/);
        }

        function valid(){
            event.preventDefault();

            efio = "  с ошибками, проверьте раскладку клавиатуры и содержание чисел";
            str = $("input[id=sur]").val();
            if (!checkString(str)){
                $.fancybox.open("Фамилия "+efio);
                return false;
            }
            str = $("input[id=nam]").val();
            if (!checkString(str)){
                $.fancybox.open("Имя "+efio);
                return false;
            }

            efio = "  должен содержать только цифры";
            str = $("input[id=lic]").val();
            if (!checkNum(str)){
                $.fancybox.open("Лицевой счет "+efio);
                return false;
            }

            str = $("input[id=ps]").val();
            if (!checkNum(str)){
                $.fancybox.open("Серия паспорта "+efio);
                return false;
            }
            str = $("input[id=pn]").val();
            if (!checkNum(str)){
                $.fancybox.open("Номер паспорта "+efio);
                return false;
            }
            str = $("input[id=ph]").val();
            if (!checkNum(str)){
                $.fancybox.open("Номер телефона  "+efio);
                return false;
            }

            str = $("input[id=pk]").val();
            if (str==''){
                $.fancybox.open("Паспорт кем выдан не может быть пустым!");
                return false;
            }
            str = $("input[id=db]").val();
            if (str==''){
                $.fancybox.open("Дата рождения не может быть пустым!");
                return false;
            }
            str = $("input[id=pb]").val();
            if (str==''){
                $.fancybox.open("Место рождения не может быть пустым!");
                return false;
            }
            str = $("input[id=ar]").val();
            if (str==''){
                $.fancybox.open("Адрес регистрации не может быть пустым!");
                return false;
            }

            str = $("input[id=em]").val();
            re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
            if(!re.test(String(str).toLowerCase())){
                $.fancybox.open("email указан не верно");
                return false;
            }

            return true;
        }

        $('#toSent').click(function (){
            if (valid()){


                $.ajax({
                    url: 'cvalform.php',
                    data: {userDataform: $('#userData').serializeArray()}, // $('email').title},
                    type: 'POST', //'GET',

                    complite: function(){
                        //-- убрать окно загрузки
                    },
                    success: function(responce){

                        $("input[type=text], textarea").val(""); //  очищение всех полей ввода текста
                        $("input[type=email], textarea").val(""); //  очищение всех полей ввода текста


                        $.fancybox.open(responce);
                    },
                    error: function(){
                        $.fancybox.open('Error!');


                    }
                });
            };
            // event.preventDefault();
            $dataf = $('#userData').serializeArray()
            // alert();
        });
    </script>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>