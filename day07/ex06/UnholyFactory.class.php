<?php
    class UnholyFactory {

        private $ar;

        public function __construct(){
            $this->ar = array();
        }

        public function absorb($solder){
            if ($solder instanceof Fighter)
            {
                if (array_key_exists($solder->field, $this->ar))
                    print "(Factory already absorbed a fighter of type foot soldier)\n";
                else
                {
                    $this->ar[$solder->field] = $solder;
                    printf ("(Factory absorbed a fighter of type %s)\n",
                            $solder->field);
                }
            }
            else
                print "(Factory can't absorb this, it's not a fighter)\n";
        }

        public function fabricate($rf){
           if (array_key_exists($rf, $this->ar)) {
               printf("(Factory fabricates a fighter of type %s)\n",
                   $rf);
               return clone ($this->ar[$rf]);
           }
           else {
               printf("(Factory hasn't absorbed any fighter of type %s)\n",
                   $rf);
               return NULL;
           }
        }
    }