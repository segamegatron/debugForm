<?php

class ValidFormClass
{
    protected $file = "f.txt";
    protected $fileJSON = "f.json";
    protected $mode = "a";
    protected $fileForm = "form.php";
    protected $textBeforeWrite = "begin data from form";
    protected $textAfterWrite = "end data from form";
    protected $keyFirstPost = 'name';
    protected $keyLastPost = 'adresRegistratsii';
    protected $delimiter = '\\';
    protected $path = '';
    protected $separator = ';';
    protected $year = 'Y';
    protected $month = 'm';
    protected $day = 'd';
	protected $lf = "\r\n";

    public $last_name = '';
    public $first_name = ''; 
    public $second_name = ''; 
    public $email = '';
    public $fio = array();
    public $n_lic = '';
    public $len_nLic = '';
    public $error_nLic = 'номер лицевого счета указан неверно';
    public $regexprCyrillic = '/^[аА-яЯсА-Я]/'; 
    public $regexprDigit = '/^[0-9]+$/';
    public $dataForm = array();
    public $sizeDataForm = 16;
    public $execWriteTofile = true;
    public $d = array();
    public $a = array();

    function __construct()
    {
        $d = $this->dataForm = $this->d = $_POST['userDataform'];
        $a['empty'] = '1';
        $this->valid_step_1();
        $this->fio = array('last_name' => array('name' => 'Фамилия', 'value' => $this->a['last_name']),
            'first_name' => array('name' => 'Имя', 'value' => $this->a['first_name']),
            'second_name' => array('name' => 'Отчество', 'value' => $this->a['second_name']));
        $this->numericFields = array(
            'n_lic' => array('name' => 'Лицевой счет', 'value' => $this->a['n_lic']),
            'phone' => array('name' => 'Телефон', 'value' => $this->a['phone']),
            'pasportSeriya' => array('name' => 'Паспорт серия', 'value' => $this->a['pasportSeriya']),
            'pasportNomer' => array('name' => 'Паспорт номер', 'value' => $this->a['pasportNomer']));
        $this->path =  __DIR__.$this->delimiter.date($this->year.'-'.$this->month);
        $this->path =  date($this->year.'-'.$this->month);

        $this->file =  date($this->year.'-'.$this->month.'-'.$this->day).'.txt';
		$this->fileJSON =  date($this->year.'-'.$this->month.'-'.$this->day).'.json';
    }

    /**
     * @return string
     * Готовим строку для записи в файл
     */
    function prepare_rec()
    {
        return '' . $this->a['n_lic'] 
			. ';'
            . $this->a['email'] 
			. ';'
			. $this->a['town'] . ' '
            . $this->a['street'] . ' '
            . $this->a['num_house'].' '
			. $this->a['num_apart']
			. ';'
            . $this->a['last_name'] 
			. ';'
            . $this->a['first_name']
			. ';'
            . $this->a['second_name'] 
			. ';'
            . $this->a['phone'] 
			. ';'
            . $this->a['dataRozdeniya']
			. ';'
			. $this->a['mestoRozdeniya'] 
			. ';'
			. $this->a['pasportSeriya']
			. ';'
            . $this->a['pasportNomer']
			. ';'
            . $this->a['pasportKogda']
			. ';'
            . $this->a['pasportKem'] 
			. $this->lf;

    }

    /**
     * Запись в файл данных из формы
     * Добавить исключения I/O Error
     */
    function writeToFile()
    {
        $rec = $this->prepare_rec();
        @mkdir(date($this->path));
        try{
            $fp = fopen($this->path.$this->delimiter.$this->file, $this->mode);
            fwrite($fp, $rec);
        }catch (Exception $exception){
            print_r("Ошибка обработки данных, повторите позже");
			fclose($fp);
        }
        fclose($fp);

    }

    /**
     * Запись в файл данных из формы
     */
    function writeToFileJSON()
    {
        $fpJSON = fopen($this->path.$this->delimiter.$this->fileJSON, $this->mode);
        fwrite($fpJSON, json_encode($this->a).$this->lf);

        fclose($fpJSON);
    }

    /**
     * проверить существует ли $_POST, заполнены ли поля
     */
    function isPost()
    {
		if (isset($_POST) && sizeof($this->dataForm) == $this->sizeDataForm) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     * Проверим все поля формы на пустоту, кроме поля Отчество
     */
    function valuesFormEmpty()
    {
        foreach ($this->a as $key => $value) {
            if ($this->isEmptyValue($value) && $key != 'second_name') {
                return true;
            }

        }
        return false;
    }

    /**
     * @return bool
     */
    function isEmptyValue($value)
    {
        if ($value == '') {
            return true;
        }
        return false;
    }

    /**
     * @param $value
     * @return array
     * Принимает строку, возвращает ассоциативный массив из первого и последнего значения
     */
    function getFirstSecondSymbol($value)
    {
        $firstSymbol = substr($value, -strlen($value), 1);    // возвращает первый символ
        $secondSymbol = substr($value, -1);    // возвращает последний символ
        return array('firstSymbol' => $firstSymbol, 'secondSymbol' => $secondSymbol);

    }

    /**
     * первичная проверка данных с формы, убираем пробелы, спецсимволы,
     * защита от подмены $_POST
     */
    function valid_step_1()
    {
        $a = array();
        foreach ($this->d as $values) {
            foreach ($values as $key => $value) {
                if ($key == 'value') {
                    $value = trim($value);
                    $value = stripslashes($value);
                    $value = htmlspecialchars($value);
                    $value = htmlspecialchars($value);
                    $value = str_replace(';', '', $value);
                    $a[$values['name']] = $value;
                }
            }
        }
        $this->a =$a;
    }

    /**
     * Проверка email
     */
    function validEmail()
    {
        if ($this->check_length($this->a['email'], 5, 100)) {
            $email_validate = filter_var($this->a['email'], FILTER_VALIDATE_EMAIL);
            return $email_validate;
        }
    }

    /**
     * проверяем на кирилицу, поле содержит только буквы аА-яЯ
     */
    function isCyrillc($field)
    {
        if (preg_match($this->regexprCyrillic, $field)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * проверяем на число, поле содержит только числа 0-9
     */
    function isDigit($field)
    {
        if (preg_match($this->regexprDigit, $field)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $value
     * @param $min
     * @param $max
     * @return bool
     * Проверка длины элемента
     */
    function check_length($value = "", $min, $max)
    {
        $result = (strlen($value) < $min || strlen($value) > $max);
        return !$result;
    }
}


