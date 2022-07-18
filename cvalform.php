<?php
/**
 * -----------------------------------------------------------------------------------------------------------
 *  controller ValidFormClass
 * -----------------------------------------------------------------------------------------------------------
 */
/**
 * Подгружаем класс валидации формы
 */
spl_autoload('ValidFormClass');

/**
 * Создаем обьект валидации формы
 */
$conroller = new ValidFormClass();

/**
 * Проверяем POST
 */
if ($conroller->isPost()){
    /**
     * проверка полей на спецсимволы, убираем пробелы, защита от подмены
     */
    $conroller->valid_step_1();
    /**
     * проверка полей на спецсимволы, убираем пробелы, защита от подмены POST
     */

    if ( !$conroller->valuesFormEmpty() ){
		//print_r("проверка полей на спецсимволы, убираем пробелы, защита от подмены POST -> пройдена");
    }
    /**
     * проверяем на число
     */

    foreach ( $conroller->numericFields as $field){
        if ($conroller->isDigit($field['value'])){
			//print_r("<br />"."Поле ".$field['name']." Верно только числа <br/>");
        }else{
            print_r("<br />"."Поле ".$field['name']." должно содержать только числа "."<br/>");
            $conroller->execWriteTofile=false;
        }

    }

    /**
     * проверяем на кирилицу содержит только буквы аА-яЯ
     */
    foreach ($conroller->fio  as $field){
        /**
         * Пропускаем поле Отчество
         */
        if ($field['name'] == 'Отчество'){
            continue;
        }
        if ($conroller->isCyrillc($field['value'])){
			//print_r("ФИО содержит только буквы <br/>");
        }else{
            print_r("Поле ".$field['name']." содержит не только буквы ".$field['value']." <br/>");
            $conroller->execWriteTofile=false;
        }
    }

    /**
     * проверяем валидацию email
     */
    if ( $conroller->validEmail() ){
		//print_r("электронный адрес валидный ".$conroller->email."<br/>");
    }else{
        print_r("электронный адрес невалидный ".$conroller->email)."<br/>";
        $conroller->execWriteTofile=false;
    }
    /**
     * Запись в файл JSON обьект данные с формы, если флаг execWriteTofile истина
     */
    if ($conroller->execWriteTofile){
        $conroller->writeToFile();
        $conroller->writeToFileJSON();
        print_r("<br /> Заявление принято!");
    }else{
        print_r("<br /> Проверьте данные, заявление не принято!");

    }

}
