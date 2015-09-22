<?php
/**
 * Created by PhpStorm.
 * User: dusty
 * Date: 11.09.15
 * Time: 21:35
 */
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Anek is base class of application
 * TODO обрабатывать забаненные анекдоты
 */
class Aneks extends ActiveRecord
{
    private $meta;

  /*  function __construct($id = FALSE)
    {
        parent::__construct();
        if ()
    }*/

    public function get_title()
    {
        return $this->meta['title'];
    }

    public function get_anek($id = 0){
        $this->meta = array(
            "title" => '',
            "description" => '',
            "keywords" => '',
            "h1" => ''
        );


        if($id){
            //$query = "SELECT id, text, rate FROM aneks WHERE id = ".$id;
            $res = Aneks::find()
                ->where(['id' => $id])
                ->one();
            //$res = mysql_query($query);

            if($res!= NULL)
            {
                //$row = mysql_fetch_assoc($res);

                $row = array();
                $row['text'] = str_replace("\r\n","<br/>\n",$res->text);
                $row['rate'] = $res->rate;
                $row['id'] = $res->id;

                $row['rate_class'] = ($row['rate'] > 0) ? '_plus' : '_minus';
                if($row['rate'] == 0){
                    $row['rate_class'] = '';
                }
                // новая версия для title
                $anekpie = explode(' ',strip_tags($row['text']));
                $i = 0;
                $minus = 0;
                $wordsintitle = 0;
                $badwords = array('а','не','или','и','но','да','же','для','чтобы','как','словно','однако','если','что','так','о','в','из');
                $this->meta['title'] = '';
                $maxwordsintitle = 8;
                // формируем список слов, либо до точки
                while (($i-$minus)<$maxwordsintitle)
                {

                    if (strlen($anekpie[$i])<1)
                    {

                        $minus++;

                        $i++;
                        continue;
                    }

                    if ((strlen($anekpie[$i])==1)||(in_array($anekpie[$i],$badwords)))

                    {
                        $this->meta['title'] .= $anekpie[$i].' ';

                        $wordsintitle++;
                        $minus++;
                        $i++;

                        continue;
                    }
                    $this->meta['title'] .= $anekpie[$i];

                    $wordsintitle++;
                    if (((strpos($anekpie[$i],'.'))||(strpos($anekpie[$i],'?'))||(strpos($anekpie[$i],'!')))&&($wordsintitle>3))

                    {

                        $i=6;

                        $i=$maxwordsintitle+$minus;

                    }
                    $i++;



                    if ($i == count($anekpie)) break;
                    if (($i-$minus)<$maxwordsintitle) $this->meta['title'] .= ' ';

                }
                $this->meta['title'] = 'Анекдот '. $this->meta['title'] . ' - 5ft.ru';
                $this->meta['description']  = 'Читайте анекдот: '. $this->meta['title'] .'...';
                //$this->meta['title']        = str_replace("%cat%", ' - анекдот #'.$row['id'], $this->meta['title']);
                $this->meta['h1']           = 'Анекдот #'.$row['id'];
                //$randPortion = $this->getRandomAnek(2);

              //  $result = array();
                //$result[] = $row;
                $result = array_merge($row,$this->meta);

                /*foreach($randPortion as $k=>$v){
                    $result[] = $v;
                }*/
                // TODO очистить текст от назойливого вайна парсимых сайтов
                return $result;
            }
        }
        return false;
    }
}