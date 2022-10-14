<?php
    class Calendar {  
        
     
        /**
         * Constructor
         */
        public function __construct(){     
            $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
        }
         
        /********************* PROPERTY ********************/  
        private $dayLabels = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
         
        private $currentYear=0;
         
        private $currentMonth=0;
         
        private $bday="";

        private $nameDays = [
            [],
            ["Svea"],
            ["Alfred", "Alfrida"],
            ["Rut"],
            ["Hanna", "Hannele"],
            ["Kasper", "Melker", "Baltsar"],
            ["August", "Augusta"],
            ["Erland"],
            ["Gunnar", "Gunder"],
            ["Sigurd", "Sigbritt"],
            ["Jan", "Jannike"],
            ["Frideborg", "Fridolf"],
            ["Knut"],
            ["Felix", "Felicia"],
            ["Laura", "Lorentz"],
            ["Hjalmar", "Helmer"],
            ["Anton", "Tony"],
            ["Hilda", "Hildur"],
            ["Henrik"],
            ["Fabian", "Sebastian"],
            ["Agnes", "Agneta"],
            ["Vincent", "Viktor"],
            ["Frej", "Freja"],
            ["Erika"],
            ["Paul", "Pål"],
            ["Bodil", "Boel"],
            ["Göte", "Göta"],
            ["Karl", "Karla"],
            ["Diana"],
            ["Gunilla", "Gunhild"],
            ["Ivar", "Joar"],
            ["Max", "Maximilian"],
            [],
            ["Disa", "Hjördis"],
            ["Ansgar", "Anselm"],
            ["Agata", "Agda"],
            ["Dorotea", "Doris"],
            ["Rikard", "Dick"],
            ["Berta", "Bert"],
            ["Fanny", "Franciska"],
            ["Iris"],
            ["Yngve", "Inge"],
            ["Evelina", "Evy"],
            ["Agne", "Ove"],
            ["Valentin"],
            ["Sigfrid"],
            ["Julia", "Julius"],
            ["Alexandra", "Sandra"],
            ["Frida", "Fritiof"],
            ["Gabriella", "Ella"],
            ["Vivianne"],
            ["Hilding"],
            ["Pia"],
            ["Torsten", "Torun"],
            ["Mattias", "Mats"],
            ["Sigvard", "Sivert"],
            ["Torgny", "Torkel"],
            ["Lage"],
            ["Maria"],
            [],
            ["Albin", "Elvira"],
            ["Ernst", "Erna"],
            ["Gunborg", "Gunvor"],
            ["Adrian", "Adriana"],
            ["Tora", "Tove"],
            ["Ebba", "Ebbe"],
            ["Camilla"],
            ["Siv"],
            ["Torbjörn", "Torleif"],
            ["Edla", "Ada"],
            ["Edvin", "Egon"],
            ["Viktoria"],
            ["Greger"],
            ["Matilda", "Maud"],
            ["Kristoffer", "Christel"],
            ["Herbert", "Gilbert"],
            ["Gertrud"],
            ["Edvard", "Edmund"],
            ["Josef", "Josefina"],
            ["Joakim", "Kim"],
            ["Bengt"],
            ["Kennet", "Kent"],
            ["Gerda", "Gerd"],
            ["Gabriel", "Rafael"],
            [],
            ["Emanuel"],
            ["Rudolf", "Ralf"],
            ["Malkolm", "Morgan"],
            ["Jonas", "Jens"],
            ["Holger", "Holmfrid"],
            ["Ester"],
            ["Harald", "Hervor"],
            ["Gudmund", "Ingemund"],
            ["Ferdinand", "Nanna"],
            ["Marianne", "Marlene"],
            ["Irene", "Irja"],
            ["Vilhelm", "William"],
            ["Irma", "Irmelin"],
            ["Nadja", "Tanja"],
            ["Otto", "Ottilia"],
            ["Ingvar", "Ingvor"],
            ["Ulf", "Ylva"],
            ["Liv"],
            ["Artur", "Douglas"],
            ["Tiburtius"],
            ["Olivia", "Oliver"],
            ["Patrik", "Patricia"],
            ["Elias", "Elis"],
            ["Valdemar", "Volmar"],
            ["Olaus", "Ola"],
            ["Amalia", "Amelie"],
            ["Anneli", "Annika"],
            ["Allan", "Glenn"],
            ["Georg", "Göran"],
            ["Vega"],
            ["Markus"],
            ["Teresia", "Terese"],
            ["Engelbrekt"],
            ["Ture", "Tyra"],
            ["Tyko"],
            ["Mariana"],
            ["Valborg"],
            ["Filip", "Filippa"],
            ["John", "Jane"],
            ["Monika", "Mona"],
            ["Gotthard", "Erhard"],
            ["Marit", "Rita"],
            ["Carina", "Carita"],
            ["Åke"],
            ["Reidar", "Reidun"],
            ["Esbjörn", "Styrbjörn"],
            ["Märta", "Märit"],
            ["Charlotta", "Lotta"],
            ["Linnea", "Linn"],
            ["Halvard", "Halvar"],
            ["Sofia", "Sonja"],
            ["Ronald", "Ronny"],
            ["Rebecka", "Ruben"],
            ["Erik"],
            ["Maj", "Majken"],
            ["Karolina", "Carola"],
            ["Konstantin", "Conny"],
            ["Hemming", "Henning"],
            ["Desideria", "Desirée"],
            ["Ivan", "Vanja"],
            ["Urban"],
            ["Vilhelmina", "Vilma"],
            ["Beda", "Blenda"],
            ["Ingeborg", "Borghild"],
            ["Yvonne", "Jeanette"],
            ["Vera", "Veronika"],
            ["Petronella", "Pernilla"],
            ["Gun", "Gunnel"],
            ["Rutger", "Roger"],
            ["Ingemar", "Gudmar"],
            ["Solbritt", "Solveig"],
            ["Bo"],
            ["Gustav", "Gösta"],
            ["Robert", "Robin"],
            ["Eivor", "Majvor"],
            ["Börje", "Birger"],
            ["Svante", "Boris"],
            ["Bertil", "Berthold"],
            ["Eskil"],
            ["Aina", "Aino"],
            ["Håkan", "Hakon"],
            ["Margit", "Margot"],
            ["Axel", "Axelina"],
            ["Torborg", "Torvald"],
            ["Björn", "Bjarne"],
            ["Germund", "Görel"],
            ["Linda"],
            ["Alf", "Alvar"],
            ["Paulina", "Paula"],
            ["Adolf", "Alice"],
            [],
            ["David", "Salomon"],
            ["Rakel", "Lea"],
            ["Selma", "Fingal"],
            ["Leo"],
            ["Peter", "Petra"],
            ["Elof", "Leif"],
            ["Aron", "Mirjam"],
            ["Rosa", "Rosita"],
            ["Aurora"],
            ["Ulrika", "Ulla"],
            ["Laila", "Ritva"],
            ["Esaias", "Jessika"],
            ["Klas"],
            ["Kjell"],
            ["Jörgen", "Örjan"],
            ["André", "Andrea"],
            ["Eleonora", "Ellinor"],
            ["Herman", "Hermine"],
            ["Joel", "Judit"],
            ["Folke"],
            ["Ragnhild", "Ragnvald"],
            ["Reinhold", "Reine"],
            ["Bruno"],
            ["Fredrik", "Fritz"],
            ["Sara"],
            ["Margareta", "Greta"],
            ["Johanna"],
            ["Magdalena", "Madeleine"],
            ["Emma", "Emmy"],
            ["Kristina", "Kerstin"],
            ["Jakob"],
            ["Jesper", "Jasmine"],
            ["Marta"],
            ["Botvid", "Seved"],
            ["Olof"],
            ["Algot"],
            ["Helena", "Elin"],
            ["Per"],
            ["Karin", "Kajsa"],
            ["Tage"],
            ["Arne", "Arnold"],
            ["Ulrik", "Alrik"],
            ["Alfons", "Inez"],
            ["Dennis", "Denise"],
            ["Silvia", "Sylvia"],
            ["Roland"],
            ["Lars"],
            ["Susanna"],
            ["Klara"],
            ["Kaj"],
            ["Uno"],
            ["Stella", "Estelle"],
            ["Brynolf"],
            ["Verner", "Valter"],
            ["Ellen", "Lena"],
            ["Magnus", "Måns"],
            ["Bernhard", "Bernt"],
            ["Jon", "Jonna"],
            ["Henrietta", "Henrika"],
            ["Signe", "Signhild"],
            ["Bartolomeus"],
            ["Lovisa", "Louise"],
            ["Östen"],
            ["Rolf", "Raoul"],
            ["Fatima", "Leila"],
            ["Hans", "Hampus"],
            ["Albert", "Albertina"],
            ["Arvid", "Vidar"],
            ["Sam", "Samuel"],
            ["Justus", "Justina"],
            ["Alfhild", "Alva"],
            ["Gisela"],
            ["Adela", "Heidi"],
            ["Lilian", "Lilly"],
            ["Kevin", "Roy"],
            ["Alma", "Hulda"],
            ["Anita", "Annette"],
            ["Tord", "Turid"],
            ["Dagny", "Helny"],
            ["Åsa", "Åslög"],
            ["Sture"],
            ["Ida"],
            ["Sigrid", "Siri"],
            ["Dag", "Daga"],
            ["Hildegard", "Magnhild"],
            ["Orvar"],
            ["Fredrika"],
            ["Elise", "Lisa"],
            ["Matteus"],
            ["Maurits", "Moritz"],
            ["Tekla", "Tea"],
            ["Gerhard", "Gert"],
            ["Tryggve"],
            ["Enar", "Einar"],
            ["Dagmar", "Rigmor"],
            ["Lennart", "Leonard"],
            ["Mikael", "Mikaela"],
            ["Helge"],
            ["Ragnar", "Ragna"],
            ["Ludvig", "Love"],
            ["Evald", "Osvald"],
            ["Frans", "Frank"],
            ["Bror"],
            ["Jenny", "Jennifer"],
            ["Birgitta", "Britta"],
            ["Nils"],
            ["Ingrid", "Inger"],
            ["Harry", "Harriet"],
            ["Erling", "Jarl"],
            ["Valfrid", "Manfred"],
            ["Berit", "Birgit"],
            ["Stellan"],
            ["Hedvig", "Hillevi"],
            ["Finn"],
            ["Antonia", "Toini"],
            ["Lukas"],
            ["Tore", "Tor"],
            ["Sibylla"],
            ["Ursula", "Yrsa"],
            ["Marika", "Marita"],
            ["Severin", "Sören"],
            ["Evert", "Eilert"],
            ["Inga", "Ingalill"],
            ["Amanda", "Rasmus"],
            ["Sabina"],
            ["Simon", "Simone"],
            ["Viola"],
            ["Elsa", "Isabella"],
            ["Edit", "Edgar"],
            [],
            ["Tobias"],
            ["Hubert", "Hugo"],
            ["Sverker"],
            ["Eugen", "Eugenia"],
            ["Gustav Adolf"],
            ["Ingegerd", "Ingela"],
            ["Vendela"],
            ["Teodor", "Teodora"],
            ["Martin", "Martina"],
            ["Mårten"],
            ["Konrad", "Kurt"],
            ["Kristian", "Krister"],
            ["Emil", "Emilia"],
            ["Leopold"],
            ["Vibeke", "Viveka"],
            ["Naemi", "Naima"],
            ["Lillemor", "Moa"],
            ["Elisabet", "Lisbet"],
            ["Pontus", "Marina"],
            ["Helga", "Olga"],
            ["Cecilia", "Sissela"],
            ["Klemens"],
            ["Gudrun", "Rune"],
            ["Katarina", "Katja"],
            ["Linus"],
            ["Astrid", "Asta"],
            ["Malte"],
            ["Sune"],
            ["Andreas", "Anders"],
            ["Oskar", "Ossian"],
            ["Beata", "Beatrice"],
            ["Lydia"],
            ["Barbara", "Barbro"],
            ["Sven"],
            ["Nikolaus", "Niklas"],
            ["Angela", "Angelika"],
            ["Virginia"],
            ["Anna"],
            ["Malin", "Malena"],
            ["Daniel", "Daniela"],
            ["Alexander", "Alexis"],
            ["Lucia"],
            ["Sten", "Sixten"],
            ["Gottfrid"],
            ["Assar"],
            ["Stig"],
            ["Abraham"],
            ["Isak"],
            ["Israel", "Moses"],
            ["Tomas"],
            ["Natanael", "Jonatan"],
            ["Adam"],
            ["Eva"],
            [],
            ["Stefan", "Staffan"],
            ["Johannes", "Johan"],
            ["Benjamin"],
            ["Natalia", "Natalie"],
            ["Abel", "Set"],
            ["Sylvester"],
        ];

        private $currentDay=0;
        
        private $currentWeek=0;

        public $currentDate=null;
         
        private $daysInMonth=0;
         
        private $naviHref= null;
         
        /********************* PUBLIC **********************/  
            
        /**
        * print out the calendar
        */
        public function show() {
            $year  = null;
             
            $month = null;
             
            if(null==$year&&isset($_GET['year'])){
     
                $year = $_GET['year'];
             
            }else if(null==$year){
     
                $year = date("Y",time());  
             
            }          

            if(null==$month&&isset($_GET['month'])){
     
                $month = $_GET['month'];
             
            }else if(null==$month){
     
                $month = date("m",time());
             
            }                  
             
            $this->currentYear=$year;
             
            $this->currentMonth=$month;
             
            $this->daysInMonth=$this->_daysInMonth($month,$year);  
             
            $content='<div id="calendar">'.
                            '<div class="box">'.
                            $this->_createNavi().
                            '</div>'.
                            '<div class="box-content">'.
                                    '<ul class="label">'.$this->_createLabels().'</ul>';   
                                    $content.='<div class="clear"></div>';     
                                    $content.='<ul class="dates">';    
                                     
                                    $weeksInMonth = $this->_weeksInMonth($month,$year);
                                    // Create weeks in a month
                                    for( $i=0; $i<$weeksInMonth; $i++ ){
                                         
                                        //Create days in a week
                                        for($j=1;$j<=7;$j++){
                                            $content.=$this->_showDay($i*7+$j);
                                        }
                                    }
                                     
                                    $content.='</ul>';
                                     
                                    $content.='<div class="clear"></div>';     
                 
                            $content.='</div>';
                     
            $content.='</div>';
            return $content;   
        }
         
        /********************* PRIVATE **********************/ 
        /**
        * create the li element for ul
        */
        private function _showDay($cellNumber){
             
            if($this->currentDay==0){
                 
                $firstDayOfTheWeek = date('N',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
                         
                if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                     
                    $this->currentDay=1;
                     
                }
            }
            $fileName = "birthdays.txt";
            $fp = fopen($fileName, "r");
            $contents = fread($fp, filesize($fileName));
            $name_and_Date = explode(',', $contents);
            foreach($name_and_Date as $dates){
                $name = explode(".", $dates);
                $dateTest = explode('.', $dates);
                if($this->currentDay < 10){
                    $dateT = $this->currentMonth.'-0'.$this->currentDay;
                }
                else{
                    $dateT = $this->currentMonth.'-'.$this->currentDay;
                }
                
                $dateE = substr($dateTest[0],5);

                if($dateE == $dateT)
                {
                    $this->bday = '<p class="birthday">'.$name[1].'🎂</p>';
                    break;
                }
                else $this->bday = "";
            }
            fclose($fp);

            if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
                 
                $this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay)));
                $cellContent = $this->currentDay;
                 
                $this->currentDay++;   
                 
            }
            else{
                 
                $this->currentDate =null;
     
                $cellContent=null;
            }
            if(date("L", strtotime($this->currentDate)) == 0 && $this->currentMonth >= 03){
                $day365 = date("z", strtotime($this->currentDate));
                $day365 = (int)$day365 + 1;
                $arrt = implode(' ', $this->nameDays[$day365]);
            }
            else{
                $day365 = date("z", strtotime($this->currentDate));
                $day365 = (int)$day365;
                $arrt = implode(' ', $this->nameDays[$day365]);
            }
            

            if($cellNumber%7==1 && $cellContent != null){
                return '<li id="li-'.$this->currentDate.'" class="start">'.$cellContent." <span class='weekNum'>".date("W", strtotime($this->currentDate)).'</span> <p class="namn">'. $arrt .'</p>'.$this->bday.'</li>';
            }
            else if($cellNumber%7==0 && $cellContent != null){
                return '<li id="li-'.$this->currentDate.'" class="end">'.$cellContent."<p class='namn'>". $arrt .'</p>'.$this->bday.'</li>';
            }
            else if($cellContent != null){
                return '<li id="li-'.$this->currentDate.'">'.$cellContent."<p class='namn'>". $arrt .'</p>'.$this->bday.'</li>';
            }
            return '<li id="li-'.$this->currentDate.'" class="'.($cellNumber%7==1?'start':($cellNumber%7==0?'end':' ')).
                    ($cellContent==null?'mask':'').'">'.$cellContent.'</li>';
        }

        /**
        * create navigation
        */
        private function _createNavi(){
             
            $nextMonth = $this->currentMonth==12?1:intval($this->currentMonth)+1;
             
            $nextYear = $this->currentMonth==12?intval($this->currentYear)+1:$this->currentYear;
             
            $preMonth = $this->currentMonth==1?12:intval($this->currentMonth)-1;
             
            $preYear = $this->currentMonth==1?intval($this->currentYear)-1:$this->currentYear;

            return
                '<div class="header">'.
                    '<a class="prev" href="'.$this->naviHref.'?month='.sprintf('%02d',$preMonth).'&year='.$preYear.'">Prev</a>'.
                        '<span class="title">'.date('Y M',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
                    '<a class="next" href="'.$this->naviHref.'?month='.sprintf("%02d", $nextMonth).'&year='.$nextYear.'">Next</a>'.
                '</div>';
        }
             
        /**
        * create calendar week labels
        */



        private function _createLabels(){  
                     
            $content='';
             
            foreach($this->dayLabels as $index=>$label){
                 
                $content.='<li class="'.($label==6?'end title':'start title').' title">'.$label.'</li>';
     
            }

            return $content;
        }
        
        /**
        * calculate number of weeks in a particular month
        */
        private function _weeksInMonth($month=null,$year=null){
             
            if( null==($year) ) {
                $year =  date("Y",time()); 
            }
             
            if(null==($month)) {
                $month = date("m",time());
            }
             
            // find number of days in this month
            $daysInMonths = $this->_daysInMonth($month,$year);
             
            $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
             
            $monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));

            $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
             
            if($monthEndingDay<$monthStartDay)
                $numOfweeks++;
            return $numOfweeks;
        }
     
        /**
        * calculate number of days in a particular month
        */
        private function _daysInMonth($month=null,$year=null){
             
            if(null==($year))
                $year =  date("Y",time()); 
     
            if(null==($month))
                $month = date("m",time());
                 
            return date('t',strtotime($year.'-'.$month.'-01'));
        }
    }
?>