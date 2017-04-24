<?php
    class Jaime extends Lannister {
        public function sleepWith($tmp)
        {
            if (get_class($tmp) == 'Tyrion')
                print "Not even if I'm drunk !\n";
            else if (get_class($tmp) == 'Sansa')
                print "Let's do this.\n";
            else if (get_class($tmp) == 'Cersei')
                print "With pleasure, but only in a tower in Winterfell, then.\n";
        }
    }