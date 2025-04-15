<?php
namespace Engine;
Class DisplayAscii
{
    public function display($name)
    {
        if($name == 'Zombie'){
            echo "
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⣶⡶⠶⠶⠾⠿⠿⠿⠟⠿⠿⠿⠿⣷⠶⣶⣦⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⡾⠟⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡠⠞⠁⠀⠀⠀⠉⠛⢿⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢾⠁⠀⠀⠀⠀⠀⠀⠀⠀⠉⠻⣦⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣤⡾⠛⠁⡀⠀⠀⠀⠀⣴⡶⠶⠶⠶⢤⣄⠀⠀⠀⠀⠀⠙⠒⠲⠤⠤⢤⣤⣤⡤⠤⠖⠚⠛⠻⣶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣾⠏⣰⠎⣩⠇⠀⠀⠀⠀⠷⠒⠒⠒⠲⢶⣬⡙⢦⡀⠀⠀⠀⣠⠴⢦⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⢿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⡟⠁⢀⣉⡍⠁⠀⣠⠀⠀⠀⣀⣀⣀⣠⣤⡤⠬⣿⣷⣅⠀⠰⣞⠀⢀⡴⠁⣀⡴⠶⣀⣀⡀⠀⠀⠀⠀⠀⠀⠹⣧⡀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠟⠀⣴⢋⣨⠃⠀⡴⣃⣤⠾⠟⠛⠉⠀⠀⠀⠀⠀⠀⠈⢿⡍⠀⠀⠉⢉⣠⢜⣵⠞⠋⠉⠐⢾⣇⠀⠀⣤⠖⠲⡄⠙⣷⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡟⠀⣀⣛⣋⠁⠀⣸⡿⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣷⠀⠀⠀⠈⣹⡟⠓⠢⢤⣄⠀⠀⠹⣧⡸⣅⣠⡴⡃⠀⢹⣧⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡷⠊⠁⢨⡇⠀⢰⡏⠀⠀⠀⠀⠀⢠⡶⣿⣿⣷⡀⠀⠀⠀⢠⣿⠀⠀⠀⢰⡿⠀⠀⠀⠀⠉⠻⣦⡀⠉⢱⠀⢠⠟⠙⣦⠀⢿⡄⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠁⠀⣴⠏⠀⠀⢸⡇⠀⠀⠀⠀⠀⣾⣿⣿⣿⣿⡇⠀⠀⠀⢸⡟⠀⠀⠀⣾⠁⠀⠀⠀⣤⣶⣤⡈⠻⣦⣸⠀⡏⠀⠀⣸⠀⢸⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣤⠞⠁⠀⠀⠀⢸⣇⠀⠀⠀⠀⠀⢿⣿⣿⣿⠟⠀⠀⠀⢀⣿⠁⠀⠀⢸⣿⣄⠀⠀⠸⣿⣾⣿⡇⠀⠈⢿⡀⢧⣀⡴⠃⠀⢸⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢀⣀⣀⣀⠀⠀⠀⣿⡇⠐⡇⡀⠀⠀⢸⣿⣆⠀⠀⠀⠀⠈⢙⣛⣁⣠⣤⡴⢶⣿⠇⠀⠀⠀⠸⣿⣿⣦⡀⠀⠙⠛⠋⠀⠀⢀⣾⢷⠀⠀⠀⠀⠀⢸⡇⢀⣠⣤⣤⣤⡀
⠀⣠⡶⠋⠉⠉⠉⠛⠶⣤⣹⣇⠘⡽⡁⠀⠀⠘⣷⡙⢷⣶⡶⠞⠛⠛⠛⠉⠉⠀⣠⣾⠏⠀⣀⠀⣠⠀⢹⣿⣿⣿⣶⣦⠀⠀⠀⢀⣾⠇⠈⠀⠀⠀⠀⠀⣼⡗⠋⠉⠀⠀⠹⣿
⢰⠏⠀⠀⠀⠀⣀⣀⣀⠈⠙⣿⡄⠹⡄⠀⠀⠀⠘⣷⣄⠙⠛⠷⣶⣤⣤⣤⣶⠟⣿⠏⠀⣰⣿⠀⣿⣧⠀⢿⡿⣿⣿⣿⣤⣤⣶⡿⠁⠀⢀⡰⣄⠀⠀⢰⣿⠖⠚⢦⠀⠀⣼⡟
⣾⠀⠀⠀⠀⡿⠋⢉⣽⣷⡄⠘⣿⡆⣧⠀⠀⠀⠀⠀⠉⠻⠶⠦⠤⠴⠆⣀⣴⠾⠃⠀⣴⣿⣿⠀⣿⣿⣇⠀⠙⢶⣯⣝⡽⣭⠞⠁⠀⣆⠢⡘⠆⠀⢠⣿⢋⣉⡀⠈⢀⣾⠟⠀
⠸⣦⡤⢤⣄⠷⡀⢸⣀⡘⣿⠀⠈⢻⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠛⠋⠉⠀⠀⠀⠰⠿⠿⠿⠀⠿⠿⠟⠀⠀⠙⠢⠴⠚⠁⠀⠀⠀⠈⠙⢀⠠⣴⡿⣧⣈⣼⠇⠀⣾⠃⠀⠀
⠀⠈⠁⠈⠛⠟⣧⠈⢿⡾⠏⠀⠀⣸⠏⠻⣦⣧⣄⠀⠀⠀⠀⠀⢤⢤⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⢫⣾⣿⣅⡈⠉⢽⣿⣰⡟⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢫⡇⠀⠀⠀⢀⣴⠟⠀⠀⠀⠉⢻⣆⠀⠀⠀⠀⠈⠳⡝⠑⠀⠀⠀⣠⣤⣶⣶⠶⢶⣶⣦⣤⣄⠀⠀⣀⣀⢤⣄⠀⠀⣰⡿⠟⠉⠉⠙⠻⠿⢾⣿⠟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠉⠓⠒⠚⠋⠉⠀⠀⠀⠀⠀⠈⣿⡇⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣫⡵⣧⠀⠀⠀⢰⣦⣉⣙⢿⣦⡀⠉⠻⠮⠁⢸⡿⠀⠀⠀⠀⠀⠀⢀⣸⣿⣀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⡏⠀⢿⣶⣶⣤⣏⠀⣿⠹⣷⣿⣷⡀⠀⠀⠀⣿⡇⠀⠀⠀⠀⠀⠀⢾⢴⣶⡾⡇⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡇⠀⠀⠀⠀⢀⣾⣿⣿⣿⣷⣶⣾⣿⣿⣿⣿⣤⣿⣶⣿⣿⣿⣷⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠈⣷⣶⣶⠃⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣷⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⢿⡿⢿⣿⣿⣿⣿⣿⣿⡆⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⠀⢀⡄⠀⢸⣿⣿⣿⣿⠙⣿⣿⠿⣷⢸⡇⢸⠿⣿⣿⣿⣿⡿⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⣿⠂⠀⢸⣿⠋⠉⠹⠶⠿⠆⠀⠈⢉⣉⣙⣀⠀⠉⢙⣿⠃⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡇⣿⠀⠀⠀⠻⣷⣀⣠⣴⣶⠾⠿⠟⠛⠛⠉⠉⠙⠛⠛⠷⢦⣄⡀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡇⠘⠀⣀⣴⡾⠟⠛⠉⠀⠀⠀⠀⠀⠀⠠⠞⠋⠉⠛⠳⣦⡀⠀⠙⠂⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⡀⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣶⠀⠘⠃⠀⠀⣰⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠻⠶⢶⣶⣤⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠿⢀⣀⣤⣤⡶⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠛⠻⠷⠶⠶⠶⠶⠶⠶⠶⠿⠿⠛⠋⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀";
        }elseif($name == 'Skeleton'){
            echo "
                              _.--\"\"-._
  .                         .\"         \".
 / \    ,^.         /(     Y             |      )\
/   `---. |--'\    (  \__..'--   -   -- -'\"\"-.-'  )
|        :|    `>   '.     l_..-------.._l      .'
|      __l;__ .'      \"-.__.||_.-'v'-._||`\"----\"
 \  .-' | |  `              l._       _.'
  \/    | |                   l`^^'^^'j
        | |                _   \_____/     _
        j |               l `--__)-'(__.--' |
        | |               | /`---``-----'\"1 |  ,-----.
        | |               )/  `--' '---'   \'-'  ___  `-.
        | |              //  `-'  '`----'  /  ,-'   I`.  \
      _ L |_            //  `-.-.'`-----' /  /  |   |  `. \
     '._' / \         _/(   `/   )- ---' ;  /__.J   L.__.\ :
      `._ /7(-.......'  /        ) (     |  |            | |
      `._;l _'--------_/        )-'/     :  |___.    _._./ ;
        | |                 .__ )-'\  __  \  \  I   1   / /
        `-'                /   `-\-(-'   \ \  `.|   | ,' /
                           \__  `-'    __/  `-. `---'',-'
                              )-._.-- (        `-----'
                             )(  l\ o ('..-.
                       _..--' _'-' '--'.-. |
                __,,-'' _,,-''            \ \
               f'. _,,-'                   \ \
              ()--  |                       \ \
                \.  |                       /  \
                  \ \                      |._  |
                   \ \                     |  ()|
                    \ \                     \  /
                     ) `-.                   | |
                    // .__)                  | |
                 _.//7'                      | |
               '---'                         j_| `
                                            (| |
                                             |  \
                                             |lllj
                                             |||||  ";
        }elseif($name == 'Vampire'){
            echo "
              __.......__
            .-:::::::::::::-.
          .:::''':::::::''':::.
        .:::'     `:::'     `:::. 
   .'\  ::'   ^^^  `:'  ^^^   '::  /`.
  :   \ ::   _.__       __._   :: /   ;
 :     \`: .' ___\     /___ `. :'/     ; 
:       /\   (_|_)\   /(_|_)   /\       ;
:      / .\   __.' ) ( `.__   /. \      ;
:      \ (        {   }        ) /      ; 
 :      `-(     .  ^\"^  .     )-'      ;
  `.       \  .'<`-._.-'>'.  /       .'
    `.      \    \;`.';/    /      .'
     `._    `-._       _.-'    _.'
       .'`-.__ .'`-._.-'`. __.-'`.
     .'       `.         .'       `.
   .'           `-.   .-'           `.";
        }elseif($name == 'Minotaur'){
            echo "
                   ...:.-=.......   .....                   
                ..:+**%%%%%#+#*=+-:-======-:-:...           
              .:=+++++++=++-===*%%#***:..........           
          ..-+#**====-==+++==+++*#***#=.                    
        .:++++*+*=+-+====*==+*%#*#***#@=.                   
      .:+++++++++++====++*******##*+++*=:::--=-::..         
    ..=+=++++-+-=*+++*++**=**%*++**+*+#**+=:.               
   .-*+++++===+***###*##**#+#%%#****=**:.                   
   .**+***=+#+++**%%#***++****#**-%#=*+-.                   
   .+#*+**++#%%%%@%#**+++**#****#:+@@#=:.                   
   .+#*=+++=-+%%%##*##**####***#*=.=%%.                     
   ..%***#*+..%#**#*******#**#%#*+.....          ..         
   .:+==:-:-.%%%##*****##*+*%%%***=.        .:-=::---=:.    
 :=-*#++-=+***+#%+##%%#%%=..:++==**:     .:-=+**######=:.   
.*@@@#******#%##**###@###--..=%*==:::..-==++=--=*#####**=-. 
..+##******#@@@@@@@@%%#%#%#%#*=**#*++++=.       .*##*:.  .. 
 .++:=***+*#%%%%%%%%%@@%@@@@@@@@@@%**#%#*+=.::-+*--*:.      
  ... ...+%#*+#*+#+==+=#%##%%%%@@%*=#*++#%#====-::::-:...   
        .#*******#===++*******##+.--:+*=:---=========+===-:.
        :%%****+.:+*+==+#%###+*+.   ......  ...++:+-...     
        -##%*:.. .......*##-..=-.   ..:-=++:...=*#*:        
       .###-.           .+#*-....       .-+*#######*-....   
      :===:.             :*+==+#=.       .:=+**####**+=:.   
     .**+-*-..        ....-+**+++-.        .:-==++==-:.     
   .-+++-=-==+=:     .*=**=+-+++++:              ...        
   :+++++=...=-:     .....   ....                           ";
        }elseif($name == 'Cerberus'){
            echo "
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣴⣶⣿⣿⣷⣶⣶⣾⣿⣶⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣤⣀⣀⣠⣤⣶⣶⣿⣿⣿⡿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣶⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡾⠟⠋⠉⠙⠛⠛⠛⠛⠛⠉⠀⠀⠃⣼⠿⣿⣿⣿⣿⣿⣿⠟⠛⠛⢿⣿⣿⣿⣿⣿⣿⣦⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢧⣽⣿⣿⣿⢫⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⠀⢻⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⡆⣀⣿⣧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠲⣄⠀⠀⢻⣏⣉⣡⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠦⣄⡀⠘⢧⣈⠳⣄⣀⡙⠛⢁⣠⠴⣫⠶⠃⢀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⠆⠀⠀⠈⠉⠓⢦⣌⡑⠲⢭⣝⣶⣾⡵⠊⢁⡤⠆⠙⣷⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡟⠀⠀⠀⠀⠀⠀⠀⠀⠉⣛⣓⣾⣿⣿⡷⢛⣡⡀⠀⠀⢻⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠃⠀⠀⢠⠀⠀⢠⠖⣛⡿⠛⠛⢛⣿⣿⣿⠧⢤⡄⠀⠀⠀⢻⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⢸⣇⠀⠀⠀⠋⢠⠴⠛⢉⣽⣿⣏⠓⢤⡀⢠⠀⠀⠀⢻⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⣸⢿⡄⠀⠀⠀⠀⠀⠀⠉⢠⣏⠉⠓⠀⠀⢸⡇⠀⠀⠀⢻⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣶⣿⣦⡀⠰⠇⠀⢻⡄⠀⠀⠀⠀⢀⣀⣸⣿⢄⣄⡠⠴⠏⠻⣄⠀⠀⣸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⠟⠁⠀⠀⠀⠀⠀⠀⠉⠃⠀⠀⠰⠿⣿⣇⡉⣞⠻⢿⡆⠀⠀⠈⠀⠉⠉⢷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡿⠀⠀⠀⢀⡄⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⠿⠙⠿⢷⡆⠀⠀⠀⣤⠀⠀⠀⠀⠳⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⠁⠀⠀⢀⡼⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣤⠠⣤⡄⠀⠀⠀⠀⠹⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡆⠀⢀⡞⠀⣠⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣠⣿⡇⠀⠀⠀⠀⠀⠹⣧⠀⠀⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠁⠀⣾⢀⣼⡿⠉⠀⣳⣄⡀⠀⠀⠀⠀⠀⠹⣿⠏⠀⣀⣀⣀⡤⢿⣯⢻⡄⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⣿⣸⡟⠀⠀⠨⠿⢛⡿⠶⢦⣤⣀⣀⣤⡶⠾⠿⣟⠓⠶⠀⠈⢿⠀⣿⠀⢹⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣽⣷⣶⣿⣷⠀⢠⠄⠀⠀⠉⢀⣀⣤⠿⠉⠉⠙⣦⣤⠖⠊⠳⣄⠀⠀⠈⣡⣿⣤⣾⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⠟⣉⢙⣿⠃⣰⡏⠀⢀⡴⠒⠉⣿⠁⠀⠀⢠⠞⠉⠙⡆⠀⠀⠹⣆⠀⠀⣿⣿⠿⢿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⣼⡇⠾⢁⣾⣿⠀⠀⠈⠀⠀⠀⣿⠀⠀⣠⠀⠀⠀⠀⠉⠀⠀⠀⠈⠓⠀⠸⣇⢿⣿⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣇⢠⣿⣿⡿⢀⡀⠀⠀⠀⠀⠘⠀⣠⣿⠀⢰⡆⣤⠀⠀⠀⠀⠀⠀⠀⠀⠻⡎⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⣿⣿⣿⡀⣿⡟⠀⢸⠇⠀⠀⠀⣾⠀⣆⣿⣿⣷⣿⣷⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⣷⠋⠀⢰⣿⣠⡇⢸⣇⣿⣼⣿⣿⣿⣿⣿⡟⣿⠇⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⣿⣿⣿⠟⠀⢠⣿⣿⣿⣷⣾⣿⣿⣿⣿⣿⣿⡈⣿⡇⠟⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⣿⣿⣿⠏⠀⠀⠸⠁⣿⣿⣿⣿⣿⣿⣿⣿⣿⠹⡇⠘⠇⢀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⠟⣵⠀⠀⠀⠀⠸⡿⠉⢻⣿⣿⡿⣿⡌⣿⠀⠉⠀⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⠃⢸⣿⡄⠀⠀⠀⠀⠀⠀⣿⢻⣿⡇⣿⡇⠈⠀⠀⠀⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢻⣿⣿⣿⣿⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⠃⠀⠸⣿⣿⡄⠀⠀⠀⠀⠀⠃⠀⠿⠁⠘⠁⠀⠀⠀⠀⠀⠘⣿⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⣿⣿⠇⠀⠀⠀⠙⢿⣿⣦⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⣿⣿⡟⠀⠀⠀⠀⠀⠀⠙⠛⠀⠀⠀⠀⠀⢠⣀⣀⣀⣀⣀⣀⡀⠀⠀⠀⠀⢻⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣀⣿⣿⣿⣿⣿⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠿⠿⠿⠿⠿⠿⠿⠿⣷⣦⠀⠀⠈⠧⠀⠀⢀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡇⠀⠀⠀⠀⠀⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀
⠀⠀⠀⢀⣶⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⠿⠃⠀⠀⢦⣀⣴⣟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀
⠀⠀⣠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣦⣤⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⣿⣿⣿⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣆⠀
⢠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⢀⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣿⣿⣿⣿⣿⣷⣦⣤⣀⠀⠀⠀⣠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠂⠀⠀⢀⣴⣾⣿⣿⣿⣿⠿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠛⠛⠿⠿⠿⢿⣿⣿⣿⣷⠔⠚⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟
⠀⠙⠻⠿⣿⣿⣿⣿⣿⣿⠿⠟⠉⠁⠀⠀⠀⢰⡿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠙⠇⠀⠀⠀⠉⠙⠛⠛⠿⠿⠛⠋⠉⠀
⠀⠀⠀⠀⠀⠀⠉⠉⠀⠀⡀⠀⠀⠀⠀⠀⠀⠀⣘⢃⡿⠛⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⠀⠀⠀⠀⠀";
        }elseif($name == 'Asbraxas'){
            echo " 
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠣⡉⢦⢠⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣶⢃⣧⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡴⠞⠉⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠠⢵⡤⠻⢧⢄⠀⠀⠀⠀⠀⠀⠀⠀⢰⣏⣈⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⠤⡾⠗⠉⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣴⡺⣿⣉⣉⣉⡓⠲⡖⣚⣉⡿⡇⣾⡿⢄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡠⢖⡩⠗⠛⠛⠹⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⣹⣎⢎⠪⣿⡄⣨⣭⡭⠥⡿⡿⠁⣿⣿⡦⣙⠆⠤⠤⣄⠀⣀⣀⣾⠔⢊⡥⠒⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠃⡏⠉⣻⣆⠈⠙⢿⡿⠁⢀⣃⡧⢤⡜⣏⠑⠺⢍⠒⢲⡦⣽⠯⣍⣹⠾⠅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠛⠒⠲⠶⣄⣤⠤⣄⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⠞⣲⢣⠎⡇⠙⢦⡀⡠⢷⢔⣯⣽⠥⢆⣷⢻⠀⢀⡬⠿⠛⣪⣳⠟⡟⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢸⠃⠉⠉⠓⠒⠭⠭⢙⣒⡒⢿⠶⢶⣶⡧⢾⣧⡾⠠⣇⣀⠤⣿⣧⡀⢹⠿⢀⣀⡀⢹⣿⡿⢯⠀⢀⣼⡋⢩⢁⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠛⢶⣾⣾⣫⣍⡉⠉⢱⡖⢓⡶⠛⠛⠛⣶⣷⣜⣿⣧⣼⢋⣀⣴⣟⠉⠀⢹⣿⢼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢳⠹⡟⢿⢷⣚⢢⢼⡄⠀⢸⣿⢿⣿⡿⣧⣽⣞⣏⠛⠻⣏⡗⠤⣾⣽⠸⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠤⣷⢸⢄⡎⠙⢦⢿⣿⡶⢶⣾⠶⣿⣿⣿⡹⠿⠀⢀⡇⣹⠉⠙⠯⠷⢷⡶⣤⣤⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣜⡼⢀⠏⠘⣮⡤⠔⠚⢏⢁⣠⣾⢣⣿⣿⣞⣿⠛⢿⣿⣟⡽⠭⢿⢿⡿⣿⢾⡧⢾⡬⠭⣕⣒⡀⠤⢤⣀⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⢷⣸⣗⠿⢋⣀⣀⣠⡼⣻⢿⢧⣏⣀⢨⢯⣿⣧⣀⠿⣏⠀⢀⣧⣎⡜⠁⠀⠀⠀⠁⠀⠀⠀⠀⠈⠉⠉⢻⡟⠫⠶⠶⢤⣄⣀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢤⣤⡗⠹⣭⣷⠿⣗⣩⣿⣾⡏⢀⣜⣷⡾⣿⡯⠭⠺⡝⣇⠀⠘⣷⠊⡎⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠇⠀⠀⠀⠀⠀⠈
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⠔⢊⡡⣷⡞⣻⢩⡻⠒⠶⢾⠷⣝⠻⢏⡀⠰⠀⠝⣿⣀⣷⣬⢿⡤⣩⣻⢃⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠔⣊⠴⠂⠁⠀⠙⣷⣡⠟⠀⠀⡠⠊⠀⠀⠑⠢⣝⡶⣂⣀⣉⣩⣾⣘⠒⣛⣿⣽⡿⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⡠⣔⠯⠒⠉⠀⠀⠀⠀⠀⣼⣿⡟⢷⡒⢋⠀⠀⠀⠀⠀⠀⢸⡏⠀⠀⠀⠘⡆⠘⡙⣣⡗⢳⣤⠛⣗⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣠⡶⠟⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⣷⠟⢧⠈⠳⢼⣖⡀⠀⠀⣀⠀⠈⠀⠀⠀⢀⣸⢱⡄⣷⡏⠀⠐⠋⠳⡌⢦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⢀⡤⠖⠋⢱⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⡛⠀⢸⢷⡜⡮⢻⢦⡀⠀⠀⠉⠁⠀⠀⢀⡴⢾⢪⣷⢷⣃⣸⣀⠀⠀⠈⢦⣣⣀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡌⡇⠀⡸⠀⢽⣷⣼⠀⠙⠦⣀⣀⣠⠴⣾⣻⡷⠛⣧⠟⣃⡀⢀⣈⡑⠦⡀⣔⣋⣠⡧⠤⡜⠳⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠁⠃⣰⠁⡄⠉⣻⠻⡤⣀⠀⠀⢀⡏⠀⣿⣯⣧⣞⠁⡴⡿⡠⠊⠉⠉⠫⣠⠒⠉⠁⠙⢆⢈⣦⣈⣣⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⠇⠀⠐⠁⠀⡡⣾⣽⣷⣧⡙⠒⡷⣳⠒⣺⠟⠓⢦⡉⠙⠛⢿⣅⠀⠀⠀⠀⠀⠀⠀⠀⢠⢿⣯⡁⢣⣤⠖⠋⠀⢹⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠎⢀⣠⢴⣲⣿⠶⣧⡈⣟⡻⣟⡾⣷⡷⠞⠁⠀⢦⣄⠉⠲⡄⣼⡬⠦⡀⠀⠀⠀⠀⣠⣾⠟⢉⡏⣧⢸⡄⢱⣴⢺⠈⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⠤⢼⡾⡵⢪⡿⢛⢿⣃⣬⣿⠋⣹⣾⠋⡌⠀⠀⠀⢀⣧⡘⢫⣜⡴⠋⣠⠞⢯⣵⣄⣠⢊⡼⢥⣴⡻⡀⢳⣺⣷⣚⣻⡇⠀⢱⣄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡴⠋⣷⢦⣿⡵⢷⣿⣱⣳⠚⢿⣾⣇⣴⡟⠁⠀⢱⡀⠀⣠⡿⠉⠉⠉⢉⣩⡾⠟⢗⣦⣍⣙⡷⠯⠖⠛⢼⣿⡱⣄⠁⠈⠫⣥⠀⠀⠈⡿⡄⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣰⣟⠀⣼⣮⣼⡳⠀⠀⢙⢯⣗⢤⣰⣿⣎⣽⡀⢀⣀⡠⢷⣾⣋⣀⣠⠤⢾⣿⣿⣷⣤⡈⢏⢿⣹⠤⣀⠀⠀⠀⣟⡆⢻⠛⠦⣄⣿⣄⣀⡰⡃⡇⠀⠀⠀⠀
⠀⠀⠀⠀⢀⡠⠔⠋⡎⢈⠓⣯⡘⣼⣽⣄⣀⣾⠳⠋⠈⣿⠿⡽⠉⢿⠉⠉⠉⢿⣇⡀⢸⣀⣴⢿⣿⣝⣿⣿⣿⣾⢸⠗⠀⠀⠉⠒⠦⡇⢹⢮⠤⠖⠛⢻⡿⣿⡧⢵⡟⠀⠀⠀⠀
⠀⠀⠀⢰⠛⡢⣄⡜⠠⠋⡰⠛⡿⣾⠿⠛⣿⣅⠀⠀⢠⢾⢰⠃⠀⠀⠦⠀⠀⠸⣿⢾⡟⣏⣹⣿⣯⣻⣮⠙⣿⣿⣇⠀⠔⢄⠀⠀⠀⣯⠺⡈⢦⣷⠈⣁⣴⣟⡡⢻⠇⠀⠀⠀⠀
⠀⠀⠀⠘⢇⣀⣈⠽⣄⠼⠁⠘⡄⢸⢧⡜⠀⠙⢿⢶⣿⣸⠇⠀⠀⠀⢀⢹⣶⣒⠛⣿⣷⠻⣇⣿⡞⣿⢿⣾⡟⢣⡈⠻⣦⡈⢆⠀⢰⠳⣄⡹⡄⠈⡟⠛⠋⠀⢀⡼⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢸⣇⠀⢨⣿⣄⣰⠁⡇⠀⢷⠀⠀⠀⠘⢉⠏⠀⠀⠀⠀⡞⣿⣿⣘⣯⣿⢻⣦⣻⣜⣿⣾⠿⠛⢷⣌⡟⢦⠈⠙⢾⣇⣸⣳⡈⢛⡇⢸⠁⠀⠀⠀⢸⡇⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠁⠉⠉⢻⣿⣧⣸⠀⠀⠇⣣⡀⠀⢀⠎⠀⠀⠀⠀⣰⣸⢿⡿⠿⠿⣿⡜⣿⡟⠋⠙⣽⡀⠀⠸⣾⣳⣄⠑⢄⠀⢈⡟⣶⣽⣮⢠⡇⠀⠀⠀⠀⣾⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢀⠀⢀⢀⢸⣿⣿⣿⡄⣰⠀⡇⢣⣰⠟⠀⠀⠀⠀⢀⠇⣿⣾⡇⠀⠀⠈⢳⣿⠀⠀⠀⠘⡳⡀⠀⠹⣯⢻⣿⣮⣇⣸⣽⢾⣄⢸⡼⠀⠀⠀⠀⠘⡏⠀⠀⠀⠀⠀⠀
⠀⠀⠶⢴⠶⣾⠿⠿⠿⢽⠁⢸⢿⣾⣿⢶⡤⣺⡟⠀⠀⠀⠀⠀⡸⢰⡿⣿⠀⠀⠀⠀⠘⣿⡀⠀⠀⠀⠙⡵⡄⠀⠘⣿⣿⡸⣿⠻⣜⠈⢻⣿⠃⠀⠀⠀⠀⡌⡇⠀⠀⠀⠀⠀⠀
⠀⠀⠐⠋⠉⠉⠉⠁⢒⣸⠀⢈⣆⣩⣽⢿⣏⡝⠀⠀⠀⠀⠀⢠⣇⣿⣿⡇⠀⠀⠀⠀⠀⢿⡇⠀⠀⠀⠀⠙⣜⢆⠀⣿⣷⣳⣉⢳⣌⣳⣼⠇⠀⠀⠀⠀⠀⢽⠀⠀⠀⠀⠀⠀⠀";
        }elseif($name == 'King Straticut'){
            echo "
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⢖⣹⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡴⢛⣵⠞⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡴⣻⣿⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡴⢛⣡⠿⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣤⣶⣶⣶⣶⣶⣶⣤⣀⠀⠀⣀⡴⠻⣱⠴⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⣿⣿⣯⣀⣭⠉⠛⣿⣿⣿⣷⣶⡋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⣿⣿⡿⣿⣦⣤⡼⠛⠛⠿⣶⣖⣠⢄⣤⡤⠒⠒⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠀⠀⠀⠀⢀⣀⣤⣷⣽⣿⣽⡾⣿⡄⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⡟⣧⢤⣴⣶⣿⣟⣻⣾⣿⣿⣿⣯⣛⢺⡿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣷⣶⡿⢿⣿⣿⣿⣿⡿⡿⣟⠹⡿⣿⣿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣾⣿⣿⣟⣟⣉⣽⣯⣽⣿⣿⣿⡻⣿⡻⡄⣷⣯⣯⣻⣶⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣶⡾⣿⣿⣿⣿⣿⣹⣿⣯⣿⣿⣿⡻⣦⣙⢷⣶⣿⣿⣿⣥⣿⣿⣟⣿⣣⣀⠀⠀⠀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣧⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⣯⣿⣻⣿⣷⣿⣿⣻⣿⣿⣿⣿⣻⡏⠬⠻⣾⡯⠛⠛⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⣿⣿⣿⡿⠏⢛⣿⣿⣷⣀⢭⣝⢿⣿⣿⣿⣿⣿⡿⣿⣿⣿⣿⣿⡿⢿⡇⠀⠀⠈⠉⠳⢄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣴⡾⠟⠉⠀⠀⠀⠀⠰⠫⣥⠜⠛⣿⣿⣿⣾⣿⣿⣿⣿⣿⣿⣿⡷⠋⢹⣿⣿⠻⠂⠀⠀⠀⣤⣀⠀⣭⣷⣦⣤⣤⠔⢋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢰⣿⣿⠿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣶⣿⣽⠿⢿⣿⣿⣿⣿⣿⣿⡏⠀⢸⣿⣿⣱⣀⣀⣀⣀⣘⡯⠉⠛⠛⠻⠿⠶⠚⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠈⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣏⠛⠛⣦⣅⣠⣾⣿⣿⣿⣿⣿⣷⣶⣿⣿⣿⠓⢿⣛⠲⣤⣤⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⡾⠿⠷⣬⣍⡉⢳⣿⣿⣿⢿⣿⣷⣿⣿⣿⣿⣿⣾⡉⠛⢦⣀⡿⢶⣶⣶⣶⢶⣶⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⡿⠿⣤⣤⣤⡀⢀⣹⣿⣿⣻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣍⡛⢦⡀⠀⠈⠁⠀⠙⠓⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣾⣿⣯⣴⣶⣴⣴⣿⡟⠙⣿⣿⣿⣿⣷⣿⣿⣿⣿⣿⣿⣿⠾⢿⣿⣿⣿⣿⡷⣿⣟⣶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⣴⣿⣿⣿⣟⣯⢍⣡⡤⠟⠋⠀⠀⠀⢻⡿⢿⣿⣿⣿⡿⣿⡟⠁⢀⡀⠀⠀⠉⠉⠛⢿⣿⣿⣾⣽⣿⣄⣀⣀⣀⣤⡤⣤⣴⡾⠟⠛⠒⠒⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢀⡤⠖⢻⡟⠋⣡⣶⣿⣿⡟⢻⠿⢋⣀⣠⣶⡦⠀⠀⡀⠁⠀⠉⣠⣍⣽⠏⠀⠀⡟⡇⠀⠀⣤⡀⠀⠉⣿⣿⣻⣯⣏⠀⠉⢉⡀⠀⣈⣿⡦⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢀⣾⣟⣿⣿⣿⣧⣴⡿⣹⠿⢿⣷⣯⠔⠁⣠⠞⠁⠀⢰⢯⠟⠀⠀⣸⠛⠋⡟⠀⠀⢸⢸⣇⡀⠀⠈⢧⠀⠀⢻⣿⡖⠚⠻⣖⠦⢤⣤⣛⣛⣒⣺⠿⢷⠛⠛⠛⠒⠤⣀⠀
⠀⠀⢰⡾⠋⣩⡾⢉⣿⣿⢫⣿⢽⣷⣾⣿⡗⠈⣉⡀⣠⣴⣶⠟⠋⠀⣠⡼⠁⠀⠀⠷⣦⠀⢸⡜⢸⡇⠀⠀⠈⠰⡤⣀⣻⣿⣯⡴⣾⡦⠤⣄⣀⣀⣠⠴⠶⠂⠀⠀⠀⠀⠀⠈⠁
⡀⢠⠏⠀⠰⠋⠀⣿⣾⣯⢟⡴⢛⣵⣿⣋⣀⠴⠻⢛⣿⠏⢠⣤⢴⣾⠟⠁⠀⠀⠀⠀⣿⣆⠈⠳⣄⠙⣦⣀⡀⠀⠹⣆⠙⠯⢿⣿⣿⢣⡀⣀⣈⠙⢖⡒⠒⢤⣀⣀⠀⡀⣀⠀⠀
⡇⠉⠀⠀⠀⠀⢠⣿⡿⣷⠟⠀⣿⡆⠹⡏⠀⠀⠀⠸⣿⡖⠋⠁⢸⣇⠀⠀⠀⠀⠀⠀⠈⠻⠦⢄⣨⠿⠷⡏⣧⠀⢠⣼⡆⠀⠀⠙⣿⣷⣿⡦⠈⠳⠾⠧⠞⠳⠿⠿⠿⠋⠁⠀⠀
⠃⠀⠀⠀⠀⢠⣿⣿⣾⡏⠀⠀⠘⠦⡤⣙⣦⡀⠀⠀⠻⢷⣄⡀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⠯⠟⠿⠷⠞⠃⠀⢹⣿⣟⠙⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢀⣴⣿⣻⡿⣻⡇⠀⠀⠀⠀⠀⠀⠉⠙⠓⠀⠀⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡉⠛⣦⣼⣯⠗⣦⣄⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⣰⡾⠋⣴⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠋⠛⠛⠛⠛⠛⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠙⠓⠛⠋⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀";
        }elseif($name == 'Mimic'){
          echo "
          ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⠀⠀⠀
          ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠿⣿⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⡿⠀⠀⠀
          ⠀⠀⠀⠀⠀⠀⠀⣀⣀⣤⣤⠀⣉⠑⠀⠠⣤⣤⣤⣤⣤⠀⠀⠚⢉⠀⡀⠀⠀⠀
          ⠀⠀⣠⣴⣶⣶⠆⢀⣈⡉⠛⠀⠉⠀⠓⠒⠙⠛⠛⠛⠃⠒⠒⠀⠉⠠⠿⠦⠀⠀
          ⠀⣸⣿⣿⡿⠋⣠⡿⠋⠀⢸⣿⠏⢸⣿⣿⠁⢻⣿⠃⠈⢿⡿⠀⣶⣶⠀⣶⡤⠀
          ⠀⣿⣿⠟⢁⣼⠟⡁⢾⣧⠀⠋⠀⠈⢿⠇⠀⠀⠃⠀⠀⠘⠁⠀⢸⡟⠀⠙⠁⠀
          ⠀⠸⠋⣠⡿⠃⣴⡇⠀⠀⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⠁⠀⠀⠀⠀
          ⠀⠀⢰⡟⠀⢀⠀⠉⡀⠀⠀⠀⠀⠀⣰⠀⠀⠀⠀⠀⠀⠀⠀⠀⣆⠀⠀⠀⠀⠀
          ⠀⠀⠀⠀⠰⣿⡄⣴⣇⠀⣰⣇⠀⣰⣿⡇⠀⣴⡄⠀⢰⣆⠀⢰⣿⡄⢠⣷⡀⠀
          ⠀⠀⠀⣶⣶⣤⣤⣍⡉⢀⣉⠙⠀⠛⠛⠓⠐⠛⠓⠀⠛⠛⠂⠚⠛⠁⣈⣉⠁⠀
          ⠀⠀⠀⣿⣿⣿⣿⣿⠁⣼⣿⣿⣿⣿⣿⡇⢸⣿⠟⣿⡇⢸⣿⣿⣿⣿⣿⣿⠀⠀
          ⠀⠀⠀⠸⣿⣿⣿⣿⠀⣿⣿⣿⣿⣿⣿⡇⢸⣿⠄⣿⡇⢸⣿⣿⣿⣿⣿⣿⠀⠀
          ⠀⠀⠀⠄⠹⣿⡿⠋⠀⠙⢿⣿⣿⣿⣿⡇⢸⣿⣤⣿⡇⢸⣿⣿⣿⣿⣿⠟⠀⠀
          ⠀⠀⠀⠀⠀⠉⠀⠺⠀⣧⡈⢻⣿⣿⣿⣷⣶⣶⣶⣶⣶⣾⣿⣿⣿⡿⠃⣰⠀⠀
          ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠁⠀⠀⠀⠀
          ";
        }
    }
}

// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⠤⠤⠤⠤⠤⢤⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢺⡄⠀⠀⠀⠀⠀⠀⠈⠉⠒⠦⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢳⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢢⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣳⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣆⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⡃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣜⣄⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣀⣀⣀⡀⠀⠘⢾⣆⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣊⠁⣀⣀⣀⣀⣀⠤⠤⠔⠒⠒⠚⠉⠉⠉⠉⠉⠉⠉⠁⠀⠀⠉⠓⠦⡀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⡠⠒⠉⠁⠀⠈⠉⠉⠉⠁⠀⣀⣀⣀⡤⠤⠤⠴⠒⠒⠲⠤⠤⢤⣀⡀⠀⠀⠀⠀⣈⡆⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⣹⢤⢤⣀⣀⣀⣠⣤⠴⢲⣏⣽⠧⣄⠀⠀⠀⠀⠀⠀⢰⡶⡦⢤⡀⠹⡟⢖⠒⠒⢻⡀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⢸⡇⢼⠁⠀⡽⣿⣼⠃⠀⠹⠿⠷⠟⠛⠃⠀⠀⠀⠀⠀⠈⠉⠛⠚⠾⠆⣷⠸⡅⠙⢦⡇⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠸⡇⢈⢤⡞⡝⣫⢻⠀⠀⠀⠀⢰⣶⣤⣄⠀⠀⠀⠀⠀⠀⣴⣶⣂⠀⠀⢸⠀⢻⡄⣾⡇⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠹⣞⣘⣾⣕⡿⡸⠀⠀⠀⠀⠺⠿⣿⠗⠀⢀⣠⠤⢄⡘⢿⣿⠟⠀⠀⠈⡆⢸⣟⡿⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⣾⣟⡾⡞⠀⡇⠀⠀⠀⠀⠀⠀⠉⠀⣠⠏⠀⠀⠀⠑⣟⠉⠀⠀⠀⠀⢱⠀⣯⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⢀⣠⣿⣼⣘⡁⠀⢧⡀⠀⠀⠀⠀⠀⢀⣠⡿⣖⠦⠤⢖⣲⢯⣀⠀⠀⠀⠀⢸⠀⢸⡄⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⣠⠖⠋⠁⠀⠀⠀⠉⠓⢤⠙⠒⢒⣒⣒⡿⣝⡯⠋⠁⣀⣀⡀⠉⠻⣯⢍⠑⠒⢴⡚⠒⢸⠃⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⢰⡇⠀⠀⠀⠀⠀⠀⠀⠀⠈⣷⠀⠈⠩⠓⠋⣁⡠⠴⣏⣁⣈⣩⠷⠦⣈⡚⠽⢖⠤⠤⣠⣿⡀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠘⣷⡄⠀⠀⠀⠀⠀⠀⠀⣠⠏⢑⡖⠒⠒⣫⠏⠀⠀⠀⠸⡆⠀⠀⠀⠈⢉⠒⠒⠒⠒⠁⢸⠙⣆⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⢀⣴⡿⠚⠦⠤⠤⠤⠤⢤⠞⠋⢠⠋⠀⣰⢲⠇⠀⠀⠀⠀⠀⢹⠀⠀⢀⠀⠀⠳⡀⠀⠀⠀⣠⡇⠘⣄⠀ ⠀⠀⠀⠀⠀
// ⣠⡟⡞⠀⠀⠀⠀⠀⠀⠀⣼⡃⢀⡟⠀⣰⠃⣽⡄⠀⠀⠀⠀⠀⠈⣆⠀⠀⠀⠀⠀⢣⠀⠀⠀⢻⢿⣯⣽⠽ ⠶⣄⠀⠀⠀
// ⢽⡇⠇⠀⠐⠒⠒⠒⠒⠋⠁⣻⡎⠁⢠⠃⠀⢹⡇⠀⠀⠀⠀⠀⢠⠏⠀⠀⣇⠀⠀⢸⠀⠀⢴⡾⠀⢷⡉⢱ ⡀⠈⠳⣄⠀
// ⢸⠀⡇⠀⠀⢤⣀⣀⣀⣀⠔⢹⡧⡄⠸⡄⠀⢸⡇⠀⠀⠀⠀⢀⡞⠀⠀⠀⣿⠀⠀⡎⠀⢰⣸⢧⠉⠙⣟⠊ ⢁⣴⠆⠈⣇
// ⠘⣇⠹⣆⠀⣀⡈⠉⠉⢀⣠⡛⠀⠙⠲⣏⠀⠘⠃⠀⠀⠀⠀⡞⠀⠀⠀⢠⡏⠀⠀⡇⣄⣴⠋⢈⡷⠀⣿⠀ ⠀⣻⡤⢴⡏
// ⠀⠘⠦⣈⣣⣌⣉⠒⠚⠉⣸⠁⠀⠀⠀⠘⢦⠀⠀⠀⠀⠀⢠⠃⠀⠀⠀⡞⠀⠀⠀⢁⡿⠁⠀⣼⡀⠀⠀⢀ ⣸⣏⠀⣠⠇
// ⠀⠀⠀⠀⢉⡏⠉⠉⡹⠉⡇⠀⠀⠀⠀⠀⠀⠙⢦⠀⠀⠀⢸⠀⠀⠀⡸⠁⠀⠀⣺⠋⠀⠀⣴⠃⠙⠢⣄⣈ ⣿⠉⣿⡟⠀
// ⠀⠀⠀⠀⡜⠀⠀⢠⠃⢰⠁⠀⠀⠀⠀⠀⠀⠀⠈⠣⣄⡀⠈⠀⢀⠜⠁⢀⡤⠴⠋⠀⢀⣜⠁⠀⠀⠀⠀⠻ ⠼⠿⠉⠀⠀
// ⠀⠀⠀⢀⡇⠀⢀⠏⠀⠈⡣⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠢⡀⢋⡤⠔⠊⢀⣀⡤⠖⠁⢹⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⣾⠀⠀⡜⠀⢠⡏⠀⠀⠉⠉⠉⠒⠒⠒⠤⠤⠤⡤⠤⠽⠟⠒⠒⠉⠉⠀⠀⢀⡤⠊⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⡟⠀⣰⠁⠀⢨⠇⠦⠤⣄⣀⣀⠀⠀⠀⠀⠀⢀⣷⠀⠀⠀⠀⠀⣀⣀⠤⠚⠙⣇⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⠀⡇⢀⡏⠀⠀⡎⠀⠀⠀⠀⠀⠉⠉⠑⠒⠒⠚⠉⡇⠐⠒⠒⠉⠉⠉⠀⠀⠀⠀⠙⠦⣀⡀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⢠⡇⠸⠀⢀⡼⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠒⢤⡀⠀ ⠀⠀⠀⠀⠀
// ⠀⠀⢸⡇⠁⣠⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣆ ⠀⠀⠀⠀⠀
// ⠀⠀⢸⡇⣰⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈ ⣇⠀⠀⠀⠀
// ⠀⠀⢸⡇⢻⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣔⡋⠙⠒⠦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⣽⠀⠀⠀⠀
// ⠀⠀⠘⢧⣀⣷⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⢏⡼⠛⠒⠤⢄⣀⠉⠒⠢⠤⢄⣀⣀⣀⣀⣀⣀⣀⠤⢜ ⡿⠀⠀⠀⠀
// ⠀⠀⠀⠀⠈⢿⣈⠙⠒⠦⠤⠤⠤⠤⠤⠤⠔⢊⡵⠋⠀⠀⠀⠀⠀⠈⠉⠒⠒⠢⠤⠤⠤⠤⠤⠤⠤⠤⠴⠚ ⠁⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠉⠙⠒⠒⠒⠒⠒⠒⠒⠒⠂⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀