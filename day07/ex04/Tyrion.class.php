<?php
    class Tyrion extends Lannister{
        public function sleepWith($tmp)
        {
            if (get_class($tmp) == 'Jaime')
                print "Not even if I'm drunk !\n";
            else if(get_class($tmp) == 'Cersei')
                print("Not even if I'm drunk !\n");
            else if (get_class($tmp) == 'Sansa')
                print("Let's do this.\n");
        }
    }