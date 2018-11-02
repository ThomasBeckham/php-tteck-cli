//<p>ignore this</p>

<?php



echo "\n",  " _______ _______        _
|__   __|__   __|      | |
   | |     | | ___  ___| | __
   | |     | |/ _ \/ __| |/ /
   | |     | |  __/ (__|   <
   |_|     |_|\___|\___|_|\_\

                             ", "\n";


while (true){
echo "enter username : ";

$uname = trim(fgets(STDIN, 1024));
  if ($uname == 'add uname'){
       echo "\n", 'password : ';
       $password = trim(fgets(STDIN, 1024));
       if ($password == 'add pword') {
         echo "\n", 'tteck cli test', "\n";
         while (true) {


        unset($argv[0]);
        echo 'commands (note commands should start with a dash) ', "\n";
        echo '-help', '  shows this list', "\n";
        echo '-chat', '  admin chat settings', "\n";
        echo '-exit', '  exits the tteck cli application', "\n";
        echo '-fill', '  filler', "\n";
        echo '-fill', '  filler', "\n";
$commands = trim(fgets(STDIN, 1024));
        switch($commands){
            case '-help':
            echo 'commands', "\n";
            echo '-help', '  shows this list', "\n";
            echo '-chat', '  admin chat settings', "\n";
            echo '-exit', '  exits the tteck cli application', "\n";
            echo '-fill', '  filler', "\n";
            echo '-fill', '  filler', "\n";
              break;
            case '-fill' :
              echo "\n", "test", "\n";
              break;
              case '-chat' :
                echo "\n", "chat cmds";
                echo "\n", "-say";
                echo "\n", "-clear";
                echo "\n", "-log", "\n";
                echo "\n", "enter command:","\n";
                $chatcmd = trim(fgets(STDIN, 1024));
                switch($chatcmd){
                  case '-say':
                  echo "\n", 'test', "\n";
                  break;

                  case '-clear':
                  echo "\n", 'are you shure, this will clear every ones screen', "\n";
                  echo "\n", '-yes', "\n";
                  echo "\n", '-no', "\n";
                  $clearcyn = trim(fgets(STDIN, 1024));
                  switch($clearcyn){
                    case '-yes':



                    echo "\n", 'test',"\n";

                    break;
                    case '-no':
                    echo "\n", 'ok', "\n";
                    break;
                  }
                  break;

                  case '-log':
                  echo "\n", 'pointless', "\n";
                  $xml=simplexml_load_file("chat/logs/log.xml");
                  print_r($xml);
                  break;

                }
                break;
                case '-exit':
                  echo "\n", 'have a nice day', "\n";

                  break;

             };




}
       }
       else {
         echo "\n", 'wrong password', "\n";
       }

}  else {
      echo "\n", 'wrong username', "\n";
}

}
 ?>
